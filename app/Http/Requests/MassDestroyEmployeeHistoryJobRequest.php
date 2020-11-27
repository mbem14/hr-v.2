<?php

namespace App\Http\Requests;

use App\Models\EmployeeHistoryJob;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEmployeeHistoryJobRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('employee_history_job_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:employee_history_jobs,id',
        ];
    }
}