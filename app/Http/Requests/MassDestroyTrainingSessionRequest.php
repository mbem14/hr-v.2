<?php

namespace App\Http\Requests;

use App\Models\TrainingSession;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTrainingSessionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('training_session_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:training_sessions,id',
        ];
    }
}