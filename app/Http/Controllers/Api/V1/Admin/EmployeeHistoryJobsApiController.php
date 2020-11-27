<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEmployeeHistoryJobRequest;
use App\Http\Requests\UpdateEmployeeHistoryJobRequest;
use App\Http\Resources\Admin\EmployeeHistoryJobResource;
use App\Models\EmployeeHistoryJob;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeHistoryJobsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('employee_history_job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeHistoryJobResource(EmployeeHistoryJob::with(['employee', 'job', 'department', 'created_by'])->get());
    }

    public function store(StoreEmployeeHistoryJobRequest $request)
    {
        $employeeHistoryJob = EmployeeHistoryJob::create($request->all());

        if ($request->input('file', false)) {
            $employeeHistoryJob->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
        }

        return (new EmployeeHistoryJobResource($employeeHistoryJob))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeHistoryJob $employeeHistoryJob)
    {
        abort_if(Gate::denies('employee_history_job_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeHistoryJobResource($employeeHistoryJob->load(['employee', 'job', 'department', 'created_by']));
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

        return (new EmployeeHistoryJobResource($employeeHistoryJob))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeHistoryJob $employeeHistoryJob)
    {
        abort_if(Gate::denies('employee_history_job_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeHistoryJob->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
