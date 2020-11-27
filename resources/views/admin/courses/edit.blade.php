@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.course.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.courses.update", [$course->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.course.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $course->code) }}" required>
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.course.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $course->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.course.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $course->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="coordinator_id">{{ trans('cruds.course.fields.coordinator') }}</label>
                <select class="form-control select2 {{ $errors->has('coordinator') ? 'is-invalid' : '' }}" name="coordinator_id" id="coordinator_id">
                    @foreach($coordinators as $id => $coordinator)
                        <option value="{{ $id }}" {{ (old('coordinator_id') ? old('coordinator_id') : $course->coordinator->id ?? '') == $id ? 'selected' : '' }}>{{ $coordinator }}</option>
                    @endforeach
                </select>
                @if($errors->has('coordinator'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coordinator') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.coordinator_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="trainer">{{ trans('cruds.course.fields.trainer') }}</label>
                <input class="form-control {{ $errors->has('trainer') ? 'is-invalid' : '' }}" type="text" name="trainer" id="trainer" value="{{ old('trainer', $course->trainer) }}">
                @if($errors->has('trainer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('trainer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.trainer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="trainer_info">{{ trans('cruds.course.fields.trainer_info') }}</label>
                <textarea class="form-control {{ $errors->has('trainer_info') ? 'is-invalid' : '' }}" name="trainer_info" id="trainer_info">{{ old('trainer_info', $course->trainer_info) }}</textarea>
                @if($errors->has('trainer_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('trainer_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.trainer_info_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.course.fields.payment_type') }}</label>
                <select class="form-control {{ $errors->has('payment_type') ? 'is-invalid' : '' }}" name="payment_type" id="payment_type">
                    <option value disabled {{ old('payment_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Course::PAYMENT_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('payment_type', $course->payment_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.payment_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="currency">{{ trans('cruds.course.fields.currency') }}</label>
                <input class="form-control {{ $errors->has('currency') ? 'is-invalid' : '' }}" type="text" name="currency" id="currency" value="{{ old('currency', $course->currency) }}">
                @if($errors->has('currency'))
                    <div class="invalid-feedback">
                        {{ $errors->first('currency') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cost">{{ trans('cruds.course.fields.cost') }}</label>
                <input class="form-control {{ $errors->has('cost') ? 'is-invalid' : '' }}" type="number" name="cost" id="cost" value="{{ old('cost', $course->cost) }}" step="0.01">
                @if($errors->has('cost'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cost') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.cost_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.course.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Course::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $course->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.status_helper') }}</span>
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
