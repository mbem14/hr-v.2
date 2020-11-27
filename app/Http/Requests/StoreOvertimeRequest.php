<?php

namespace App\Http\Requests;

use App\Models\Overtime;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOvertimeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('overtime_create');
    }

    public function rules()
    {
        return [
            'employee_id' => [
                'required',
                'integer',
            ],
            'start_time'  => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'end_time'    => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'tasks.*'     => [
                'integer',
            ],
            'tasks'       => [
                'required',
                'array',
            ],
        ];
    }
}