@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.attendance.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.attendances.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.id') }}
                        </th>
                        <td>
                            {{ $attendance->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.employee') }}
                        </th>
                        <td>
                            {{ $attendance->employee->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.in_time') }}
                        </th>
                        <td>
                            {{ $attendance->in_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.out_time') }}
                        </th>
                        <td>
                            {{ $attendance->out_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.note') }}
                        </th>
                        <td>
                            {{ $attendance->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.longitude') }}
                        </th>
                        <td>
                            {{ $attendance->longitude }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.latitude') }}
                        </th>
                        <td>
                            {{ $attendance->latitude }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.attendances.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection