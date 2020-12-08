@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.employeeCertification.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employee-certifications.update", [$employeeCertification->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="certification">{{ trans('cruds.employeeCertification.fields.certification') }}</label>
                <input class="form-control {{ $errors->has('certification') ? 'is-invalid' : '' }}" type="text" name="certification" id="certification" value="{{ old('certification', $employeeCertification->certification) }}" required>
                @if($errors->has('certification'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certification') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeCertification.fields.certification_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.employeeCertification.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $employee)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $employeeCertification->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $employee }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeCertification.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="institute">{{ trans('cruds.employeeCertification.fields.institute') }}</label>
                <input class="form-control {{ $errors->has('institute') ? 'is-invalid' : '' }}" type="text" name="institute" id="institute" value="{{ old('institute', $employeeCertification->institute) }}" required>
                @if($errors->has('institute'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institute') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeCertification.fields.institute_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_start">{{ trans('cruds.employeeCertification.fields.date_start') }}</label>
                <input class="form-control date {{ $errors->has('date_start') ? 'is-invalid' : '' }}" type="text" name="date_start" id="date_start" value="{{ old('date_start', $employeeCertification->date_start) }}">
                @if($errors->has('date_start'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_start') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeCertification.fields.date_start_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_end">{{ trans('cruds.employeeCertification.fields.date_end') }}</label>
                <input class="form-control date {{ $errors->has('date_end') ? 'is-invalid' : '' }}" type="text" name="date_end" id="date_end" value="{{ old('date_end', $employeeCertification->date_end) }}">
                @if($errors->has('date_end'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_end') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeCertification.fields.date_end_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="file">{{ trans('cruds.employeeCertification.fields.file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="file-dropzone">
                </div>
                @if($errors->has('file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeCertification.fields.file_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.fileDropzone = {
    url: '{{ route('admin.employee-certifications.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="file"]').remove()
      $('form').append('<input type="hidden" name="file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeCertification) && $employeeCertification->file)
      var file = {!! json_encode($employeeCertification->file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="file" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection