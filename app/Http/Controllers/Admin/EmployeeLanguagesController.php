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

class EmployeeLanguagesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('employee_language_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeLanguages = EmployeeLanguage::all();

        return view('admin.employeeLanguages.index', compact('employeeLanguages'));
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

        $employeeLanguage->load('employee', 'languages');

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

        $employeeLanguage->load('employee', 'languages');

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
