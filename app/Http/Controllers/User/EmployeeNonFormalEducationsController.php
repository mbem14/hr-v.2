<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEmployeeNonFormalEducationRequest;
use App\Http\Requests\StoreEmployeeNonFormalEducationRequest;
use App\Http\Requests\UpdateEmployeeNonFormalEducationRequest;
use App\Models\EmployeeNonFormalEducation;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeNonFormalEducationsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_non_formal_education_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeNonFormalEducation::with(['created_by'])->select(sprintf('%s.*', (new EmployeeNonFormalEducation)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_non_formal_education_show';
                $editGate      = 'employee_non_formal_education_edit';
                $deleteGate    = 'employee_non_formal_education_delete';
                $crudRoutePart = 'employee-non-formal-educations';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });

            $table->editColumn('level', function ($row) {
                return $row->level ? $row->level : "";
            });
            $table->editColumn('file', function ($row) {
                return $row->file ? '<a href="' . $row->file->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->editColumn('notes', function ($row) {
                return $row->notes ? $row->notes : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'file']);

            return $table->make(true);
        }

        return view('admin.employeeNonFormalEducations.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_non_formal_education_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employeeNonFormalEducations.create');
    }

    public function store(StoreEmployeeNonFormalEducationRequest $request)
    {
        $employeeNonFormalEducation = EmployeeNonFormalEducation::create($request->all());

        if ($request->input('file', false)) {
            $employeeNonFormalEducation->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $employeeNonFormalEducation->id]);
        }

        return redirect()->route('admin.employee-non-formal-educations.index');
    }

    public function edit(EmployeeNonFormalEducation $employeeNonFormalEducation)
    {
        abort_if(Gate::denies('employee_non_formal_education_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeNonFormalEducation->load('created_by');

        return view('admin.employeeNonFormalEducations.edit', compact('employeeNonFormalEducation'));
    }

    public function update(UpdateEmployeeNonFormalEducationRequest $request, EmployeeNonFormalEducation $employeeNonFormalEducation)
    {
        $employeeNonFormalEducation->update($request->all());

        if ($request->input('file', false)) {
            if (!$employeeNonFormalEducation->file || $request->input('file') !== $employeeNonFormalEducation->file->file_name) {
                if ($employeeNonFormalEducation->file) {
                    $employeeNonFormalEducation->file->delete();
                }

                $employeeNonFormalEducation->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
            }
        } elseif ($employeeNonFormalEducation->file) {
            $employeeNonFormalEducation->file->delete();
        }

        return redirect()->route('admin.employee-non-formal-educations.index');
    }

    public function show(EmployeeNonFormalEducation $employeeNonFormalEducation)
    {
        abort_if(Gate::denies('employee_non_formal_education_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeNonFormalEducation->load('created_by');

        return view('admin.employeeNonFormalEducations.show', compact('employeeNonFormalEducation'));
    }

    public function destroy(EmployeeNonFormalEducation $employeeNonFormalEducation)
    {
        abort_if(Gate::denies('employee_non_formal_education_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeNonFormalEducation->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeNonFormalEducationRequest $request)
    {
        EmployeeNonFormalEducation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('employee_non_formal_education_create') && Gate::denies('employee_non_formal_education_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new EmployeeNonFormalEducation();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
