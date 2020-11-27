<?php

namespace App\Http\Requests;

use App\Models\EmployeeSkill;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmployeeSkillRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_skill_create');
    }

    public function rules()
    {
        return [
            'skill'       => [
                'string',
                'required',
            ],
            'employee_id' => [
                'required',
                'integer',
            ],
        ];
    }
}