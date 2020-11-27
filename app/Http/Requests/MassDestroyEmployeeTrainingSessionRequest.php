<?php

namespace App\Http\Requests;

use App\Models\EmployeeTrainingSession;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEmployeeTrainingSessionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('employee_training_session_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:employee_training_sessions,id',
        ];
    }
}