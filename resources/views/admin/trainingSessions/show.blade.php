@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.trainingSession.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.training-sessions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingSession.fields.id') }}
                        </th>
                        <td>
                            {{ $trainingSession->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingSession.fields.name') }}
                        </th>
                        <td>
                            {{ $trainingSession->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingSession.fields.course') }}
                        </th>
                        <td>
                            {{ $trainingSession->course->code ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingSession.fields.description') }}
                        </th>
                        <td>
                            {{ $trainingSession->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingSession.fields.scheduled') }}
                        </th>
                        <td>
                            {{ $trainingSession->scheduled }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingSession.fields.due_date') }}
                        </th>
                        <td>
                            {{ $trainingSession->due_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingSession.fields.delivery_method') }}
                        </th>
                        <td>
                            {{ App\Models\TrainingSession::DELIVERY_METHOD_SELECT[$trainingSession->delivery_method] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingSession.fields.location') }}
                        </th>
                        <td>
                            {{ $trainingSession->location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingSession.fields.attendance_type') }}
                        </th>
                        <td>
                            {{ App\Models\TrainingSession::ATTENDANCE_TYPE_SELECT[$trainingSession->attendance_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingSession.fields.attachment') }}
                        </th>
                        <td>
                            @if($trainingSession->attachment)
                                <a href="{{ $trainingSession->attachment->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.training-sessions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection