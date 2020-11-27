<?php

namespace App\Http\Requests;

use App\Models\CompanyStructure;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCompanyStructureRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('company_structure_create');
    }

    public function rules()
    {
        return [
            'title'       => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
            'type'        => [
                'required',
            ],
        ];
    }
}
