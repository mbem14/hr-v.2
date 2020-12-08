@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeHistoryJob.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-history-jobs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeHistoryJob.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeHistoryJob->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeHistoryJob.fields.employee') }}
                        </th>
                        <td>
                            {{ $employeeHistoryJob->employee->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeHistoryJob.fields.job') }}
                        </th>
                        <td>
                            {{ $employeeHistoryJob->job->code ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeHistoryJob.fields.department') }}
                        </th>
                        <td>
                            {{ $employeeHistoryJob->department->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeHistoryJob.fields.date_start') }}
                        </th>
                        <td>
                            {{ $employeeHistoryJob->date_start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeHistoryJob.fields.date_end') }}
                        </th>
                        <td>
                            {{ $employeeHistoryJob->date_end }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeHistoryJob.fields.file') }}
                        </th>
                        <td>
                            @if($employeeHistoryJob->file)
                                <a href="{{ $employeeHistoryJob->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeHistoryJob.fields.notes') }}
                        </th>
                        <td>
                            {{ $employeeHistoryJob->notes }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-history-jobs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection