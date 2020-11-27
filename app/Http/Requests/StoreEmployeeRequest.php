<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_create');
    }

    public function rules()
    {
        return [
            'employee_number'      => [
                'string',
                'required',
            ],
            'first_name'           => [
                'string',
                'required',
            ],
            'middle_name'          => [
                'string',
                'nullable',
            ],
            'last_name'            => [
                'string',
                'nullable',
            ],
            'front_title'          => [
                'string',
                'nullable',
            ],
            'back_title'           => [
                'string',
                'nullable',
            ],
            'birth_place'          => [
                'string',
                'required',
            ],
            'birthday'             => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'religion'             => [
                'required',
            ],
            'gender'               => [
                'required',
            ],
            'marital_status'       => [
                'required',
            ],
            'blood_type'           => [
                'string',
                'nullable',
            ],
            'id_card'              => [
                'string',
                'required',
            ],
            'address_1'            => [
                'string',
                'required',
            ],
            'address_2'            => [
                'string',
                'nullable',
            ],
            'province_id'          => [
                'required',
                'integer',
            ],
            'city'                 => [
                'string',
                'nullable',
            ],
            'postal_code'          => [
                'string',
                'nullable',
            ],
            'home_phone'           => [
                'string',
                'nullable',
            ],
            'mobile_phone'         => [
                'string',
                'nullable',
            ],
            'job_title_id'         => [
                'required',
                'integer',
            ],
            'joined_date'          => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'confirmation_date'    => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'number_decree'        => [
                'string',
                'nullable',
            ],
            'terminate_date'       => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'work_phone'           => [
                'string',
                'required',
            ],
            'work_email'           => [
                'required',
                'unique:employees',
            ],
            'private_email'        => [
                'required',
                'unique:employees',
            ],
            'supervisor_id'        => [
                'required',
                'integer',
            ],
            'employment_status_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
