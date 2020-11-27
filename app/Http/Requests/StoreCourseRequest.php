<?php

namespace App\Http\Requests;

use App\Models\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_create');
    }

    public function rules()
    {
        return [
            'code'     => [
                'string',
                'required',
                'unique:courses',
            ],
            'name'     => [
                'string',
                'required',
            ],
            'trainer'  => [
                'string',
                'nullable',
            ],
            'currency' => [
                'string',
                'max:3',
                'nullable',
            ],
            'cost'     => [
                'numeric',
            ],
        ];
    }
}