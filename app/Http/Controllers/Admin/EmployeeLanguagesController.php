<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmployeeLanguageRequest;
use App\Http\Requests\StoreEmployeeLanguageRequest;
use App\Http\Requests\UpdateEmployeeLanguageRequest;
use App\Models\Employee;
use App\Models\EmployeeLanguage;
use App\Models\Language;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeLanguagesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_language_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeLanguage::with(['employee', 'languages', 'created_by'])->select(sprintf('%s.*', (new EmployeeLanguage)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_language_show';
                $editGate      = 'employee_language_edit';
                $deleteGate    = 'employee_language_delete';
                $crudRoutePart = 'employee-languages';

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

            $table->addColumn('languages_name', function ($row) {
                return $row->languages ? $row->languages->name : '';
            });

            $table->editColumn('reading', function ($row) {
                return $row->reading ? EmployeeLanguage::READING_SELECT[$row->reading] : '';
            });
            $table->editColumn('speaking', function ($row) {
                return $row->speaking ? EmployeeLanguage::SPEAKING_SELECT[$row->speaking] : '';
            });
            $table->editColumn('writing', function ($row) {
                return $row->writing ? EmployeeLanguage::WRITING_SELECT[$row->writing] : '';
            });
            $table->editColumn('listening', function ($row) {
                return $row->listening ? EmployeeLanguage::LISTENING_SELECT[$row->listening] : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'languages']);

            return $table->make(true);
        }

        return view('admin.employeeLanguages.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_language_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $languages = Language::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employeeLanguages.create', compact('employees', 'languages'));
    }

    public function store(StoreEmployeeLanguageRequest $request)
    {
        $employeeLanguage = EmployeeLanguage::create($request->all());

        return redirect()->route('admin.employee-languages.index');
    }

    public function edit(EmployeeLanguage $employeeLanguage)
    {
        abort_if(Gate::denies('employee_language_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $languages = Language::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeeLanguage->load('employee', 'languages', 'created_by');

        return view('admin.employeeLanguages.edit', compact('employees', 'languages', 'employeeLanguage'));
    }

    public function update(UpdateEmployeeLanguageRequest $request, EmployeeLanguage $employeeLanguage)
    {
        $employeeLanguage->update($request->all());

        return redirect()->route('admin.employee-languages.index');
    }

    public function show(EmployeeLanguage $employeeLanguage)
    {
        abort_if(Gate::denies('employee_language_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeLanguage->load('employee', 'languages', 'created_by');

        return view('admin.employeeLanguages.show', compact('employeeLanguage'));
    }

    public function destroy(EmployeeLanguage $employeeLanguage)
    {
        abort_if(Gate::denies('employee_language_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeLanguage->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeLanguageRequest $request)
    {
        EmployeeLanguage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
