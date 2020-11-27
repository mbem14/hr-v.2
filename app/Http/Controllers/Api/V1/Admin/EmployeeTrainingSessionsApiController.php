<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEmployeeTrainingSessionRequest;
use App\Http\Requests\UpdateEmployeeTrainingSessionRequest;
use App\Http\Resources\Admin\EmployeeTrainingSessionResource;
use App\Models\EmployeeTrainingSession;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeTrainingSessionsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('employee_training_session_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeTrainingSessionResource(EmployeeTrainingSession::with(['employees', 'training_session', 'created_by'])->get());
    }

    public function store(StoreEmployeeTrainingSessionRequest $request)
    {
        $employeeTrainingSession = EmployeeTrainingSession::create($request->all());
        $employeeTrainingSession->employees()->sync($request->input('employees', []));

        if ($request->input('proof', false)) {
            $employeeTrainingSession->addMedia(storage_path('tmp/uploads/' . $request->input('proof')))->toMediaCollection('proof');
        }

        return (new EmployeeTrainingSessionResource($employeeTrainingSession))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeTrainingSession $employeeTrainingSession)
    {
        abort_if(Gate::denies('employee_training_session_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeTrainingSessionResource($employeeTrainingSession->load(['employees', 'training_session', 'created_by']));
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

        return (new EmployeeTrainingSessionResource($employeeTrainingSession))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeTrainingSession $employeeTrainingSession)
    {
        abort_if(Gate::denies('employee_training_session_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeTrainingSession->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
