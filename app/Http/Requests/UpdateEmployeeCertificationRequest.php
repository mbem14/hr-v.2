<?php

namespace App\Http\Requests;

use App\Models\EmployeeCertification;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeCertificationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_certification_edit');
    }

    public function rules()
    {
        return [
            'certification' => [
                'string',
                'required',
            ],
            'employee_id'   => [
                'required',
                'integer',
            ],
            'institute'     => [
                'string',
                'required',
            ],
            'date_start'    => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_end'      => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}