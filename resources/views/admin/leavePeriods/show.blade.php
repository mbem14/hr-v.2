@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.leavePeriod.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.leave-periods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.leavePeriod.fields.id') }}
                        </th>
                        <td>
                            {{ $leavePeriod->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leavePeriod.fields.name') }}
                        </th>
                        <td>
                            {{ $leavePeriod->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leavePeriod.fields.date_start') }}
                        </th>
                        <td>
                            {{ $leavePeriod->date_start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leavePeriod.fields.end_date') }}
                        </th>
                        <td>
                            {{ $leavePeriod->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leavePeriod.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\LeavePeriod::STATUS_SELECT[$leavePeriod->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.leave-periods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection