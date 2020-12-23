<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmployeeRequest;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\CompanyStructure;
use App\Models\Country;
use App\Models\Employee;
use App\Models\EmploymentStatus;
use App\Models\JobTitle;
use App\Models\Province;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Employee::with(['nationality', 'country', 'province', 'job_title', 'department', 'supervisor', 'indirect_supervisors', 'employment_status', 'created_by'])->select(sprintf('%s.*', (new Employee)->table));
            $table = Datatables::of($query);
            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_show';
                $editGate      = 'employee_edit';
                $deleteGate    = 'employee_delete';
                $crudRoutePart = 'employees';

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
            $table->editColumn('employee_number', function ($row) {
                return $row->employee_number ? $row->employee_number : "";
            });
            $table->editColumn('first_name', function ($row) {
                return $row->first_name ? $row->first_name : "";
            });
            $table->editColumn('full_name', function ($row) {
                return $row->full_name ? $row->full_name : "";
            });
            $table->editColumn('middle_name', function ($row) {
                return $row->middle_name ? $row->middle_name : "";
            });
            $table->editColumn('last_name', function ($row) {
                return $row->last_name ? $row->last_name : "";
            });
            $table->editColumn('front_title', function ($row) {
                return $row->front_title ? $row->front_title : "";
            });
            $table->editColumn('back_title', function ($row) {
                return $row->back_title ? $row->back_title : "";
            });
            $table->editColumn('birth_place', function ($row) {
                return $row->birth_place ? $row->birth_place : "";
            });

            $table->editColumn('religion', function ($row) {
                return $row->religion ? Employee::RELIGION_SELECT[$row->religion] : '';
            });
            $table->editColumn('gender', function ($row) {
                return $row->gender ? Employee::GENDER_SELECT[$row->gender] : '';
            });
            $table->addColumn('nationality_name', function ($row) {
                return $row->nationality ? $row->nationality->name : '';
            });

            $table->editColumn('marital_status', function ($row) {
                return $row->marital_status ? Employee::MARITAL_STATUS_SELECT[$row->marital_status] : '';
            });
            $table->editColumn('blood_type', function ($row) {
                return $row->blood_type ? $row->blood_type : "";
            });
            $table->editColumn('id_card', function ($row) {
                return $row->id_card ? $row->id_card : "";
            });
            $table->editColumn('address_1', function ($row) {
                return $row->address_1 ? $row->address_1 : "";
            });
            $table->editColumn('address_2', function ($row) {
                return $row->address_2 ? $row->address_2 : "";
            });
            $table->addColumn('country_name', function ($row) {
                return $row->country ? $row->country->name : '';
            });

            $table->addColumn('province_name', function ($row) {
                return $row->province ? $row->province->name : '';
            });

            $table->editColumn('city', function ($row) {
                return $row->city ? $row->city : "";
            });
            $table->editColumn('postal_code', function ($row) {
                return $row->postal_code ? $row->postal_code : "";
            });
            $table->editColumn('home_phone', function ($row) {
                return $row->home_phone ? $row->home_phone : "";
            });
            $table->editColumn('mobile_phone', function ($row) {
                return $row->mobile_phone ? $row->mobile_phone : "";
            });
            $table->addColumn('job_title_code', function ($row) {
                return $row->job_title ? $row->job_title->name : '';
            });

            $table->editColumn('number_decree', function ($row) {
                return $row->number_decree ? $row->number_decree : "";
            });

            $table->editColumn('work_phone', function ($row) {
                return $row->work_phone ? $row->work_phone : "";
            });
            $table->editColumn('work_email', function ($row) {
                return $row->work_email ? $row->work_email : "";
            });
            $table->editColumn('private_email', function ($row) {
                return $row->private_email ? $row->private_email : "";
            });
            $table->addColumn('department_title', function ($row) {
                return $row->department ? $row->department->title : '';
            });

            $table->addColumn('supervisor_full_name', function ($row) {
                return $row->supervisor ? $row->supervisor->full_name : '';
            });

            $table->addColumn('indirect_supervisors_full_name', function ($row) {
                return $row->indirect_supervisors ? $row->indirect_supervisors->full_name : '';
            });
            $table->addColumn('indirect_supervisors2_full_name', function ($row) {
                return $row->indirect_supervisors2 ? $row->indirect_supervisors2->full_name : '';
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? Employee::STATUS_SELECT[$row->status] : '';
            });
            $table->addColumn('employment_status_name', function ($row) {
                return $row->employment_status ? $row->employment_status->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'nationality', 'country', 'province', 'job_title', 'department', 'supervisor', 'indirect_supervisors','indirect_supervisors', 'employment_status']);

            return $table->make(true);
        }

        $countries           = Country::get();
        $countries           = Country::get();
        $provinces           = Province::get();
        $job_titles          = JobTitle::get();
        $company_structures  = CompanyStructure::get();
        $employees           = Employee::get();
        $employees2           = Employee::get();
        $employees3           = Employee::get();
        $employment_statuses = EmploymentStatus::get();
        $users               = User::get();

        return view('admin.employees.index', compact('countries', 'countries', 'provinces', 'job_titles', 'company_structures', 'employees', 'employees2', 'employees3', 'employment_statuses', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('employee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $nationalities = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $provinces = Province::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $job_titles = JobTitle::all()->pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $departments = CompanyStructure::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $supervisors = Employee::all()->pluck('full_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $indirect_supervisors = Employee::all()->pluck('full_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employment_statuses = EmploymentStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employees.create', compact('nationalities', 'countries', 'provinces', 'job_titles', 'departments', 'supervisors', 'indirect_supervisors', 'employment_statuses'));
    }

    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->all());

        return redirect()->route('admin.employees.index');
    }

    public function edit(Employee $employee)
    {
        abort_if(Gate::denies('employee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $nationalities = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $provinces = Province::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $job_titles = JobTitle::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $departments = CompanyStructure::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $supervisors = Employee::all()->pluck('full_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $indirect_supervisors = Employee::all()->pluck('full_name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $indirect_supervisors2 = Employee::all()->pluck('full_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employment_statuses = EmploymentStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employee->load('nationality', 'country', 'province', 'job_title', 'department', 'supervisor', 'indirect_supervisors', 'employment_status', 'created_by');

        return view('admin.employees.edit', compact('nationalities', 'countries', 'provinces', 'job_titles', 'departments', 'supervisors', 'indirect_supervisors', 'indirect_supervisors2', 'employment_statuses', 'employee'));
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());

        return redirect()->route('admin.employees.index');
    }

    public function show(Employee $employee)
    {
        abort_if(Gate::denies('employee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employee->load('nationality', 'country', 'province', 'job_title', 'department', 'supervisor', 'indirect_supervisors', 'employment_status', 'created_by');

        return view('admin.employees.show', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        abort_if(Gate::denies('employee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employee->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeRequest $request)
    {
        Employee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
