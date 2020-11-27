<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEmployeeNonFormalEducationRequest;
use App\Http\Requests\UpdateEmployeeNonFormalEducationRequest;
use App\Http\Resources\Admin\EmployeeNonFormalEducationResource;
use App\Models\EmployeeNonFormalEducation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeNonFormalEducationsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('employee_non_formal_education_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeNonFormalEducationResource(EmployeeNonFormalEducation::with(['created_by'])->get());
    }

    public function store(StoreEmployeeNonFormalEducationRequest $request)
    {
        $employeeNonFormalEducation = EmployeeNonFormalEducation::create($request->all());

        if ($request->input('file', false)) {
            $employeeNonFormalEducation->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
        }

        return (new EmployeeNonFormalEducationResource($employeeNonFormalEducation))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeNonFormalEducation $employeeNonFormalEducation)
    {
        abort_if(Gate::denies('employee_non_formal_education_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeNonFormalEducationResource($employeeNonFormalEducation->load(['created_by']));
    }

    public function update(UpdateEmployeeNonFormalEducationRequest $request, EmployeeNonFormalEducation $employeeNonFormalEducation)
    {
        $employeeNonFormalEducation->update($request->all());

        if ($request->input('file', false)) {
            if (!$employeeNonFormalEducation->file || $request->input('file') !== $employeeNonFormalEducation->file->file_name) {
                if ($employeeNonFormalEducation->file) {
                    $employeeNonFormalEducation->file->delete();
                }

                $employeeNonFormalEducation->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
            }
        } elseif ($employeeNonFormalEducation->file) {
            $employeeNonFormalEducation->file->delete();
        }

        return (new EmployeeNonFormalEducationResource($employeeNonFormalEducation))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeNonFormalEducation $employeeNonFormalEducation)
    {
        abort_if(Gate::denies('employee_non_formal_education_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeNonFormalEducation->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
