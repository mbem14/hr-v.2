<?php

namespace App\Http\Requests;

use App\Models\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_edit');
    }

    public function rules()
    {
        return [
            'code'     => [
                'string',
                'required',
                'unique:courses,code,' . request()->route('course')->id,
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
