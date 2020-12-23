<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmployeeAppraisalRequest;
use App\Http\Requests\StoreEmployeeAppraisalRequest;
use App\Http\Requests\UpdateEmployeeAppraisalRequest;
use App\Models\AppraisalPeriode;
use App\Models\Employee;
use App\Models\EmployeeAppraisal;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeAppraisalsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_appraisal_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user_employees = auth()->user()->employee_id;
        $employees = Employee::where('supervisor_id', $user_employees)
                    ->orWhere('indirect_supervisors_id',$user_employees)
                    ->orWhere('indirect_supervisors2_id',$user_employees)
                    ->get()->pluck('full_name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $periods = AppraisalPeriode::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $evaluators = Employee::where('id', $user_employees)->first();
        if ($request->ajax()) {
            $query = EmployeeAppraisal::with(['employee', 'period', 'evaluator', 'created_by'])->select(sprintf('%s.*', (new EmployeeAppraisal)->table));
            $table = Datatables::of($query);
            
            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_appraisal_show';
                $editGate      = 'employee_appraisal_edit';
                $deleteGate    = 'employee_appraisal_delete';
                $crudRoutePart = 'employee-appraisals';

                return view('partials.datatablesActionsUsers', compact(
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
                return $row->employee ? $row->employee->full_name : '';
            });

            $table->addColumn('period_name', function ($row) {
                return $row->period ? $row->period->name : '';
            });

            $table->addColumn('evaluator_employee_number', function ($row) {
                return $row->evaluator ? $row->evaluator->employee_number : '';
            });

            $table->editColumn('pilih_1', function ($row) {
                return $row->pilih_1 ? $row->pilih_1 : "";
            });
            $table->editColumn('pilih_2', function ($row) {
                return $row->pilih_2 ? $row->pilih_2 : "";
            });
            $table->editColumn('pilih_3', function ($row) {
                return $row->pilih_3 ? $row->pilih_3 : "";
            });
            $table->editColumn('pilih_4', function ($row) {
                return $row->pilih_4 ? $row->pilih_4 : "";
            });
            $table->editColumn('pilih_5', function ($row) {
                return $row->pilih_5 ? $row->pilih_5 : "";
            });
            $table->editColumn('pilih_6', function ($row) {
                return $row->pilih_6 ? $row->pilih_6 : "";
            });
            $table->editColumn('pilih_7', function ($row) {
                return $row->pilih_7 ? $row->pilih_7 : "";
            });
            $table->editColumn('pilih_8', function ($row) {
                return $row->pilih_8 ? $row->pilih_8 : "";
            });
            $table->editColumn('pilih_9', function ($row) {
                return $row->pilih_9 ? $row->pilih_9 : "";
            });
            $table->editColumn('pilih_10', function ($row) {
                return $row->pilih_10 ? $row->pilih_10 : "";
            });
            $table->editColumn('pilih_11', function ($row) {
                return $row->pilih_11 ? $row->pilih_11 : "";
            });
            $table->editColumn('pilih_12', function ($row) {
                return $row->pilih_12 ? $row->pilih_12 : "";
            });
            $table->editColumn('pilih_13', function ($row) {
                return $row->pilih_13 ? $row->pilih_13 : "";
            });
            $table->editColumn('pilih_14', function ($row) {
                return $row->pilih_14 ? $row->pilih_14 : "";
            });
            $table->editColumn('pilih_15', function ($row) {
                return $row->pilih_15 ? $row->pilih_15 : "";
            });
            $table->editColumn('pilih_16', function ($row) {
                return $row->pilih_16 ? $row->pilih_16 : "";
            });
            $table->editColumn('pilih_17', function ($row) {
                return $row->pilih_17 ? $row->pilih_17 : "";
            });
            $table->editColumn('pilih_18', function ($row) {
                return $row->pilih_18 ? $row->pilih_18 : "";
            });
            $table->editColumn('pilih_19', function ($row) {
                return $row->pilih_19 ? $row->pilih_19 : "";
            });
            $table->editColumn('pilih_20', function ($row) {
                return $row->pilih_20 ? $row->pilih_20 : "";
            });
            $table->editColumn('target_1', function ($row) {
                return $row->target_1 ? $row->target_1 : "";
            });
            $table->editColumn('target_2', function ($row) {
                return $row->target_2 ? $row->target_2 : "";
            });
            $table->editColumn('target_3', function ($row) {
                return $row->target_3 ? $row->target_3 : "";
            });
            $table->editColumn('target_4', function ($row) {
                return $row->target_4 ? $row->target_4 : "";
            });
            $table->editColumn('target_5', function ($row) {
                return $row->target_5 ? $row->target_5 : "";
            });
            $table->editColumn('reali_1', function ($row) {
                return $row->reali_1 ? $row->reali_1 : "";
            });
            $table->editColumn('reali_2', function ($row) {
                return $row->reali_2 ? $row->reali_2 : "";
            });
            $table->editColumn('reali_3', function ($row) {
                return $row->reali_3 ? $row->reali_3 : "";
            });
            $table->editColumn('reali_4', function ($row) {
                return $row->reali_4 ? $row->reali_4 : "";
            });
            $table->editColumn('reali_5', function ($row) {
                return $row->reali_5 ? $row->reali_5 : "";
            });
            $table->editColumn('nilai_1', function ($row) {
                return $row->nilai_1 ? $row->nilai_1 : "";
            });
            $table->editColumn('nilai_2', function ($row) {
                return $row->nilai_2 ? $row->nilai_2 : "";
            });
            $table->editColumn('nilai_3', function ($row) {
                return $row->nilai_3 ? $row->nilai_3 : "";
            });
            $table->editColumn('nilai_4', function ($row) {
                return $row->nilai_4 ? $row->nilai_4 : "";
            });
            $table->editColumn('nilai_5', function ($row) {
                return $row->nilai_5 ? $row->nilai_5 : "";
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? EmployeeAppraisal::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'period', 'evaluator']);

            return $table->make(true);
        }

        return view('user.employeeAppraisals.index', compact('employees', 'periods', 'evaluators'));
    }

    public function create()
    {
        abort_if(Gate::denies('employee_appraisal_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $periods = AppraisalPeriode::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $evaluators = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('user.employeeAppraisals.create', compact('employees', 'periods', 'evaluators'));
    }

    public function store(StoreEmployeeAppraisalRequest $request)
    {
        $employeeAppraisal = EmployeeAppraisal::create($request->all());

        return redirect()->route('user.employee-appraisals.index');
    }

    public function edit(EmployeeAppraisal $employeeAppraisal)
    {
        abort_if(Gate::denies('employee_appraisal_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $periods = AppraisalPeriode::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $evaluators = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeeAppraisal->load('employee', 'period', 'evaluator', 'created_by');

        return view('user.employeeAppraisals.edit', compact('employees', 'periods', 'evaluators', 'employeeAppraisal'));
    }

    public function update(UpdateEmployeeAppraisalRequest $request, EmployeeAppraisal $employeeAppraisal)
    {
        $employeeAppraisal->update($request->all());

        return redirect()->route('user.employee-appraisals.index');
    }

    public function show(EmployeeAppraisal $employeeAppraisal)
    {
        abort_if(Gate::denies('employee_appraisal_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeAppraisal->load('employee', 'period', 'evaluator', 'created_by');

        return view('user.employeeAppraisals.show', compact('employeeAppraisal'));
    }

    public function destroy(EmployeeAppraisal $employeeAppraisal)
    {
        abort_if(Gate::denies('employee_appraisal_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeAppraisal->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeAppraisalRequest $request)
    {
        EmployeeAppraisal::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
