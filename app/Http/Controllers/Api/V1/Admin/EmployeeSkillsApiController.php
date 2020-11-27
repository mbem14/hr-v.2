<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEmployeeSkillRequest;
use App\Http\Requests\UpdateEmployeeSkillRequest;
use App\Http\Resources\Admin\EmployeeSkillResource;
use App\Models\EmployeeSkill;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeSkillsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('employee_skill_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeSkillResource(EmployeeSkill::with(['employee', 'created_by'])->get());
    }

    public function store(StoreEmployeeSkillRequest $request)
    {
        $employeeSkill = EmployeeSkill::create($request->all());

        if ($request->input('file', false)) {
            $employeeSkill->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
        }

        return (new EmployeeSkillResource($employeeSkill))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeSkill $employeeSkill)
    {
        abort_if(Gate::denies('employee_skill_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeSkillResource($employeeSkill->load(['employee', 'created_by']));
    }

    public function update(UpdateEmployeeSkillRequest $request, EmployeeSkill $employeeSkill)
    {
        $employeeSkill->update($request->all());

        if ($request->input('file', false)) {
            if (!$employeeSkill->file || $request->input('file') !== $employeeSkill->file->file_name) {
                if ($employeeSkill->file) {
                    $employeeSkill->file->delete();
                }

                $employeeSkill->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
            }
        } elseif ($employeeSkill->file) {
            $employeeSkill->file->delete();
        }

        return (new EmployeeSkillResource($employeeSkill))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeSkill $employeeSkill)
    {
        abort_if(Gate::denies('employee_skill_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeSkill->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
