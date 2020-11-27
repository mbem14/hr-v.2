@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.employeeTrainingSession.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employee-training-sessions.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="employees">{{ trans('cruds.employeeTrainingSession.fields.employee') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('employees') ? 'is-invalid' : '' }}" name="employees[]" id="employees" multiple required>
                    @foreach($employees as $id => $employee)
                        <option value="{{ $id }}" {{ in_array($id, old('employees', [])) ? 'selected' : '' }}>{{ $employee }}</option>
                    @endforeach
                </select>
                @if($errors->has('employees'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employees') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeTrainingSession.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="training_session_id">{{ trans('cruds.employeeTrainingSession.fields.training_session') }}</label>
                <select class="form-control select2 {{ $errors->has('training_session') ? 'is-invalid' : '' }}" name="training_session_id" id="training_session_id" required>
                    @foreach($training_sessions as $id => $training_session)
                        <option value="{{ $id }}" {{ old('training_session_id') == $id ? 'selected' : '' }}>{{ $training_session }}</option>
                    @endforeach
                </select>
                @if($errors->has('training_session'))
                    <div class="invalid-feedback">
                        {{ $errors->first('training_session') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeTrainingSession.fields.training_session_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="feedback">{{ trans('cruds.employeeTrainingSession.fields.feedback') }}</label>
                <textarea class="form-control {{ $errors->has('feedback') ? 'is-invalid' : '' }}" name="feedback" id="feedback">{{ old('feedback') }}</textarea>
                @if($errors->has('feedback'))
                    <div class="invalid-feedback">
                        {{ $errors->first('feedback') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeTrainingSession.fields.feedback_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.employeeTrainingSession.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\EmployeeTrainingSession::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', 'Scheduled') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeTrainingSession.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="proof">{{ trans('cruds.employeeTrainingSession.fields.proof') }}</label>
                <div class="needsclick dropzone {{ $errors->has('proof') ? 'is-invalid' : '' }}" id="proof-dropzone">
                </div>
                @if($errors->has('proof'))
                    <div class="invalid-feedback">
                        {{ $errors->first('proof') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeTrainingSession.fields.proof_helper') }}</span>
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
    Dropzone.options.proofDropzone = {
    url: '{{ route('admin.employee-training-sessions.storeMedia') }}',
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
      $('form').find('input[name="proof"]').remove()
      $('form').append('<input type="hidden" name="proof" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="proof"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeTrainingSession) && $employeeTrainingSession->proof)
      var file = {!! json_encode($employeeTrainingSession->proof) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="proof" value="' + file.file_name + '">')
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
