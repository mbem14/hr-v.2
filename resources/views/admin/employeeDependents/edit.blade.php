@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.employeeDependent.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employee-dependents.update", [$employeeDependent->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.employeeDependent.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $employee)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $employeeDependent->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $employee }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeDependent.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.employeeDependent.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $employeeDependent->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeDependent.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.employeeDependent.fields.relationship') }}</label>
                <select class="form-control {{ $errors->has('relationship') ? 'is-invalid' : '' }}" name="relationship" id="relationship" required>
                    <option value disabled {{ old('relationship', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\EmployeeDependent::RELATIONSHIP_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('relationship', $employeeDependent->relationship) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('relationship'))
                    <div class="invalid-feedback">
                        {{ $errors->first('relationship') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeDependent.fields.relationship_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dob">{{ trans('cruds.employeeDependent.fields.dob') }}</label>
                <input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob', $employeeDependent->dob) }}" required>
                @if($errors->has('dob'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dob') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeDependent.fields.dob_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.employeeDependent.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address', $employeeDependent->address) }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeDependent.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="idcard">{{ trans('cruds.employeeDependent.fields.idcard') }}</label>
                <input class="form-control {{ $errors->has('idcard') ? 'is-invalid' : '' }}" type="text" name="idcard" id="idcard" value="{{ old('idcard', $employeeDependent->idcard) }}">
                @if($errors->has('idcard'))
                    <div class="invalid-feedback">
                        {{ $errors->first('idcard') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeDependent.fields.idcard_helper') }}</span>
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