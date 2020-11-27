<?php

namespace App\Http\Requests;

use App\Models\LeaveManagement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLeaveManagementRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('leave_management_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:leave_managements,id',
        ];
    }
}