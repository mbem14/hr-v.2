@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.leaveManagement.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.leave-managements.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveManagement.fields.id') }}
                        </th>
                        <td>
                            {{ $leaveManagement->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveManagement.fields.employee') }}
                        </th>
                        <td>
                            {{ $leaveManagement->employee->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveManagement.fields.date_start') }}
                        </th>
                        <td>
                            {{ $leaveManagement->date_start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveManagement.fields.end_start') }}
                        </th>
                        <td>
                            {{ $leaveManagement->end_start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveManagement.fields.details') }}
                        </th>
                        <td>
                            {{ $leaveManagement->details }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveManagement.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\LeaveManagement::STATUS_SELECT[$leaveManagement->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveManagement.fields.leave_type') }}
                        </th>
                        <td>
                            {{ $leaveManagement->leave_type->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveManagement.fields.leave_periode') }}
                        </th>
                        <td>
                            {{ $leaveManagement->leave_periode->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.leave-managements.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection