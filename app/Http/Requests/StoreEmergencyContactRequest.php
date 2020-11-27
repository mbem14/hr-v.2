<?php

namespace App\Http\Requests;

use App\Models\EmergencyContact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmergencyContactRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('emergency_contact_create');
    }

    public function rules()
    {
        return [
            'employee_id'  => [
                'required',
                'integer',
            ],
            'name'         => [
                'string',
                'required',
            ],
            'relationship' => [
                'string',
                'required',
            ],
            'home_phone'   => [
                'string',
                'nullable',
            ],
            'mobile_phone' => [
                'string',
                'required',
            ],
        ];
    }
}