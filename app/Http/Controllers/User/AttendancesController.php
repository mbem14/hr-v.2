<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAttendanceRequest;
use App\Http\Requests\StoreAttendanceRequest;
use App\Http\Requests\UpdateAttendanceRequest;
use App\Models\Attendance;
use App\Models\Employee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AttendancesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('attendance_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Attendance::with(['employee', 'created_by'])->select(sprintf('%s.*', (new Attendance)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'attendance_show';
                $editGate      = 'attendance_edit';
                $deleteGate    = 'attendance_delete';
                $crudRoutePart = 'attendances';

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

            $table->editColumn('note', function ($row) {
                return $row->note ? $row->note : "";
            });
            $table->editColumn('longitude', function ($row) {
                return $row->longitude ? $row->longitude : "";
            });
            $table->editColumn('latitude', function ($row) {
                return $row->latitude ? $row->latitude : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'employee']);

            return $table->make(true);
        }

        return view('admin.attendances.index');
    }

    public function create()
    {
        abort_if(Gate::denies('attendance_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.attendances.create', compact('employees'));
    }

    public function store(StoreAttendanceRequest $request)
    {
        $attendance = Attendance::create($request->all());

        return redirect()->route('admin.attendances.index');
    }

    public function edit(Attendance $attendance)
    {
        abort_if(Gate::denies('attendance_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $attendance->load('employee', 'created_by');

        return view('admin.attendances.edit', compact('employees', 'attendance'));
    }

    public function update(UpdateAttendanceRequest $request, Attendance $attendance)
    {
        $attendance->update($request->all());

        return redirect()->route('admin.attendances.index');
    }

    public function show(Attendance $attendance)
    {
        abort_if(Gate::denies('attendance_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attendance->load('employee', 'created_by');

        return view('admin.attendances.show', compact('attendance'));
    }

    public function destroy(Attendance $attendance)
    {
        abort_if(Gate::denies('attendance_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attendance->delete();

        return back();
    }

    public function massDestroy(MassDestroyAttendanceRequest $request)
    {
        Attendance::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
