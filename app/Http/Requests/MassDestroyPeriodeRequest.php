<?php

namespace App\Http\Requests;

use App\Models\Periode;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPeriodeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('periode_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:periodes,id',
        ];
    }
}