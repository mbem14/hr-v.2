@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.overtime.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.overtimes.update", [$overtime->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.overtime.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $employee)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $overtime->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $employee }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.overtime.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="start_time">{{ trans('cruds.overtime.fields.start_time') }}</label>
                <input class="form-control datetime {{ $errors->has('start_time') ? 'is-invalid' : '' }}" type="text" name="start_time" id="start_time" value="{{ old('start_time', $overtime->start_time) }}" required>
                @if($errors->has('start_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.overtime.fields.start_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="end_time">{{ trans('cruds.overtime.fields.end_time') }}</label>
                <input class="form-control datetime {{ $errors->has('end_time') ? 'is-invalid' : '' }}" type="text" name="end_time" id="end_time" value="{{ old('end_time', $overtime->end_time) }}" required>
                @if($errors->has('end_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.overtime.fields.end_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tasks">{{ trans('cruds.overtime.fields.task') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('tasks') ? 'is-invalid' : '' }}" name="tasks[]" id="tasks" multiple required>
                    @foreach($tasks as $id => $task)
                        <option value="{{ $id }}" {{ (in_array($id, old('tasks', [])) || $overtime->tasks->contains($id)) ? 'selected' : '' }}>{{ $task }}</option>
                    @endforeach
                </select>
                @if($errors->has('tasks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tasks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.overtime.fields.task_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.overtime.fields.notes') }}</label>
                <textarea class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{{ old('notes', $overtime->notes) }}</textarea>
                @if($errors->has('notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.overtime.fields.notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.overtime.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Overtime::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $overtime->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.overtime.fields.status_helper') }}</span>
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