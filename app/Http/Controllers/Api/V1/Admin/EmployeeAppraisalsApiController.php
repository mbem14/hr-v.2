<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeAppraisalRequest;
use App\Http\Requests\UpdateEmployeeAppraisalRequest;
use App\Http\Resources\Admin\EmployeeAppraisalResource;
use App\Models\EmployeeAppraisal;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeAppraisalsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('employee_appraisal_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeAppraisalResource(EmployeeAppraisal::with(['employee', 'period', 'evaluator', 'created_by'])->get());
    }

    public function store(StoreEmployeeAppraisalRequest $request)
    {
        $employeeAppraisal = EmployeeAppraisal::create($request->all());

        return (new EmployeeAppraisalResource($employeeAppraisal))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeAppraisal $employeeAppraisal)
    {
        abort_if(Gate::denies('employee_appraisal_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeAppraisalResource($employeeAppraisal->load(['employee', 'period', 'evaluator', 'created_by']));
    }

    public function update(UpdateEmployeeAppraisalRequest $request, EmployeeAppraisal $employeeAppraisal)
    {
        $employeeAppraisal->update($request->all());

        return (new EmployeeAppraisalResource($employeeAppraisal))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeAppraisal $employeeAppraisal)
    {
        abort_if(Gate::denies('employee_appraisal_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeAppraisal->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
