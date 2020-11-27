<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreTrainingSessionRequest;
use App\Http\Requests\UpdateTrainingSessionRequest;
use App\Http\Resources\Admin\TrainingSessionResource;
use App\Models\TrainingSession;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrainingSessionsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('training_session_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TrainingSessionResource(TrainingSession::with(['course'])->get());
    }

    public function store(StoreTrainingSessionRequest $request)
    {
        $trainingSession = TrainingSession::create($request->all());

        if ($request->input('attachment', false)) {
            $trainingSession->addMedia(storage_path('tmp/uploads/' . $request->input('attachment')))->toMediaCollection('attachment');
        }

        return (new TrainingSessionResource($trainingSession))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(TrainingSession $trainingSession)
    {
        abort_if(Gate::denies('training_session_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TrainingSessionResource($trainingSession->load(['course']));
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

        return (new TrainingSessionResource($trainingSession))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(TrainingSession $trainingSession)
    {
        abort_if(Gate::denies('training_session_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingSession->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
