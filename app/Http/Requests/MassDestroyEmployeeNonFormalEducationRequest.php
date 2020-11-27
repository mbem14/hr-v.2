<?php

namespace App\Http\Requests;

use App\Models\EmployeeNonFormalEducation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEmployeeNonFormalEducationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('employee_non_formal_education_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:employee_non_formal_educations,id',
        ];
    }
}