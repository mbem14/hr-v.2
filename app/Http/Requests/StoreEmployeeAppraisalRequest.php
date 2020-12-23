<?php

namespace App\Http\Requests;

use App\Models\EmployeeAppraisal;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmployeeAppraisalRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_appraisal_create');
    }

    public function rules()
    {
        return [
            'employee_id'  => [
                'required',
                'integer',
            ],
            'evaluator_id' => [
                'required',
                'integer',
            ],
            'pilih_1'      => [
                'numeric',
            ],
            'pilih_2'      => [
                'numeric',
            ],
            'pilih_3'      => [
                'numeric',
            ],
            'pilih_4'      => [
                'numeric',
            ],
            'pilih_5'      => [
                'numeric',
            ],
            'pilih_6'      => [
                'numeric',
            ],
            'pilih_7'      => [
                'numeric',
            ],
            'pilih_8'      => [
                'numeric',
            ],
            'pilih_9'      => [
                'numeric',
            ],
            'pilih_10'     => [
                'numeric',
            ],
            'pilih_11'     => [
                'numeric',
            ],
            'pilih_12'     => [
                'numeric',
            ],
            'pilih_13'     => [
                'numeric',
            ],
            'pilih_14'     => [
                'numeric',
            ],
            'pilih_15'     => [
                'numeric',
            ],
            'pilih_16'     => [
                'numeric',
            ],
            'pilih_17'     => [
                'numeric',
            ],
            'pilih_18'     => [
                'numeric',
            ],
            'pilih_19'     => [
                'numeric',
            ],
            'pilih_20'     => [
                'numeric',
            ],
            'target_1'     => [
                'numeric',
            ],
            'target_2'     => [
                'numeric',
            ],
            'target_3'     => [
                'numeric',
            ],
            'target_4'     => [
                'numeric',
            ],
            'target_5'     => [
                'numeric',
            ],
            'reali_1'      => [
                'numeric',
            ],
            'reali_2'      => [
                'numeric',
            ],
            'reali_3'      => [
                'numeric',
            ],
            'reali_4'      => [
                'numeric',
            ],
            'reali_5'      => [
                'numeric',
            ],
            'nilai_1'      => [
                'numeric',
            ],
            'nilai_2'      => [
                'numeric',
            ],
            'nilai_3'      => [
                'numeric',
            ],
            'nilai_4'      => [
                'numeric',
            ],
            'nilai_5'      => [
                'numeric',
            ],
        ];
    }
}
