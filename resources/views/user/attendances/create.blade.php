@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.attendance.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.attendances.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.attendance.fields.employee') }}</label>
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
                <span class="help-block">{{ trans('cruds.attendance.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="in_time">{{ trans('cruds.attendance.fields.in_time') }}</label>
                <input class="form-control datetime {{ $errors->has('in_time') ? 'is-invalid' : '' }}" type="text" name="in_time" id="in_time" value="{{ old('in_time') }}">
                @if($errors->has('in_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('in_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.attendance.fields.in_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="out_time">{{ trans('cruds.attendance.fields.out_time') }}</label>
                <input class="form-control datetime {{ $errors->has('out_time') ? 'is-invalid' : '' }}" type="text" name="out_time" id="out_time" value="{{ old('out_time') }}">
                @if($errors->has('out_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('out_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.attendance.fields.out_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.attendance.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.attendance.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="longitude">{{ trans('cruds.attendance.fields.longitude') }}</label>
                <input class="form-control {{ $errors->has('longitude') ? 'is-invalid' : '' }}" type="text" name="longitude" id="longitude" value="{{ old('longitude', '') }}">
                @if($errors->has('longitude'))
                    <div class="invalid-feedback">
                        {{ $errors->first('longitude') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.attendance.fields.longitude_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="latitude">{{ trans('cruds.attendance.fields.latitude') }}</label>
                <input class="form-control {{ $errors->has('latitude') ? 'is-invalid' : '' }}" type="text" name="latitude" id="latitude" value="{{ old('latitude', '') }}">
                @if($errors->has('latitude'))
                    <div class="invalid-feedback">
                        {{ $errors->first('latitude') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.attendance.fields.latitude_helper') }}</span>
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
