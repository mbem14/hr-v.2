<?php

namespace App\Http\Requests;

use App\Models\LeaveStartingBalance;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLeaveStartingBalanceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('leave_starting_balance_edit');
    }

    public function rules()
    {
        return [
            'leave_type_id'   => [
                'required',
                'integer',
            ],
            'employee_id'     => [
                'required',
                'integer',
            ],
            'leave_period_id' => [
                'required',
                'integer',
            ],
            'amount'          => [
                'numeric',
                'required',
            ],
        ];
    }
}