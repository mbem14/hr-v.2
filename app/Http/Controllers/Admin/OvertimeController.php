<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOvertimeRequest;
use App\Http\Requests\StoreOvertimeRequest;
use App\Http\Requests\UpdateOvertimeRequest;
use App\Models\Employee;
use App\Models\Overtime;
use App\Models\Task;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class OvertimeController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('overtime_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Overtime::with(['employee', 'tasks', 'created_by'])->select(sprintf('%s.*', (new Overtime)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'overtime_show';
                $editGate      = 'overtime_edit';
                $deleteGate    = 'overtime_delete';
                $crudRoutePart = 'overtimes';

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

            $table->editColumn('task', function ($row) {
                $labels = [];

                foreach ($row->tasks as $task) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $task->name);
                }

                return implode(' ', $labels);
            });
            $table->editColumn('notes', function ($row) {
                return $row->notes ? $row->notes : "";
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? Overtime::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'task']);

            return $table->make(true);
        }

        return view('admin.overtimes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('overtime_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tasks = Task::all()->pluck('name', 'id');

        return view('admin.overtimes.create', compact('employees', 'tasks'));
    }

    public function store(StoreOvertimeRequest $request)
    {
        $overtime = Overtime::create($request->all());
        $overtime->tasks()->sync($request->input('tasks', []));

        return redirect()->route('admin.overtimes.index');
    }

    public function edit(Overtime $overtime)
    {
        abort_if(Gate::denies('overtime_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tasks = Task::all()->pluck('name', 'id');

        $overtime->load('employee', 'tasks', 'created_by');

        return view('admin.overtimes.edit', compact('employees', 'tasks', 'overtime'));
    }

    public function update(UpdateOvertimeRequest $request, Overtime $overtime)
    {
        $overtime->update($request->all());
        $overtime->tasks()->sync($request->input('tasks', []));

        return redirect()->route('admin.overtimes.index');
    }

    public function show(Overtime $overtime)
    {
        abort_if(Gate::denies('overtime_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $overtime->load('employee', 'tasks', 'created_by');

        return view('admin.overtimes.show', compact('overtime'));
    }

    public function destroy(Overtime $overtime)
    {
        abort_if(Gate::denies('overtime_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $overtime->delete();

        return back();
    }

    public function massDestroy(MassDestroyOvertimeRequest $request)
    {
        Overtime::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
