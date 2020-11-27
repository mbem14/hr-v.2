<?php

namespace App\Http\Requests;

use App\Models\EmployeeDocument;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeDocumentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_document_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}