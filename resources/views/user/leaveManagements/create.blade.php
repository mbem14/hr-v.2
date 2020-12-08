@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.leaveManagement.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.leave-managements.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.leaveManagement.fields.employee') }}</label>
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
                <span class="help-block">{{ trans('cruds.leaveManagement.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date_start">{{ trans('cruds.leaveManagement.fields.date_start') }}</label>
                <input class="form-control date {{ $errors->has('date_start') ? 'is-invalid' : '' }}" type="text" name="date_start" id="date_start" value="{{ old('date_start') }}" required>
                @if($errors->has('date_start'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_start') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveManagement.fields.date_start_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="end_start">{{ trans('cruds.leaveManagement.fields.end_start') }}</label>
                <input class="form-control date {{ $errors->has('end_start') ? 'is-invalid' : '' }}" type="text" name="end_start" id="end_start" value="{{ old('end_start') }}" required>
                @if($errors->has('end_start'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_start') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveManagement.fields.end_start_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="details">{{ trans('cruds.leaveManagement.fields.details') }}</label>
                <textarea class="form-control {{ $errors->has('details') ? 'is-invalid' : '' }}" name="details" id="details">{{ old('details') }}</textarea>
                @if($errors->has('details'))
                    <div class="invalid-feedback">
                        {{ $errors->first('details') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveManagement.fields.details_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.leaveManagement.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\LeaveManagement::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', 'Pending') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveManagement.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="leave_type_id">{{ trans('cruds.leaveManagement.fields.leave_type') }}</label>
                <select class="form-control select2 {{ $errors->has('leave_type') ? 'is-invalid' : '' }}" name="leave_type_id" id="leave_type_id" required>
                    @foreach($leave_types as $id => $leave_type)
                        <option value="{{ $id }}" {{ old('leave_type_id') == $id ? 'selected' : '' }}>{{ $leave_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('leave_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('leave_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveManagement.fields.leave_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="leave_periode_id">{{ trans('cruds.leaveManagement.fields.leave_periode') }}</label>
                <select class="form-control select2 {{ $errors->has('leave_periode') ? 'is-invalid' : '' }}" name="leave_periode_id" id="leave_periode_id" required>
                    @foreach($leave_periodes as $id => $leave_periode)
                        <option value="{{ $id }}" {{ old('leave_periode_id') == $id ? 'selected' : '' }}>{{ $leave_periode }}</option>
                    @endforeach
                </select>
                @if($errors->has('leave_periode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('leave_periode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveManagement.fields.leave_periode_helper') }}</span>
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
