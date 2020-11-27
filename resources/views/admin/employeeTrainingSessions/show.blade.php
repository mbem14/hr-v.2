@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeTrainingSession.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-training-sessions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeTrainingSession.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeTrainingSession->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeTrainingSession.fields.employee') }}
                        </th>
                        <td>
                            @foreach($employeeTrainingSession->employees as $key => $employee)
                                <span class="label label-info">{{ $employee->employee_number }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeTrainingSession.fields.training_session') }}
                        </th>
                        <td>
                            {{ $employeeTrainingSession->training_session->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeTrainingSession.fields.feedback') }}
                        </th>
                        <td>
                            {{ $employeeTrainingSession->feedback }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeTrainingSession.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\EmployeeTrainingSession::STATUS_SELECT[$employeeTrainingSession->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeTrainingSession.fields.proof') }}
                        </th>
                        <td>
                            @if($employeeTrainingSession->proof)
                                <a href="{{ $employeeTrainingSession->proof->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-training-sessions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection