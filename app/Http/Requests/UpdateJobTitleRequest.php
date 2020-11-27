<?php

namespace App\Http\Requests;

use App\Models\JobTitle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateJobTitleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('job_title_edit');
    }

    public function rules()
    {
        return [
            'code' => [
                'string',
                'required',
            ],
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}