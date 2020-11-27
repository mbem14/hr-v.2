<?php

namespace App\Http\Requests;

use App\Models\Periode;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePeriodeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('periode_edit');
    }

    public function rules()
    {
        return [
            'name'       => [
                'string',
                'required',
            ],
            'start_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'end_date'   => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'status'     => [
                'required',
            ],
        ];
    }
}