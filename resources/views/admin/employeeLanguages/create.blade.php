@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.employeeLanguage.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employee-languages.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.employeeLanguage.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $employee)
                        <option value="{{ $id }}" {{ old('employee_id') == $id ? 'selected' : '' }}>{{ $employee }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeLanguage.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="languages_id">{{ trans('cruds.employeeLanguage.fields.languages') }}</label>
                <select class="form-control select2 {{ $errors->has('languages') ? 'is-invalid' : '' }}" name="languages_id" id="languages_id" required>
                    @foreach($languages as $id => $languages)
                        <option value="{{ $id }}" {{ old('languages_id') == $id ? 'selected' : '' }}>{{ $languages }}</option>
                    @endforeach
                </select>
                @if($errors->has('languages'))
                    <div class="invalid-feedback">
                        {{ $errors->first('languages') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeLanguage.fields.languages_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.employeeLanguage.fields.reading') }}</label>
                <select class="form-control {{ $errors->has('reading') ? 'is-invalid' : '' }}" name="reading" id="reading" required>
                    <option value disabled {{ old('reading', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\EmployeeLanguage::READING_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('reading', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('reading'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reading') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeLanguage.fields.reading_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.employeeLanguage.fields.speaking') }}</label>
                <select class="form-control {{ $errors->has('speaking') ? 'is-invalid' : '' }}" name="speaking" id="speaking" required>
                    <option value disabled {{ old('speaking', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\EmployeeLanguage::SPEAKING_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('speaking', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('speaking'))
                    <div class="invalid-feedback">
                        {{ $errors->first('speaking') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeLanguage.fields.speaking_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.employeeLanguage.fields.writing') }}</label>
                <select class="form-control {{ $errors->has('writing') ? 'is-invalid' : '' }}" name="writing" id="writing" required>
                    <option value disabled {{ old('writing', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\EmployeeLanguage::WRITING_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('writing', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('writing'))
                    <div class="invalid-feedback">
                        {{ $errors->first('writing') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeLanguage.fields.writing_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.employeeLanguage.fields.listening') }}</label>
                <select class="form-control {{ $errors->has('listening') ? 'is-invalid' : '' }}" name="listening" id="listening" required>
                    <option value disabled {{ old('listening', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\EmployeeLanguage::LISTENING_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('listening', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('listening'))
                    <div class="invalid-feedback">
                        {{ $errors->first('listening') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeLanguage.fields.listening_helper') }}</span>
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
