@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.leaveStartingBalance.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.leave-starting-balances.update", [$leaveStartingBalance->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="leave_type_id">{{ trans('cruds.leaveStartingBalance.fields.leave_type') }}</label>
                <select class="form-control select2 {{ $errors->has('leave_type') ? 'is-invalid' : '' }}" name="leave_type_id" id="leave_type_id" required>
                    @foreach($leave_types as $id => $leave_type)
                        <option value="{{ $id }}" {{ (old('leave_type_id') ? old('leave_type_id') : $leaveStartingBalance->leave_type->id ?? '') == $id ? 'selected' : '' }}>{{ $leave_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('leave_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('leave_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveStartingBalance.fields.leave_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.leaveStartingBalance.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $employee)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $leaveStartingBalance->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $employee }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveStartingBalance.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="leave_period_id">{{ trans('cruds.leaveStartingBalance.fields.leave_period') }}</label>
                <select class="form-control select2 {{ $errors->has('leave_period') ? 'is-invalid' : '' }}" name="leave_period_id" id="leave_period_id" required>
                    @foreach($leave_periods as $id => $leave_period)
                        <option value="{{ $id }}" {{ (old('leave_period_id') ? old('leave_period_id') : $leaveStartingBalance->leave_period->id ?? '') == $id ? 'selected' : '' }}>{{ $leave_period }}</option>
                    @endforeach
                </select>
                @if($errors->has('leave_period'))
                    <div class="invalid-feedback">
                        {{ $errors->first('leave_period') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveStartingBalance.fields.leave_period_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount">{{ trans('cruds.leaveStartingBalance.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', $leaveStartingBalance->amount) }}" step="0.01" required>
                @if($errors->has('amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveStartingBalance.fields.amount_helper') }}</span>
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