@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.emergencyContact.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.emergency-contacts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.emergencyContact.fields.employee') }}</label>
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
                <span class="help-block">{{ trans('cruds.emergencyContact.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.emergencyContact.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.emergencyContact.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="relationship">{{ trans('cruds.emergencyContact.fields.relationship') }}</label>
                <input class="form-control {{ $errors->has('relationship') ? 'is-invalid' : '' }}" type="text" name="relationship" id="relationship" value="{{ old('relationship', '') }}" required>
                @if($errors->has('relationship'))
                    <div class="invalid-feedback">
                        {{ $errors->first('relationship') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.emergencyContact.fields.relationship_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="home_phone">{{ trans('cruds.emergencyContact.fields.home_phone') }}</label>
                <input class="form-control {{ $errors->has('home_phone') ? 'is-invalid' : '' }}" type="text" name="home_phone" id="home_phone" value="{{ old('home_phone', '') }}">
                @if($errors->has('home_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('home_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.emergencyContact.fields.home_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="mobile_phone">{{ trans('cruds.emergencyContact.fields.mobile_phone') }}</label>
                <input class="form-control {{ $errors->has('mobile_phone') ? 'is-invalid' : '' }}" type="text" name="mobile_phone" id="mobile_phone" value="{{ old('mobile_phone', '') }}" required>
                @if($errors->has('mobile_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.emergencyContact.fields.mobile_phone_helper') }}</span>
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
