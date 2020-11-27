@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.employeeOrganization.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employee-organizations.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.employeeOrganization.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeOrganization.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="role">{{ trans('cruds.employeeOrganization.fields.role') }}</label>
                <input class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }}" type="text" name="role" id="role" value="{{ old('role', '') }}" required>
                @if($errors->has('role'))
                    <div class="invalid-feedback">
                        {{ $errors->first('role') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeOrganization.fields.role_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="periode">{{ trans('cruds.employeeOrganization.fields.periode') }}</label>
                <input class="form-control {{ $errors->has('periode') ? 'is-invalid' : '' }}" type="password" name="periode" id="periode">
                @if($errors->has('periode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('periode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeOrganization.fields.periode_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.employeeOrganization.fields.notes') }}</label>
                <textarea class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{{ old('notes') }}</textarea>
                @if($errors->has('notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeOrganization.fields.notes_helper') }}</span>
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
