<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLeavePeriodRequest;
use App\Http\Requests\StoreLeavePeriodRequest;
use App\Http\Requests\UpdateLeavePeriodRequest;
use App\Models\LeavePeriod;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LeavePeriodsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('leave_period_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leavePeriods = LeavePeriod::all();

        return view('admin.leavePeriods.index', compact('leavePeriods'));
    }

    public function create()
    {
        abort_if(Gate::denies('leave_period_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leavePeriods.create');
    }

    public function store(StoreLeavePeriodRequest $request)
    {
        $leavePeriod = LeavePeriod::create($request->all());

        return redirect()->route('admin.leave-periods.index');
    }

    public function edit(LeavePeriod $leavePeriod)
    {
        abort_if(Gate::denies('leave_period_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leavePeriods.edit', compact('leavePeriod'));
    }

    public function update(UpdateLeavePeriodRequest $request, LeavePeriod $leavePeriod)
    {
        $leavePeriod->update($request->all());

        return redirect()->route('admin.leave-periods.index');
    }

    public function show(LeavePeriod $leavePeriod)
    {
        abort_if(Gate::denies('leave_period_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leavePeriods.show', compact('leavePeriod'));
    }

    public function destroy(LeavePeriod $leavePeriod)
    {
        abort_if(Gate::denies('leave_period_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leavePeriod->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeavePeriodRequest $request)
    {
        LeavePeriod::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
