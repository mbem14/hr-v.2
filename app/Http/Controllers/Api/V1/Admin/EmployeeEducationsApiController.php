<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeEducationRequest;
use App\Http\Requests\UpdateEmployeeEducationRequest;
use App\Http\Resources\Admin\EmployeeEducationResource;
use App\Models\EmployeeEducation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeEducationsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('employee_education_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeEducationResource(EmployeeEducation::with(['education', 'employee', 'created_by'])->get());
    }

    public function store(StoreEmployeeEducationRequest $request)
    {
        $employeeEducation = EmployeeEducation::create($request->all());

        return (new EmployeeEducationResource($employeeEducation))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeEducation $employeeEducation)
    {
        abort_if(Gate::denies('employee_education_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeEducationResource($employeeEducation->load(['education', 'employee', 'created_by']));
    }

    public function update(UpdateEmployeeEducationRequest $request, EmployeeEducation $employeeEducation)
    {
        $employeeEducation->update($request->all());

        return (new EmployeeEducationResource($employeeEducation))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeEducation $employeeEducation)
    {
        abort_if(Gate::denies('employee_education_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeEducation->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
