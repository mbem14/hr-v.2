<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeDependentRequest;
use App\Http\Requests\UpdateEmployeeDependentRequest;
use App\Http\Resources\Admin\EmployeeDependentResource;
use App\Models\EmployeeDependent;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeDependentsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('employee_dependent_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeDependentResource(EmployeeDependent::with(['employee', 'created_by'])->get());
    }

    public function store(StoreEmployeeDependentRequest $request)
    {
        $employeeDependent = EmployeeDependent::create($request->all());

        return (new EmployeeDependentResource($employeeDependent))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeDependent $employeeDependent)
    {
        abort_if(Gate::denies('employee_dependent_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeDependentResource($employeeDependent->load(['employee', 'created_by']));
    }

    public function update(UpdateEmployeeDependentRequest $request, EmployeeDependent $employeeDependent)
    {
        $employeeDependent->update($request->all());

        return (new EmployeeDependentResource($employeeDependent))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeDependent $employeeDependent)
    {
        abort_if(Gate::denies('employee_dependent_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeDependent->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
