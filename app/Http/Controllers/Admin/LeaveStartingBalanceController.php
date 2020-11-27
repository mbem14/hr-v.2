<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLeaveStartingBalanceRequest;
use App\Http\Requests\StoreLeaveStartingBalanceRequest;
use App\Http\Requests\UpdateLeaveStartingBalanceRequest;
use App\Models\Employee;
use App\Models\LeavePeriod;
use App\Models\LeaveStartingBalance;
use App\Models\LeaveType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LeaveStartingBalanceController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('leave_starting_balance_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LeaveStartingBalance::with(['leave_type', 'employee', 'leave_period'])->select(sprintf('%s.*', (new LeaveStartingBalance)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'leave_starting_balance_show';
                $editGate      = 'leave_starting_balance_edit';
                $deleteGate    = 'leave_starting_balance_delete';
                $crudRoutePart = 'leave-starting-balances';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->addColumn('leave_type_name', function ($row) {
                return $row->leave_type ? $row->leave_type->name : '';
            });

            $table->addColumn('employee_employee_number', function ($row) {
                return $row->employee ? $row->employee->employee_number : '';
            });

            $table->addColumn('leave_period_name', function ($row) {
                return $row->leave_period ? $row->leave_period->name : '';
            });

            $table->editColumn('amount', function ($row) {
                return $row->amount ? $row->amount : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'leave_type', 'employee', 'leave_period']);

            return $table->make(true);
        }

        return view('admin.leaveStartingBalances.index');
    }

    public function create()
    {
        abort_if(Gate::denies('leave_starting_balance_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leave_types = LeaveType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leave_periods = LeavePeriod::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.leaveStartingBalances.create', compact('leave_types', 'employees', 'leave_periods'));
    }

    public function store(StoreLeaveStartingBalanceRequest $request)
    {
        $leaveStartingBalance = LeaveStartingBalance::create($request->all());

        return redirect()->route('admin.leave-starting-balances.index');
    }

    public function edit(LeaveStartingBalance $leaveStartingBalance)
    {
        abort_if(Gate::denies('leave_starting_balance_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leave_types = LeaveType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leave_periods = LeavePeriod::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leaveStartingBalance->load('leave_type', 'employee', 'leave_period');

        return view('admin.leaveStartingBalances.edit', compact('leave_types', 'employees', 'leave_periods', 'leaveStartingBalance'));
    }

    public function update(UpdateLeaveStartingBalanceRequest $request, LeaveStartingBalance $leaveStartingBalance)
    {
        $leaveStartingBalance->update($request->all());

        return redirect()->route('admin.leave-starting-balances.index');
    }

    public function show(LeaveStartingBalance $leaveStartingBalance)
    {
        abort_if(Gate::denies('leave_starting_balance_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leaveStartingBalance->load('leave_type', 'employee', 'leave_period');

        return view('admin.leaveStartingBalances.show', compact('leaveStartingBalance'));
    }

    public function destroy(LeaveStartingBalance $leaveStartingBalance)
    {
        abort_if(Gate::denies('leave_starting_balance_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leaveStartingBalance->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeaveStartingBalanceRequest $request)
    {
        LeaveStartingBalance::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
