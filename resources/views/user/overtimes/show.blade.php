@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.overtime.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.overtimes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.overtime.fields.id') }}
                        </th>
                        <td>
                            {{ $overtime->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.overtime.fields.employee') }}
                        </th>
                        <td>
                            {{ $overtime->employee->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.overtime.fields.start_time') }}
                        </th>
                        <td>
                            {{ $overtime->start_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.overtime.fields.end_time') }}
                        </th>
                        <td>
                            {{ $overtime->end_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.overtime.fields.task') }}
                        </th>
                        <td>
                            @foreach($overtime->tasks as $key => $task)
                                <span class="label label-info">{{ $task->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.overtime.fields.notes') }}
                        </th>
                        <td>
                            {{ $overtime->notes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.overtime.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Overtime::STATUS_SELECT[$overtime->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.overtimes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection