<?php

namespace App\Http\Requests;

use App\Models\EmployeeLanguage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEmployeeLanguageRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('employee_language_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:employee_languages,id',
        ];
    }
}