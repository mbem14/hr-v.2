@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.leaveType.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.leave-types.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.leaveType.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveType.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="default_per_year">{{ trans('cruds.leaveType.fields.default_per_year') }}</label>
                <input class="form-control {{ $errors->has('default_per_year') ? 'is-invalid' : '' }}" type="number" name="default_per_year" id="default_per_year" value="{{ old('default_per_year', '') }}" step="0.001" required>
                @if($errors->has('default_per_year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('default_per_year') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.leaveType.fields.default_per_year_helper') }}</span>
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
