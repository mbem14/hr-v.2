<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEmployeeHistoryJobRequest;
use App\Http\Requests\StoreEmployeeHistoryJobRequest;
use App\Http\Requests\UpdateEmployeeHistoryJobRequest;
use App\Models\CompanyStructure;
use App\Models\Employee;
use App\Models\EmployeeHistoryJob;
use App\Models\JobTitle;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeHistoryJobsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_history_job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeHistoryJob::with(['employee', 'job', 'department', 'created_by'])->select(sprintf('%s.*', (new EmployeeHistoryJob)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_history_job_show';
                $editGate      = 'employee_history_job_edit';
                $deleteGate    = 'employee_history_job_delete';
                $crudRoutePart = 'employee-history-jobs';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->addColumn('employee_employee_number', function ($row) {
                return $row->employee ? $row->employee->employee_number : '';
            });

            $table->addColumn('job_code', function ($row) {
                return $row->job ? $row->job->code : '';
            });

            $table->addColumn('department_title', function ($row) {
                return $row->department ? $row->department->title : '';
            });

            $table->editColumn('file', function ($row) {
                return $row->file ? '<a href="' . $row->file->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->editColumn('notes', function ($row) {
                return $row->notes ? $row->notes : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'job', 'department', 'file']);

            return $table->make(true);
        }

        return view('admin.employeeHistoryJobs.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_history_job_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $jobs = JobTitle::all()->pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $departments = CompanyStructure::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employeeHistoryJobs.create', compact('employees', 'jobs', 'departments'));
    }

    public function store(StoreEmployeeHistoryJobRequest $request)
    {
        $employeeHistoryJob = EmployeeHistoryJob::create($request->all());

        if ($request->input('file', false)) {
            $employeeHistoryJob->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $employeeHistoryJob->id]);
        }

        return redirect()->route('admin.employee-history-jobs.index');
    }

    public function edit(EmployeeHistoryJob $employeeHistoryJob)
    {
        abort_if(Gate::denies('employee_history_job_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $jobs = JobTitle::all()->pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $departments = CompanyStructure::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeeHistoryJob->load('employee', 'job', 'department', 'created_by');

        return view('admin.employeeHistoryJobs.edit', compact('employees', 'jobs', 'departments', 'employeeHistoryJob'));
    }

    public function update(UpdateEmployeeHistoryJobRequest $request, EmployeeHistoryJob $employeeHistoryJob)
    {
        $employeeHistoryJob->update($request->all());

        if ($request->input('file', false)) {
            if (!$employeeHistoryJob->file || $request->input('file') !== $employeeHistoryJob->file->file_name) {
                if ($employeeHistoryJob->file) {
                    $employeeHistoryJob->file->delete();
                }

                $employeeHistoryJob->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
            }
        } elseif ($employeeHistoryJob->file) {
            $employeeHistoryJob->file->delete();
        }

        return redirect()->route('admin.employee-history-jobs.index');
    }

    public function show(EmployeeHistoryJob $employeeHistoryJob)
    {
        abort_if(Gate::denies('employee_history_job_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeHistoryJob->load('employee', 'job', 'department', 'created_by');

        return view('admin.employeeHistoryJobs.show', compact('employeeHistoryJob'));
    }

    public function destroy(EmployeeHistoryJob $employeeHistoryJob)
    {
        abort_if(Gate::denies('employee_history_job_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeHistoryJob->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeHistoryJobRequest $request)
    {
        EmployeeHistoryJob::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('employee_history_job_create') && Gate::denies('employee_history_job_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new EmployeeHistoryJob();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
