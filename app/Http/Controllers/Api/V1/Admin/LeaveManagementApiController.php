<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLeaveManagementRequest;
use App\Http\Requests\UpdateLeaveManagementRequest;
use App\Http\Resources\Admin\LeaveManagementResource;
use App\Models\LeaveManagement;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LeaveManagementApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('leave_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LeaveManagementResource(LeaveManagement::with(['employee', 'leave_type', 'leave_periode', 'created_by'])->get());
    }

    public function store(StoreLeaveManagementRequest $request)
    {
        $leaveManagement = LeaveManagement::create($request->all());

        return (new LeaveManagementResource($leaveManagement))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(LeaveManagement $leaveManagement)
    {
        abort_if(Gate::denies('leave_management_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LeaveManagementResource($leaveManagement->load(['employee', 'leave_type', 'leave_periode', 'created_by']));
    }

    public function update(UpdateLeaveManagementRequest $request, LeaveManagement $leaveManagement)
    {
        $leaveManagement->update($request->all());

        return (new LeaveManagementResource($leaveManagement))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(LeaveManagement $leaveManagement)
    {
        abort_if(Gate::denies('leave_management_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leaveManagement->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
