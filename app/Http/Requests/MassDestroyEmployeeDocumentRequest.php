<?php

namespace App\Http\Requests;

use App\Models\EmployeeDocument;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEmployeeDocumentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('employee_document_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:employee_documents,id',
        ];
    }
}