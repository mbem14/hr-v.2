<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLeaveStartingBalanceRequest;
use App\Http\Requests\UpdateLeaveStartingBalanceRequest;
use App\Http\Resources\Admin\LeaveStartingBalanceResource;
use App\Models\LeaveStartingBalance;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LeaveStartingBalanceApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('leave_starting_balance_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LeaveStartingBalanceResource(LeaveStartingBalance::with(['leave_type', 'employee', 'leave_period'])->get());
    }

    public function store(StoreLeaveStartingBalanceRequest $request)
    {
        $leaveStartingBalance = LeaveStartingBalance::create($request->all());

        return (new LeaveStartingBalanceResource($leaveStartingBalance))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(LeaveStartingBalance $leaveStartingBalance)
    {
        abort_if(Gate::denies('leave_starting_balance_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LeaveStartingBalanceResource($leaveStartingBalance->load(['leave_type', 'employee', 'leave_period']));
    }

    public function update(UpdateLeaveStartingBalanceRequest $request, LeaveStartingBalance $leaveStartingBalance)
    {
        $leaveStartingBalance->update($request->all());

        return (new LeaveStartingBalanceResource($leaveStartingBalance))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(LeaveStartingBalance $leaveStartingBalance)
    {
        abort_if(Gate::denies('leave_starting_balance_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leaveStartingBalance->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
