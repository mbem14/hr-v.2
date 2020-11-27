<?php

namespace App\Http\Requests;

use App\Models\EmployeeEducation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEmployeeEducationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('employee_education_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:employee_educations,id',
        ];
    }
}