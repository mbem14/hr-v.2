@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.course.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.courses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.id') }}
                        </th>
                        <td>
                            {{ $course->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.code') }}
                        </th>
                        <td>
                            {{ $course->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.name') }}
                        </th>
                        <td>
                            {{ $course->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.description') }}
                        </th>
                        <td>
                            {{ $course->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.coordinator') }}
                        </th>
                        <td>
                            {{ $course->coordinator->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.trainer') }}
                        </th>
                        <td>
                            {{ $course->trainer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.trainer_info') }}
                        </th>
                        <td>
                            {{ $course->trainer_info }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.payment_type') }}
                        </th>
                        <td>
                            {{ App\Models\Course::PAYMENT_TYPE_SELECT[$course->payment_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.currency') }}
                        </th>
                        <td>
                            {{ $course->currency }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.cost') }}
                        </th>
                        <td>
                            {{ $course->cost }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Course::STATUS_SELECT[$course->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.courses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection