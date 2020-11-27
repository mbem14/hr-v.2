<?php

namespace App\Http\Requests;

use App\Models\EmployeeTrainingSession;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmployeeTrainingSessionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_training_session_create');
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