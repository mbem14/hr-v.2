<?php

namespace App\Http\Requests;

use App\Models\EmployeeHistoryJob;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeHistoryJobRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_history_job_edit');
    }

    public function rules()
    {
        return [
            'employee_id'   => [
                'required',
                'integer',
            ],
            'job_id'        => [
                'required',
                'integer',
            ],
            'department_id' => [
                'required',
                'integer',
            ],
            'date_start'    => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'date_end'      => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}