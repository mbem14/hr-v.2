<?php

namespace App\Http\Requests;

use App\Models\LeaveManagement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLeaveManagementRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('leave_management_create');
    }

    public function rules()
    {
        return [
            'employee_id'      => [
                'required',
                'integer',
            ],
            'date_start'       => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'end_start'        => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'leave_type_id'    => [
                'required',
                'integer',
            ],
            'leave_periode_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
