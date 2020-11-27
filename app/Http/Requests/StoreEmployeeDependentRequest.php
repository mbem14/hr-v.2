<?php

namespace App\Http\Requests;

use App\Models\EmployeeDependent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmployeeDependentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_dependent_create');
    }

    public function rules()
    {
        return [
            'employee_id'  => [
                'required',
                'integer',
            ],
            'name'         => [
                'string',
                'required',
            ],
            'relationship' => [
                'required',
            ],
            'dob'          => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'idcard'       => [
                'string',
                'nullable',
            ],
        ];
    }
}