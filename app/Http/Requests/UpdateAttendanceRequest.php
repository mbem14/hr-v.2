<?php

namespace App\Http\Requests;

use App\Models\Attendance;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAttendanceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('attendance_edit');
    }

    public function rules()
    {
        return [
            'employee_id' => [
                'required',
                'integer',
            ],
            'in_time'     => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'out_time'    => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'longitude'   => [
                'string',
                'nullable',
            ],
            'latitude'    => [
                'string',
                'nullable',
            ],
        ];
    }
}