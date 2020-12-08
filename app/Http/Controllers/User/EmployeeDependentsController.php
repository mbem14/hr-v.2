<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmployeeDependentRequest;
use App\Http\Requests\StoreEmployeeDependentRequest;
use App\Http\Requests\UpdateEmployeeDependentRequest;
use App\Models\Employee;
use App\Models\EmployeeDependent;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeDependentsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_dependent_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeDependent::with(['employee', 'created_by'])->select(sprintf('%s.*', (new EmployeeDependent)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_dependent_show';
                $editGate      = 'employee_dependent_edit';
                $deleteGate    = 'employee_dependent_delete';
                $crudRoutePart = 'employee-dependents';

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

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('relationship', function ($row) {
                return $row->relationship ? EmployeeDependent::RELATIONSHIP_SELECT[$row->relationship] : '';
            });

            $table->editColumn('address', function ($row) {
                return $row->address ? $row->address : "";
            });
            $table->editColumn('idcard', function ($row) {
                return $row->idcard ? $row->idcard : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'employee']);

            return $table->make(true);
        }

        return view('admin.employeeDependents.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_dependent_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employeeDependents.create', compact('employees'));
    }

    public function store(StoreEmployeeDependentRequest $request)
    {
        $employeeDependent = EmployeeDependent::create($request->all());

        return redirect()->route('admin.employee-dependents.index');
    }

    public function edit(EmployeeDependent $employeeDependent)
    {
        abort_if(Gate::denies('employee_dependent_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeeDependent->load('employee', 'created_by');

        return view('admin.employeeDependents.edit', compact('employees', 'employeeDependent'));
    }

    public function update(UpdateEmployeeDependentRequest $request, EmployeeDependent $employeeDependent)
    {
        $employeeDependent->update($request->all());

        return redirect()->route('admin.employee-dependents.index');
    }

    public function show(EmployeeDependent $employeeDependent)
    {
        abort_if(Gate::denies('employee_dependent_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeDependent->load('employee', 'created_by');

        return view('admin.employeeDependents.show', compact('employeeDependent'));
    }

    public function destroy(EmployeeDependent $employeeDependent)
    {
        abort_if(Gate::denies('employee_dependent_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeDependent->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeDependentRequest $request)
    {
        EmployeeDependent::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
