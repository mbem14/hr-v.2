<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLeavePeriodRequest;
use App\Http\Requests\UpdateLeavePeriodRequest;
use App\Http\Resources\Admin\LeavePeriodResource;
use App\Models\LeavePeriod;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LeavePeriodsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('leave_period_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LeavePeriodResource(LeavePeriod::all());
    }

    public function store(StoreLeavePeriodRequest $request)
    {
        $leavePeriod = LeavePeriod::create($request->all());

        return (new LeavePeriodResource($leavePeriod))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(LeavePeriod $leavePeriod)
    {
        abort_if(Gate::denies('leave_period_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LeavePeriodResource($leavePeriod);
    }

    public function update(UpdateLeavePeriodRequest $request, LeavePeriod $leavePeriod)
    {
        $leavePeriod->update($request->all());

        return (new LeavePeriodResource($leavePeriod))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(LeavePeriod $leavePeriod)
    {
        abort_if(Gate::denies('leave_period_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leavePeriod->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
