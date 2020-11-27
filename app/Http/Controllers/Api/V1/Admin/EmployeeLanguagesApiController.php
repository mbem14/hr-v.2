<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeLanguageRequest;
use App\Http\Requests\UpdateEmployeeLanguageRequest;
use App\Http\Resources\Admin\EmployeeLanguageResource;
use App\Models\EmployeeLanguage;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeLanguagesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('employee_language_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeLanguageResource(EmployeeLanguage::with(['employee', 'languages'])->get());
    }

    public function store(StoreEmployeeLanguageRequest $request)
    {
        $employeeLanguage = EmployeeLanguage::create($request->all());

        return (new EmployeeLanguageResource($employeeLanguage))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeLanguage $employeeLanguage)
    {
        abort_if(Gate::denies('employee_language_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeLanguageResource($employeeLanguage->load(['employee', 'languages']));
    }

    public function update(UpdateEmployeeLanguageRequest $request, EmployeeLanguage $employeeLanguage)
    {
        $employeeLanguage->update($request->all());

        return (new EmployeeLanguageResource($employeeLanguage))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeLanguage $employeeLanguage)
    {
        abort_if(Gate::denies('employee_language_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeLanguage->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
