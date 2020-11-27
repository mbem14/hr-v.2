<?php

namespace App\Http\Requests;

use App\Models\AppraisalPeriode;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAppraisalPeriodeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('appraisal_periode_create');
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