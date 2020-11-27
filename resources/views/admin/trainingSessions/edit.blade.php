@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.trainingSession.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.training-sessions.update", [$trainingSession->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.trainingSession.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $trainingSession->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trainingSession.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_id">{{ trans('cruds.trainingSession.fields.course') }}</label>
                <select class="form-control select2 {{ $errors->has('course') ? 'is-invalid' : '' }}" name="course_id" id="course_id" required>
                    @foreach($courses as $id => $course)
                        <option value="{{ $id }}" {{ (old('course_id') ? old('course_id') : $trainingSession->course->id ?? '') == $id ? 'selected' : '' }}>{{ $course }}</option>
                    @endforeach
                </select>
                @if($errors->has('course'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trainingSession.fields.course_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.trainingSession.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $trainingSession->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trainingSession.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="scheduled">{{ trans('cruds.trainingSession.fields.scheduled') }}</label>
                <input class="form-control datetime {{ $errors->has('scheduled') ? 'is-invalid' : '' }}" type="text" name="scheduled" id="scheduled" value="{{ old('scheduled', $trainingSession->scheduled) }}" required>
                @if($errors->has('scheduled'))
                    <div class="invalid-feedback">
                        {{ $errors->first('scheduled') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trainingSession.fields.scheduled_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="due_date">{{ trans('cruds.trainingSession.fields.due_date') }}</label>
                <input class="form-control datetime {{ $errors->has('due_date') ? 'is-invalid' : '' }}" type="text" name="due_date" id="due_date" value="{{ old('due_date', $trainingSession->due_date) }}">
                @if($errors->has('due_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('due_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trainingSession.fields.due_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.trainingSession.fields.delivery_method') }}</label>
                <select class="form-control {{ $errors->has('delivery_method') ? 'is-invalid' : '' }}" name="delivery_method" id="delivery_method">
                    <option value disabled {{ old('delivery_method', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\TrainingSession::DELIVERY_METHOD_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('delivery_method', $trainingSession->delivery_method) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('delivery_method'))
                    <div class="invalid-feedback">
                        {{ $errors->first('delivery_method') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trainingSession.fields.delivery_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="location">{{ trans('cruds.trainingSession.fields.location') }}</label>
                <input class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" type="text" name="location" id="location" value="{{ old('location', $trainingSession->location) }}">
                @if($errors->has('location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trainingSession.fields.location_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.trainingSession.fields.attendance_type') }}</label>
                <select class="form-control {{ $errors->has('attendance_type') ? 'is-invalid' : '' }}" name="attendance_type" id="attendance_type" required>
                    <option value disabled {{ old('attendance_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\TrainingSession::ATTENDANCE_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('attendance_type', $trainingSession->attendance_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('attendance_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('attendance_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trainingSession.fields.attendance_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="attachment">{{ trans('cruds.trainingSession.fields.attachment') }}</label>
                <div class="needsclick dropzone {{ $errors->has('attachment') ? 'is-invalid' : '' }}" id="attachment-dropzone">
                </div>
                @if($errors->has('attachment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('attachment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.trainingSession.fields.attachment_helper') }}</span>
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
    Dropzone.options.attachmentDropzone = {
    url: '{{ route('admin.training-sessions.storeMedia') }}',
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
      $('form').find('input[name="attachment"]').remove()
      $('form').append('<input type="hidden" name="attachment" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="attachment"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($trainingSession) && $trainingSession->attachment)
      var file = {!! json_encode($trainingSession->attachment) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="attachment" value="' + file.file_name + '">')
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