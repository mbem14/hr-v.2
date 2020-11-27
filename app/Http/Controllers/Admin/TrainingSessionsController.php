<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTrainingSessionRequest;
use App\Http\Requests\StoreTrainingSessionRequest;
use App\Http\Requests\UpdateTrainingSessionRequest;
use App\Models\Course;
use App\Models\TrainingSession;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TrainingSessionsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('training_session_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = TrainingSession::with(['course'])->select(sprintf('%s.*', (new TrainingSession)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'training_session_show';
                $editGate      = 'training_session_edit';
                $deleteGate    = 'training_session_delete';
                $crudRoutePart = 'training-sessions';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->addColumn('course_code', function ($row) {
                return $row->course ? $row->course->code : '';
            });

            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });

            $table->editColumn('delivery_method', function ($row) {
                return $row->delivery_method ? TrainingSession::DELIVERY_METHOD_SELECT[$row->delivery_method] : '';
            });
            $table->editColumn('location', function ($row) {
                return $row->location ? $row->location : "";
            });
            $table->editColumn('attendance_type', function ($row) {
                return $row->attendance_type ? TrainingSession::ATTENDANCE_TYPE_SELECT[$row->attendance_type] : '';
            });
            $table->editColumn('attachment', function ($row) {
                return $row->attachment ? '<a href="' . $row->attachment->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'course', 'attachment']);

            return $table->make(true);
        }

        return view('admin.trainingSessions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('training_session_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $courses = Course::all()->pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.trainingSessions.create', compact('courses'));
    }

    public function store(StoreTrainingSessionRequest $request)
    {
        $trainingSession = TrainingSession::create($request->all());

        if ($request->input('attachment', false)) {
            $trainingSession->addMedia(storage_path('tmp/uploads/' . $request->input('attachment')))->toMediaCollection('attachment');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $trainingSession->id]);
        }

        return redirect()->route('admin.training-sessions.index');
    }

    public function edit(TrainingSession $trainingSession)
    {
        abort_if(Gate::denies('training_session_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $courses = Course::all()->pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $trainingSession->load('course');

        return view('admin.trainingSessions.edit', compact('courses', 'trainingSession'));
    }

    public function update(UpdateTrainingSessionRequest $request, TrainingSession $trainingSession)
    {
        $trainingSession->update($request->all());

        if ($request->input('attachment', false)) {
            if (!$trainingSession->attachment || $request->input('attachment') !== $trainingSession->attachment->file_name) {
                if ($trainingSession->attachment) {
                    $trainingSession->attachment->delete();
                }

                $trainingSession->addMedia(storage_path('tmp/uploads/' . $request->input('attachment')))->toMediaCollection('attachment');
            }
        } elseif ($trainingSession->attachment) {
            $trainingSession->attachment->delete();
        }

        return redirect()->route('admin.training-sessions.index');
    }

    public function show(TrainingSession $trainingSession)
    {
        abort_if(Gate::denies('training_session_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingSession->load('course');

        return view('admin.trainingSessions.show', compact('trainingSession'));
    }

    public function destroy(TrainingSession $trainingSession)
    {
        abort_if(Gate::denies('training_session_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingSession->delete();

        return back();
    }

    public function massDestroy(MassDestroyTrainingSessionRequest $request)
    {
        TrainingSession::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('training_session_create') && Gate::denies('training_session_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new TrainingSession();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
