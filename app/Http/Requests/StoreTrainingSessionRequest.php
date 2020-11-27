<?php

namespace App\Http\Requests;

use App\Models\TrainingSession;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTrainingSessionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('training_session_create');
    }

    public function rules()
    {
        return [
            'name'            => [
                'string',
                'required',
            ],
            'course_id'       => [
                'required',
                'integer',
            ],
            'scheduled'       => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'due_date'        => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'location'        => [
                'string',
                'nullable',
            ],
            'attendance_type' => [
                'required',
            ],
        ];
    }
}