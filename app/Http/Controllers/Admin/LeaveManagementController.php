<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLeaveManagementRequest;
use App\Http\Requests\StoreLeaveManagementRequest;
use App\Http\Requests\UpdateLeaveManagementRequest;
use App\Models\Employee;
use App\Models\LeaveManagement;
use App\Models\LeavePeriod;
use App\Models\LeaveType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LeaveManagementController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('leave_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LeaveManagement::with(['employee', 'leave_type', 'leave_periode', 'created_by'])->select(sprintf('%s.*', (new LeaveManagement)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'leave_management_show';
                $editGate      = 'leave_management_edit';
                $deleteGate    = 'leave_management_delete';
                $crudRoutePart = 'leave-managements';

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
            $table->addColumn('employee_employee_number', function ($row) {
                return $row->employee ? $row->employee->employee_number : '';
            });

            $table->editColumn('details', function ($row) {
                return $row->details ? $row->details : "";
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? LeaveManagement::STATUS_SELECT[$row->status] : '';
            });
            $table->addColumn('leave_type_name', function ($row) {
                return $row->leave_type ? $row->leave_type->name : '';
            });

            $table->addColumn('leave_periode_name', function ($row) {
                return $row->leave_periode ? $row->leave_periode->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'leave_type', 'leave_periode']);

            return $table->make(true);
        }

        return view('admin.leaveManagements.index');
    }

    public function create()
    {
        abort_if(Gate::denies('leave_management_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leave_types = LeaveType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leave_periodes = LeavePeriod::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.leaveManagements.create', compact('employees', 'leave_types', 'leave_periodes'));
    }

    public function store(StoreLeaveManagementRequest $request)
    {
        $leaveManagement = LeaveManagement::create($request->all());

        return redirect()->route('admin.leave-managements.index');
    }

    public function edit(LeaveManagement $leaveManagement)
    {
        abort_if(Gate::denies('leave_management_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leave_types = LeaveType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leave_periodes = LeavePeriod::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leaveManagement->load('employee', 'leave_type', 'leave_periode', 'created_by');

        return view('admin.leaveManagements.edit', compact('employees', 'leave_types', 'leave_periodes', 'leaveManagement'));
    }

    public function update(UpdateLeaveManagementRequest $request, LeaveManagement $leaveManagement)
    {
        $leaveManagement->update($request->all());

        return redirect()->route('admin.leave-managements.index');
    }

    public function show(LeaveManagement $leaveManagement)
    {
        abort_if(Gate::denies('leave_management_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leaveManagement->load('employee', 'leave_type', 'leave_periode', 'created_by');

        return view('admin.leaveManagements.show', compact('leaveManagement'));
    }

    public function destroy(LeaveManagement $leaveManagement)
    {
        abort_if(Gate::denies('leave_management_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leaveManagement->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeaveManagementRequest $request)
    {
        LeaveManagement::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
