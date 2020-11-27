<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmployeeEducationRequest;
use App\Http\Requests\StoreEmployeeEducationRequest;
use App\Http\Requests\UpdateEmployeeEducationRequest;
use App\Models\Education;
use App\Models\Employee;
use App\Models\EmployeeEducation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeEducationsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_education_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeEducation::with(['education', 'employee', 'created_by'])->select(sprintf('%s.*', (new EmployeeEducation)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_education_show';
                $editGate      = 'employee_education_edit';
                $deleteGate    = 'employee_education_delete';
                $crudRoutePart = 'employee-educations';

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
            $table->addColumn('education_name', function ($row) {
                return $row->education ? $row->education->name : '';
            });

            $table->addColumn('employee_employee_number', function ($row) {
                return $row->employee ? $row->employee->employee_number : '';
            });

            $table->editColumn('institute', function ($row) {
                return $row->institute ? $row->institute : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'education', 'employee']);

            return $table->make(true);
        }

        return view('admin.employeeEducations.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_education_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $education = Education::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employeeEducations.create', compact('education', 'employees'));
    }

    public function store(StoreEmployeeEducationRequest $request)
    {
        $employeeEducation = EmployeeEducation::create($request->all());

        return redirect()->route('admin.employee-educations.index');
    }

    public function edit(EmployeeEducation $employeeEducation)
    {
        abort_if(Gate::denies('employee_education_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $education = Education::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeeEducation->load('education', 'employee', 'created_by');

        return view('admin.employeeEducations.edit', compact('education', 'employees', 'employeeEducation'));
    }

    public function update(UpdateEmployeeEducationRequest $request, EmployeeEducation $employeeEducation)
    {
        $employeeEducation->update($request->all());

        return redirect()->route('admin.employee-educations.index');
    }

    public function show(EmployeeEducation $employeeEducation)
    {
        abort_if(Gate::denies('employee_education_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeEducation->load('education', 'employee', 'created_by');

        return view('admin.employeeEducations.show', compact('employeeEducation'));
    }

    public function destroy(EmployeeEducation $employeeEducation)
    {
        abort_if(Gate::denies('employee_education_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeEducation->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeEducationRequest $request)
    {
        EmployeeEducation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
