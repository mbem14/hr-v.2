<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeOrganizationRequest;
use App\Http\Requests\UpdateEmployeeOrganizationRequest;
use App\Http\Resources\Admin\EmployeeOrganizationResource;
use App\Models\EmployeeOrganization;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeOrganizationsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('employee_organization_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeOrganizationResource(EmployeeOrganization::with(['created_by'])->get());
    }

    public function store(StoreEmployeeOrganizationRequest $request)
    {
        $employeeOrganization = EmployeeOrganization::create($request->all());

        return (new EmployeeOrganizationResource($employeeOrganization))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeOrganization $employeeOrganization)
    {
        abort_if(Gate::denies('employee_organization_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeOrganizationResource($employeeOrganization->load(['created_by']));
    }

    public function update(UpdateEmployeeOrganizationRequest $request, EmployeeOrganization $employeeOrganization)
    {
        $employeeOrganization->update($request->all());

        return (new EmployeeOrganizationResource($employeeOrganization))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeOrganization $employeeOrganization)
    {
        abort_if(Gate::denies('employee_organization_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeOrganization->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
