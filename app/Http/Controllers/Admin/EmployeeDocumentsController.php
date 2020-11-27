<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEmployeeDocumentRequest;
use App\Http\Requests\StoreEmployeeDocumentRequest;
use App\Http\Requests\UpdateEmployeeDocumentRequest;
use App\Models\EmployeeDocument;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeDocumentsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_document_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeDocument::with(['created_by'])->select(sprintf('%s.*', (new EmployeeDocument)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_document_show';
                $editGate      = 'employee_document_edit';
                $deleteGate    = 'employee_document_delete';
                $crudRoutePart = 'employee-documents';

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
            $table->editColumn('file', function ($row) {
                return $row->file ? '<a href="' . $row->file->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'file']);

            return $table->make(true);
        }

        return view('admin.employeeDocuments.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_document_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employeeDocuments.create');
    }

    public function store(StoreEmployeeDocumentRequest $request)
    {
        $employeeDocument = EmployeeDocument::create($request->all());

        if ($request->input('file', false)) {
            $employeeDocument->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $employeeDocument->id]);
        }

        return redirect()->route('admin.employee-documents.index');
    }

    public function edit(EmployeeDocument $employeeDocument)
    {
        abort_if(Gate::denies('employee_document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeDocument->load('created_by');

        return view('admin.employeeDocuments.edit', compact('employeeDocument'));
    }

    public function update(UpdateEmployeeDocumentRequest $request, EmployeeDocument $employeeDocument)
    {
        $employeeDocument->update($request->all());

        if ($request->input('file', false)) {
            if (!$employeeDocument->file || $request->input('file') !== $employeeDocument->file->file_name) {
                if ($employeeDocument->file) {
                    $employeeDocument->file->delete();
                }

                $employeeDocument->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
            }
        } elseif ($employeeDocument->file) {
            $employeeDocument->file->delete();
        }

        return redirect()->route('admin.employee-documents.index');
    }

    public function show(EmployeeDocument $employeeDocument)
    {
        abort_if(Gate::denies('employee_document_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeDocument->load('created_by');

        return view('admin.employeeDocuments.show', compact('employeeDocument'));
    }

    public function destroy(EmployeeDocument $employeeDocument)
    {
        abort_if(Gate::denies('employee_document_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeDocument->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeDocumentRequest $request)
    {
        EmployeeDocument::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('employee_document_create') && Gate::denies('employee_document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new EmployeeDocument();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
