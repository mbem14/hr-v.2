<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEmployeeCertificationRequest;
use App\Http\Requests\StoreEmployeeCertificationRequest;
use App\Http\Requests\UpdateEmployeeCertificationRequest;
use App\Models\Employee;
use App\Models\EmployeeCertification;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeCertificationsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_certification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeCertification::with(['employee', 'created_by'])->select(sprintf('%s.*', (new EmployeeCertification)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_certification_show';
                $editGate      = 'employee_certification_edit';
                $deleteGate    = 'employee_certification_delete';
                $crudRoutePart = 'employee-certifications';

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
            $table->editColumn('certification', function ($row) {
                return $row->certification ? $row->certification : "";
            });
            $table->addColumn('employee_employee_number', function ($row) {
                return $row->employee ? $row->employee->employee_number : '';
            });

            $table->editColumn('institute', function ($row) {
                return $row->institute ? $row->institute : "";
            });

            $table->editColumn('file', function ($row) {
                return $row->file ? '<a href="' . $row->file->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'file']);

            return $table->make(true);
        }

        return view('admin.employeeCertifications.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_certification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employeeCertifications.create', compact('employees'));
    }

    public function store(StoreEmployeeCertificationRequest $request)
    {
        $employeeCertification = EmployeeCertification::create($request->all());

        if ($request->input('file', false)) {
            $employeeCertification->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $employeeCertification->id]);
        }

        return redirect()->route('admin.employee-certifications.index');
    }

    public function edit(EmployeeCertification $employeeCertification)
    {
        abort_if(Gate::denies('employee_certification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeeCertification->load('employee', 'created_by');

        return view('admin.employeeCertifications.edit', compact('employees', 'employeeCertification'));
    }

    public function update(UpdateEmployeeCertificationRequest $request, EmployeeCertification $employeeCertification)
    {
        $employeeCertification->update($request->all());

        if ($request->input('file', false)) {
            if (!$employeeCertification->file || $request->input('file') !== $employeeCertification->file->file_name) {
                if ($employeeCertification->file) {
                    $employeeCertification->file->delete();
                }

                $employeeCertification->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
            }
        } elseif ($employeeCertification->file) {
            $employeeCertification->file->delete();
        }

        return redirect()->route('admin.employee-certifications.index');
    }

    public function show(EmployeeCertification $employeeCertification)
    {
        abort_if(Gate::denies('employee_certification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeCertification->load('employee', 'created_by');

        return view('admin.employeeCertifications.show', compact('employeeCertification'));
    }

    public function destroy(EmployeeCertification $employeeCertification)
    {
        abort_if(Gate::denies('employee_certification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeCertification->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeCertificationRequest $request)
    {
        EmployeeCertification::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('employee_certification_create') && Gate::denies('employee_certification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new EmployeeCertification();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
