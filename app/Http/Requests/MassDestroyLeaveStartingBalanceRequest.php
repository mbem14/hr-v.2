<?php

namespace App\Http\Requests;

use App\Models\LeaveStartingBalance;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLeaveStartingBalanceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('leave_starting_balance_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:leave_starting_balances,id',
        ];
    }
}