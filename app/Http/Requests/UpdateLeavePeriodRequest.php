<?php

namespace App\Http\Requests;

use App\Models\LeavePeriod;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLeavePeriodRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('leave_period_edit');
    }

    public function rules()
    {
        return [
            'name'       => [
                'string',
                'required',
            ],
            'date_start' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'end_date'   => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'status'     => [
                'required',
            ],
        ];
    }
}