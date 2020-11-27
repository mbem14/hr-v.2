@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.jobTitle.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.job-titles.update", [$jobTitle->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.jobTitle.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $jobTitle->code) }}" required>
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.jobTitle.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $jobTitle->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="main_purpose">{{ trans('cruds.jobTitle.fields.main_purpose') }}</label>
                <textarea class="form-control {{ $errors->has('main_purpose') ? 'is-invalid' : '' }}" name="main_purpose" id="main_purpose">{{ old('main_purpose', $jobTitle->main_purpose) }}</textarea>
                @if($errors->has('main_purpose'))
                    <div class="invalid-feedback">
                        {{ $errors->first('main_purpose') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.main_purpose_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="responsibility">{{ trans('cruds.jobTitle.fields.responsibility') }}</label>
                <textarea class="form-control {{ $errors->has('responsibility') ? 'is-invalid' : '' }}" name="responsibility" id="responsibility">{{ old('responsibility', $jobTitle->responsibility) }}</textarea>
                @if($errors->has('responsibility'))
                    <div class="invalid-feedback">
                        {{ $errors->first('responsibility') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.responsibility_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="result">{{ trans('cruds.jobTitle.fields.result') }}</label>
                <textarea class="form-control {{ $errors->has('result') ? 'is-invalid' : '' }}" name="result" id="result">{{ old('result', $jobTitle->result) }}</textarea>
                @if($errors->has('result'))
                    <div class="invalid-feedback">
                        {{ $errors->first('result') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.result_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="challange">{{ trans('cruds.jobTitle.fields.challange') }}</label>
                <textarea class="form-control {{ $errors->has('challange') ? 'is-invalid' : '' }}" name="challange" id="challange">{{ old('challange', $jobTitle->challange) }}</textarea>
                @if($errors->has('challange'))
                    <div class="invalid-feedback">
                        {{ $errors->first('challange') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.challange_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="authority">{{ trans('cruds.jobTitle.fields.authority') }}</label>
                <textarea class="form-control {{ $errors->has('authority') ? 'is-invalid' : '' }}" name="authority" id="authority">{{ old('authority', $jobTitle->authority) }}</textarea>
                @if($errors->has('authority'))
                    <div class="invalid-feedback">
                        {{ $errors->first('authority') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.authority_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="internal_relation">{{ trans('cruds.jobTitle.fields.internal_relation') }}</label>
                <textarea class="form-control {{ $errors->has('internal_relation') ? 'is-invalid' : '' }}" name="internal_relation" id="internal_relation">{{ old('internal_relation', $jobTitle->internal_relation) }}</textarea>
                @if($errors->has('internal_relation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('internal_relation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.internal_relation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="external_relation">{{ trans('cruds.jobTitle.fields.external_relation') }}</label>
                <textarea class="form-control {{ $errors->has('external_relation') ? 'is-invalid' : '' }}" name="external_relation" id="external_relation">{{ old('external_relation', $jobTitle->external_relation) }}</textarea>
                @if($errors->has('external_relation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('external_relation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.external_relation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="financial_dimension">{{ trans('cruds.jobTitle.fields.financial_dimension') }}</label>
                <textarea class="form-control {{ $errors->has('financial_dimension') ? 'is-invalid' : '' }}" name="financial_dimension" id="financial_dimension">{{ old('financial_dimension', $jobTitle->financial_dimension) }}</textarea>
                @if($errors->has('financial_dimension'))
                    <div class="invalid-feedback">
                        {{ $errors->first('financial_dimension') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.financial_dimension_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="hr_dimension">{{ trans('cruds.jobTitle.fields.hr_dimension') }}</label>
                <textarea class="form-control {{ $errors->has('hr_dimension') ? 'is-invalid' : '' }}" name="hr_dimension" id="hr_dimension">{{ old('hr_dimension', $jobTitle->hr_dimension) }}</textarea>
                @if($errors->has('hr_dimension'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hr_dimension') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.hr_dimension_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qualification">{{ trans('cruds.jobTitle.fields.qualification') }}</label>
                <textarea class="form-control {{ $errors->has('qualification') ? 'is-invalid' : '' }}" name="qualification" id="qualification">{{ old('qualification', $jobTitle->qualification) }}</textarea>
                @if($errors->has('qualification'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qualification') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.qualification_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="training_need">{{ trans('cruds.jobTitle.fields.training_need') }}</label>
                <textarea class="form-control {{ $errors->has('training_need') ? 'is-invalid' : '' }}" name="training_need" id="training_need">{{ old('training_need', $jobTitle->training_need) }}</textarea>
                @if($errors->has('training_need'))
                    <div class="invalid-feedback">
                        {{ $errors->first('training_need') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobTitle.fields.training_need_helper') }}</span>
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