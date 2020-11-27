<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEmployeeCertificationRequest;
use App\Http\Requests\UpdateEmployeeCertificationRequest;
use App\Http\Resources\Admin\EmployeeCertificationResource;
use App\Models\EmployeeCertification;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeCertificationsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('employee_certification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeCertificationResource(EmployeeCertification::with(['employee', 'created_by'])->get());
    }

    public function store(StoreEmployeeCertificationRequest $request)
    {
        $employeeCertification = EmployeeCertification::create($request->all());

        if ($request->input('file', false)) {
            $employeeCertification->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
        }

        return (new EmployeeCertificationResource($employeeCertification))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeCertification $employeeCertification)
    {
        abort_if(Gate::denies('employee_certification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeCertificationResource($employeeCertification->load(['employee', 'created_by']));
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

        return (new EmployeeCertificationResource($employeeCertification))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeCertification $employeeCertification)
    {
        abort_if(Gate::denies('employee_certification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeCertification->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
