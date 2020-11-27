<?php

namespace App\Http\Requests;

use App\Models\EmployeeTrainingSession;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeTrainingSessionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_training_session_edit');
    }

    public function rules()
    {
        return [
            'employees.*'         => [
                'integer',
            ],
            'employees'           => [
                'required',
                'array',
            ],
            'training_session_id' => [
                'required',
                'integer',
            ],
        ];
    }
}