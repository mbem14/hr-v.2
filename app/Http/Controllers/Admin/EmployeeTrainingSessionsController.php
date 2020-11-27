<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEmployeeTrainingSessionRequest;
use App\Http\Requests\StoreEmployeeTrainingSessionRequest;
use App\Http\Requests\UpdateEmployeeTrainingSessionRequest;
use App\Models\Employee;
use App\Models\EmployeeTrainingSession;
use App\Models\TrainingSession;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeTrainingSessionsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_training_session_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeTrainingSession::with(['employees', 'training_session', 'created_by'])->select(sprintf('%s.*', (new EmployeeTrainingSession)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_training_session_show';
                $editGate      = 'employee_training_session_edit';
                $deleteGate    = 'employee_training_session_delete';
                $crudRoutePart = 'employee-training-sessions';

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
            $table->editColumn('employee', function ($row) {
                $labels = [];

                foreach ($row->employees as $employee) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $employee->employee_number);
                }

                return implode(' ', $labels);
            });
            $table->addColumn('training_session_name', function ($row) {
                return $row->training_session ? $row->training_session->name : '';
            });

            $table->editColumn('feedback', function ($row) {
                return $row->feedback ? $row->feedback : "";
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? EmployeeTrainingSession::STATUS_SELECT[$row->status] : '';
            });
            $table->editColumn('proof', function ($row) {
                return $row->proof ? '<a href="' . $row->proof->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'training_session', 'proof']);

            return $table->make(true);
        }

        return view('admin.employeeTrainingSessions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_training_session_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id');

        $training_sessions = TrainingSession::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employeeTrainingSessions.create', compact('employees', 'training_sessions'));
    }

    public function store(StoreEmployeeTrainingSessionRequest $request)
    {
        $employeeTrainingSession = EmployeeTrainingSession::create($request->all());
        $employeeTrainingSession->employees()->sync($request->input('employees', []));

        if ($request->input('proof', false)) {
            $employeeTrainingSession->addMedia(storage_path('tmp/uploads/' . $request->input('proof')))->toMediaCollection('proof');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $employeeTrainingSession->id]);
        }

        return redirect()->route('admin.employee-training-sessions.index');
    }

    public function edit(EmployeeTrainingSession $employeeTrainingSession)
    {
        abort_if(Gate::denies('employee_training_session_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id');

        $training_sessions = TrainingSession::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeeTrainingSession->load('employees', 'training_session', 'created_by');

        return view('admin.employeeTrainingSessions.edit', compact('employees', 'training_sessions', 'employeeTrainingSession'));
    }

    public function update(UpdateEmployeeTrainingSessionRequest $request, EmployeeTrainingSession $employeeTrainingSession)
    {
        $employeeTrainingSession->update($request->all());
        $employeeTrainingSession->employees()->sync($request->input('employees', []));

        if ($request->input('proof', false)) {
            if (!$employeeTrainingSession->proof || $request->input('proof') !== $employeeTrainingSession->proof->file_name) {
                if ($employeeTrainingSession->proof) {
                    $employeeTrainingSession->proof->delete();
                }

                $employeeTrainingSession->addMedia(storage_path('tmp/uploads/' . $request->input('proof')))->toMediaCollection('proof');
            }
        } elseif ($employeeTrainingSession->proof) {
            $employeeTrainingSession->proof->delete();
        }

        return redirect()->route('admin.employee-training-sessions.index');
    }

    public function show(EmployeeTrainingSession $employeeTrainingSession)
    {
        abort_if(Gate::denies('employee_training_session_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeTrainingSession->load('employees', 'training_session', 'created_by');

        return view('admin.employeeTrainingSessions.show', compact('employeeTrainingSession'));
    }

    public function destroy(EmployeeTrainingSession $employeeTrainingSession)
    {
        abort_if(Gate::denies('employee_training_session_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeTrainingSession->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeTrainingSessionRequest $request)
    {
        EmployeeTrainingSession::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('employee_training_session_create') && Gate::denies('employee_training_session_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new EmployeeTrainingSession();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
