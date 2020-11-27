<?php

namespace App\Http\Requests;

use App\Models\EmployeeEducation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeEducationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_education_edit');
    }

    public function rules()
    {
        return [
            'education_id' => [
                'required',
                'integer',
            ],
            'employee_id'  => [
                'required',
                'integer',
            ],
            'institute'    => [
                'string',
                'required',
            ],
            'date_start'   => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_end'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}