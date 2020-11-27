<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEmployeeSkillRequest;
use App\Http\Requests\StoreEmployeeSkillRequest;
use App\Http\Requests\UpdateEmployeeSkillRequest;
use App\Models\Employee;
use App\Models\EmployeeSkill;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeSkillsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_skill_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeSkill::with(['employee', 'created_by'])->select(sprintf('%s.*', (new EmployeeSkill)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_skill_show';
                $editGate      = 'employee_skill_edit';
                $deleteGate    = 'employee_skill_delete';
                $crudRoutePart = 'employee-skills';

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
            $table->editColumn('skill', function ($row) {
                return $row->skill ? $row->skill : "";
            });
            $table->editColumn('details', function ($row) {
                return $row->details ? $row->details : "";
            });
            $table->addColumn('employee_employee_number', function ($row) {
                return $row->employee ? $row->employee->employee_number : '';
            });

            $table->editColumn('file', function ($row) {
                return $row->file ? '<a href="' . $row->file->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'file']);

            return $table->make(true);
        }

        return view('admin.employeeSkills.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_skill_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employeeSkills.create', compact('employees'));
    }

    public function store(StoreEmployeeSkillRequest $request)
    {
        $employeeSkill = EmployeeSkill::create($request->all());

        if ($request->input('file', false)) {
            $employeeSkill->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $employeeSkill->id]);
        }

        return redirect()->route('admin.employee-skills.index');
    }

    public function edit(EmployeeSkill $employeeSkill)
    {
        abort_if(Gate::denies('employee_skill_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeeSkill->load('employee', 'created_by');

        return view('admin.employeeSkills.edit', compact('employees', 'employeeSkill'));
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

        return redirect()->route('admin.employee-skills.index');
    }

    public function show(EmployeeSkill $employeeSkill)
    {
        abort_if(Gate::denies('employee_skill_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeSkill->load('employee', 'created_by');

        return view('admin.employeeSkills.show', compact('employeeSkill'));
    }

    public function destroy(EmployeeSkill $employeeSkill)
    {
        abort_if(Gate::denies('employee_skill_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeSkill->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeSkillRequest $request)
    {
        EmployeeSkill::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('employee_skill_create') && Gate::denies('employee_skill_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new EmployeeSkill();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
