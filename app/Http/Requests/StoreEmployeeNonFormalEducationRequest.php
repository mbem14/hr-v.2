<?php

namespace App\Http\Requests;

use App\Models\EmployeeNonFormalEducation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmployeeNonFormalEducationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_non_formal_education_create');
    }

    public function rules()
    {
        return [
            'name'       => [
                'string',
                'required',
            ],
            'date_start' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_end'   => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'level'      => [
                'string',
                'nullable',
            ],
        ];
    }
}