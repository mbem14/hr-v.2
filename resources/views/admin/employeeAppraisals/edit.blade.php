@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.employeeAppraisal.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employee-appraisals.update", [$employeeAppraisal->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.employeeAppraisal.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $employee)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $employeeAppraisal->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $employee }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_id">{{ trans('cruds.employeeAppraisal.fields.period') }}</label>
                <select class="form-control select2 {{ $errors->has('period') ? 'is-invalid' : '' }}" name="period_id" id="period_id">
                    @foreach($periods as $id => $period)
                        <option value="{{ $id }}" {{ (old('period_id') ? old('period_id') : $employeeAppraisal->period->id ?? '') == $id ? 'selected' : '' }}>{{ $period }}</option>
                    @endforeach
                </select>
                @if($errors->has('period'))
                    <div class="invalid-feedback">
                        {{ $errors->first('period') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.period_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="evaluator_id">{{ trans('cruds.employeeAppraisal.fields.evaluator') }}</label>
                <select class="form-control select2 {{ $errors->has('evaluator') ? 'is-invalid' : '' }}" name="evaluator_id" id="evaluator_id" required>
                    @foreach($evaluators as $id => $evaluator)
                        <option value="{{ $id }}" {{ (old('evaluator_id') ? old('evaluator_id') : $employeeAppraisal->evaluator->id ?? '') == $id ? 'selected' : '' }}>{{ $evaluator }}</option>
                    @endforeach
                </select>
                @if($errors->has('evaluator'))
                    <div class="invalid-feedback">
                        {{ $errors->first('evaluator') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.evaluator_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_1">{{ trans('cruds.employeeAppraisal.fields.pilih_1') }}</label>
                <input class="form-control {{ $errors->has('pilih_1') ? 'is-invalid' : '' }}" type="number" name="pilih_1" id="pilih_1" value="{{ old('pilih_1', $employeeAppraisal->pilih_1) }}" step="0.01">
                @if($errors->has('pilih_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_2">{{ trans('cruds.employeeAppraisal.fields.pilih_2') }}</label>
                <input class="form-control {{ $errors->has('pilih_2') ? 'is-invalid' : '' }}" type="number" name="pilih_2" id="pilih_2" value="{{ old('pilih_2', $employeeAppraisal->pilih_2) }}" step="0.01">
                @if($errors->has('pilih_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_3">{{ trans('cruds.employeeAppraisal.fields.pilih_3') }}</label>
                <input class="form-control {{ $errors->has('pilih_3') ? 'is-invalid' : '' }}" type="number" name="pilih_3" id="pilih_3" value="{{ old('pilih_3', $employeeAppraisal->pilih_3) }}" step="0.01">
                @if($errors->has('pilih_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_4">{{ trans('cruds.employeeAppraisal.fields.pilih_4') }}</label>
                <input class="form-control {{ $errors->has('pilih_4') ? 'is-invalid' : '' }}" type="number" name="pilih_4" id="pilih_4" value="{{ old('pilih_4', $employeeAppraisal->pilih_4) }}" step="0.01">
                @if($errors->has('pilih_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_5">{{ trans('cruds.employeeAppraisal.fields.pilih_5') }}</label>
                <input class="form-control {{ $errors->has('pilih_5') ? 'is-invalid' : '' }}" type="number" name="pilih_5" id="pilih_5" value="{{ old('pilih_5', $employeeAppraisal->pilih_5) }}" step="0.01">
                @if($errors->has('pilih_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_6">{{ trans('cruds.employeeAppraisal.fields.pilih_6') }}</label>
                <input class="form-control {{ $errors->has('pilih_6') ? 'is-invalid' : '' }}" type="number" name="pilih_6" id="pilih_6" value="{{ old('pilih_6', $employeeAppraisal->pilih_6) }}" step="0.01">
                @if($errors->has('pilih_6'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_6') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_7">{{ trans('cruds.employeeAppraisal.fields.pilih_7') }}</label>
                <input class="form-control {{ $errors->has('pilih_7') ? 'is-invalid' : '' }}" type="number" name="pilih_7" id="pilih_7" value="{{ old('pilih_7', $employeeAppraisal->pilih_7) }}" step="0.01">
                @if($errors->has('pilih_7'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_7') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_7_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_8">{{ trans('cruds.employeeAppraisal.fields.pilih_8') }}</label>
                <input class="form-control {{ $errors->has('pilih_8') ? 'is-invalid' : '' }}" type="number" name="pilih_8" id="pilih_8" value="{{ old('pilih_8', $employeeAppraisal->pilih_8) }}" step="0.01">
                @if($errors->has('pilih_8'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_8') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_8_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_9">{{ trans('cruds.employeeAppraisal.fields.pilih_9') }}</label>
                <input class="form-control {{ $errors->has('pilih_9') ? 'is-invalid' : '' }}" type="number" name="pilih_9" id="pilih_9" value="{{ old('pilih_9', $employeeAppraisal->pilih_9) }}" step="0.01">
                @if($errors->has('pilih_9'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_9') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_9_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_10">{{ trans('cruds.employeeAppraisal.fields.pilih_10') }}</label>
                <input class="form-control {{ $errors->has('pilih_10') ? 'is-invalid' : '' }}" type="number" name="pilih_10" id="pilih_10" value="{{ old('pilih_10', $employeeAppraisal->pilih_10) }}" step="0.01">
                @if($errors->has('pilih_10'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_10') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_11">{{ trans('cruds.employeeAppraisal.fields.pilih_11') }}</label>
                <input class="form-control {{ $errors->has('pilih_11') ? 'is-invalid' : '' }}" type="number" name="pilih_11" id="pilih_11" value="{{ old('pilih_11', $employeeAppraisal->pilih_11) }}" step="0.01">
                @if($errors->has('pilih_11'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_11') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_12">{{ trans('cruds.employeeAppraisal.fields.pilih_12') }}</label>
                <input class="form-control {{ $errors->has('pilih_12') ? 'is-invalid' : '' }}" type="number" name="pilih_12" id="pilih_12" value="{{ old('pilih_12', $employeeAppraisal->pilih_12) }}" step="0.01">
                @if($errors->has('pilih_12'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_12') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_13">{{ trans('cruds.employeeAppraisal.fields.pilih_13') }}</label>
                <input class="form-control {{ $errors->has('pilih_13') ? 'is-invalid' : '' }}" type="number" name="pilih_13" id="pilih_13" value="{{ old('pilih_13', $employeeAppraisal->pilih_13) }}" step="0.01">
                @if($errors->has('pilih_13'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_13') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_13_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_14">{{ trans('cruds.employeeAppraisal.fields.pilih_14') }}</label>
                <input class="form-control {{ $errors->has('pilih_14') ? 'is-invalid' : '' }}" type="number" name="pilih_14" id="pilih_14" value="{{ old('pilih_14', $employeeAppraisal->pilih_14) }}" step="0.01">
                @if($errors->has('pilih_14'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_14') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_14_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_15">{{ trans('cruds.employeeAppraisal.fields.pilih_15') }}</label>
                <input class="form-control {{ $errors->has('pilih_15') ? 'is-invalid' : '' }}" type="number" name="pilih_15" id="pilih_15" value="{{ old('pilih_15', $employeeAppraisal->pilih_15) }}" step="0.01">
                @if($errors->has('pilih_15'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_15') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_15_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_16">{{ trans('cruds.employeeAppraisal.fields.pilih_16') }}</label>
                <input class="form-control {{ $errors->has('pilih_16') ? 'is-invalid' : '' }}" type="number" name="pilih_16" id="pilih_16" value="{{ old('pilih_16', $employeeAppraisal->pilih_16) }}" step="0.01">
                @if($errors->has('pilih_16'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_16') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_16_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_17">{{ trans('cruds.employeeAppraisal.fields.pilih_17') }}</label>
                <input class="form-control {{ $errors->has('pilih_17') ? 'is-invalid' : '' }}" type="number" name="pilih_17" id="pilih_17" value="{{ old('pilih_17', $employeeAppraisal->pilih_17) }}" step="0.01">
                @if($errors->has('pilih_17'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_17') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_17_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_18">{{ trans('cruds.employeeAppraisal.fields.pilih_18') }}</label>
                <input class="form-control {{ $errors->has('pilih_18') ? 'is-invalid' : '' }}" type="number" name="pilih_18" id="pilih_18" value="{{ old('pilih_18', $employeeAppraisal->pilih_18) }}" step="0.01">
                @if($errors->has('pilih_18'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_18') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_18_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_19">{{ trans('cruds.employeeAppraisal.fields.pilih_19') }}</label>
                <input class="form-control {{ $errors->has('pilih_19') ? 'is-invalid' : '' }}" type="number" name="pilih_19" id="pilih_19" value="{{ old('pilih_19', $employeeAppraisal->pilih_19) }}" step="0.01">
                @if($errors->has('pilih_19'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_19') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_19_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pilih_20">{{ trans('cruds.employeeAppraisal.fields.pilih_20') }}</label>
                <input class="form-control {{ $errors->has('pilih_20') ? 'is-invalid' : '' }}" type="number" name="pilih_20" id="pilih_20" value="{{ old('pilih_20', $employeeAppraisal->pilih_20) }}" step="0.01">
                @if($errors->has('pilih_20'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pilih_20') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_20_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="target_1">{{ trans('cruds.employeeAppraisal.fields.target_1') }}</label>
                <input class="form-control {{ $errors->has('target_1') ? 'is-invalid' : '' }}" type="number" name="target_1" id="target_1" value="{{ old('target_1', $employeeAppraisal->target_1) }}" step="0.01">
                @if($errors->has('target_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('target_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.target_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="target_2">{{ trans('cruds.employeeAppraisal.fields.target_2') }}</label>
                <input class="form-control {{ $errors->has('target_2') ? 'is-invalid' : '' }}" type="number" name="target_2" id="target_2" value="{{ old('target_2', $employeeAppraisal->target_2) }}" step="0.01">
                @if($errors->has('target_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('target_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.target_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="target_3">{{ trans('cruds.employeeAppraisal.fields.target_3') }}</label>
                <input class="form-control {{ $errors->has('target_3') ? 'is-invalid' : '' }}" type="number" name="target_3" id="target_3" value="{{ old('target_3', $employeeAppraisal->target_3) }}" step="0.01">
                @if($errors->has('target_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('target_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.target_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="target_4">{{ trans('cruds.employeeAppraisal.fields.target_4') }}</label>
                <input class="form-control {{ $errors->has('target_4') ? 'is-invalid' : '' }}" type="number" name="target_4" id="target_4" value="{{ old('target_4', $employeeAppraisal->target_4) }}" step="0.01">
                @if($errors->has('target_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('target_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.target_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="target_5">{{ trans('cruds.employeeAppraisal.fields.target_5') }}</label>
                <input class="form-control {{ $errors->has('target_5') ? 'is-invalid' : '' }}" type="number" name="target_5" id="target_5" value="{{ old('target_5', $employeeAppraisal->target_5) }}" step="0.01">
                @if($errors->has('target_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('target_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.target_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reali_1">{{ trans('cruds.employeeAppraisal.fields.reali_1') }}</label>
                <input class="form-control {{ $errors->has('reali_1') ? 'is-invalid' : '' }}" type="number" name="reali_1" id="reali_1" value="{{ old('reali_1', $employeeAppraisal->reali_1) }}" step="0.01">
                @if($errors->has('reali_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reali_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.reali_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reali_2">{{ trans('cruds.employeeAppraisal.fields.reali_2') }}</label>
                <input class="form-control {{ $errors->has('reali_2') ? 'is-invalid' : '' }}" type="number" name="reali_2" id="reali_2" value="{{ old('reali_2', $employeeAppraisal->reali_2) }}" step="0.01">
                @if($errors->has('reali_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reali_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.reali_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reali_3">{{ trans('cruds.employeeAppraisal.fields.reali_3') }}</label>
                <input class="form-control {{ $errors->has('reali_3') ? 'is-invalid' : '' }}" type="number" name="reali_3" id="reali_3" value="{{ old('reali_3', $employeeAppraisal->reali_3) }}" step="0.01">
                @if($errors->has('reali_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reali_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.reali_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reali_4">{{ trans('cruds.employeeAppraisal.fields.reali_4') }}</label>
                <input class="form-control {{ $errors->has('reali_4') ? 'is-invalid' : '' }}" type="number" name="reali_4" id="reali_4" value="{{ old('reali_4', $employeeAppraisal->reali_4) }}" step="0.01">
                @if($errors->has('reali_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reali_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.reali_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reali_5">{{ trans('cruds.employeeAppraisal.fields.reali_5') }}</label>
                <input class="form-control {{ $errors->has('reali_5') ? 'is-invalid' : '' }}" type="number" name="reali_5" id="reali_5" value="{{ old('reali_5', $employeeAppraisal->reali_5) }}" step="0.01">
                @if($errors->has('reali_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reali_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.reali_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nilai_1">{{ trans('cruds.employeeAppraisal.fields.nilai_1') }}</label>
                <input class="form-control {{ $errors->has('nilai_1') ? 'is-invalid' : '' }}" type="number" name="nilai_1" id="nilai_1" value="{{ old('nilai_1', $employeeAppraisal->nilai_1) }}" step="0.01">
                @if($errors->has('nilai_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nilai_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.nilai_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nilai_2">{{ trans('cruds.employeeAppraisal.fields.nilai_2') }}</label>
                <input class="form-control {{ $errors->has('nilai_2') ? 'is-invalid' : '' }}" type="number" name="nilai_2" id="nilai_2" value="{{ old('nilai_2', $employeeAppraisal->nilai_2) }}" step="0.01">
                @if($errors->has('nilai_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nilai_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.nilai_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nilai_3">{{ trans('cruds.employeeAppraisal.fields.nilai_3') }}</label>
                <input class="form-control {{ $errors->has('nilai_3') ? 'is-invalid' : '' }}" type="number" name="nilai_3" id="nilai_3" value="{{ old('nilai_3', $employeeAppraisal->nilai_3) }}" step="0.01">
                @if($errors->has('nilai_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nilai_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.nilai_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nilai_4">{{ trans('cruds.employeeAppraisal.fields.nilai_4') }}</label>
                <input class="form-control {{ $errors->has('nilai_4') ? 'is-invalid' : '' }}" type="number" name="nilai_4" id="nilai_4" value="{{ old('nilai_4', $employeeAppraisal->nilai_4) }}" step="0.01">
                @if($errors->has('nilai_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nilai_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.nilai_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nilai_5">{{ trans('cruds.employeeAppraisal.fields.nilai_5') }}</label>
                <input class="form-control {{ $errors->has('nilai_5') ? 'is-invalid' : '' }}" type="number" name="nilai_5" id="nilai_5" value="{{ old('nilai_5', $employeeAppraisal->nilai_5) }}" step="0.01">
                @if($errors->has('nilai_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nilai_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.nilai_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.employeeAppraisal.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\EmployeeAppraisal::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $employeeAppraisal->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection