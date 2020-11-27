<?php

namespace App\Http\Requests;

use App\Models\AppraisalPeriode;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAppraisalPeriodeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('appraisal_periode_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:appraisal_periodes,id',
        ];
    }
}