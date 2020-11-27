@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.employeeEducation.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employee-educations.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="education_id">{{ trans('cruds.employeeEducation.fields.education') }}</label>
                <select class="form-control select2 {{ $errors->has('education') ? 'is-invalid' : '' }}" name="education_id" id="education_id" required>
                    @foreach($education as $id => $education)
                        <option value="{{ $id }}" {{ old('education_id') == $id ? 'selected' : '' }}>{{ $education }}</option>
                    @endforeach
                </select>
                @if($errors->has('education'))
                    <div class="invalid-feedback">
                        {{ $errors->first('education') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeEducation.fields.education_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.employeeEducation.fields.employee') }}</label>
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
                <span class="help-block">{{ trans('cruds.employeeEducation.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="institute">{{ trans('cruds.employeeEducation.fields.institute') }}</label>
                <input class="form-control {{ $errors->has('institute') ? 'is-invalid' : '' }}" type="text" name="institute" id="institute" value="{{ old('institute', '') }}" required>
                @if($errors->has('institute'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institute') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeEducation.fields.institute_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_start">{{ trans('cruds.employeeEducation.fields.date_start') }}</label>
                <input class="form-control date {{ $errors->has('date_start') ? 'is-invalid' : '' }}" type="text" name="date_start" id="date_start" value="{{ old('date_start') }}">
                @if($errors->has('date_start'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_start') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeEducation.fields.date_start_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_end">{{ trans('cruds.employeeEducation.fields.date_end') }}</label>
                <input class="form-control date {{ $errors->has('date_end') ? 'is-invalid' : '' }}" type="text" name="date_end" id="date_end" value="{{ old('date_end') }}">
                @if($errors->has('date_end'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_end') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeEducation.fields.date_end_helper') }}</span>
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
