<?php

namespace App\Http\Requests;

use App\Models\EmployeeLanguage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmployeeLanguageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_language_create');
    }

    public function rules()
    {
        return [
            'employee_id'  => [
                'required',
                'integer',
            ],
            'languages_id' => [
                'required',
                'integer',
            ],
            'reading'      => [
                'required',
            ],
            'speaking'     => [
                'required',
            ],
            'writing'      => [
                'required',
            ],
            'listening'    => [
                'required',
            ],
        ];
    }
}