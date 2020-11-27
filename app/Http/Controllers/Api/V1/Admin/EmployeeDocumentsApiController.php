<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEmployeeDocumentRequest;
use App\Http\Requests\UpdateEmployeeDocumentRequest;
use App\Http\Resources\Admin\EmployeeDocumentResource;
use App\Models\EmployeeDocument;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeDocumentsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('employee_document_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeDocumentResource(EmployeeDocument::with(['created_by'])->get());
    }

    public function store(StoreEmployeeDocumentRequest $request)
    {
        $employeeDocument = EmployeeDocument::create($request->all());

        if ($request->input('file', false)) {
            $employeeDocument->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
        }

        return (new EmployeeDocumentResource($employeeDocument))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EmployeeDocument $employeeDocument)
    {
        abort_if(Gate::denies('employee_document_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeDocumentResource($employeeDocument->load(['created_by']));
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

        return (new EmployeeDocumentResource($employeeDocument))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EmployeeDocument $employeeDocument)
    {
        abort_if(Gate::denies('employee_document_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeDocument->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
