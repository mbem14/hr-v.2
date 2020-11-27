<?php

namespace App\Http\Requests;

use App\Models\EmployeeOrganization;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmployeeOrganizationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_organization_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'role' => [
                'string',
                'required',
            ],
        ];
    }
}