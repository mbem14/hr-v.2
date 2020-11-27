@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.leaveStartingBalance.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.leave-starting-balances.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveStartingBalance.fields.id') }}
                        </th>
                        <td>
                            {{ $leaveStartingBalance->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveStartingBalance.fields.leave_type') }}
                        </th>
                        <td>
                            {{ $leaveStartingBalance->leave_type->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveStartingBalance.fields.employee') }}
                        </th>
                        <td>
                            {{ $leaveStartingBalance->employee->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveStartingBalance.fields.leave_period') }}
                        </th>
                        <td>
                            {{ $leaveStartingBalance->leave_period->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveStartingBalance.fields.amount') }}
                        </th>
                        <td>
                            {{ $leaveStartingBalance->amount }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.leave-starting-balances.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection