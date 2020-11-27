@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.jobTitle.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.job-titles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.id') }}
                        </th>
                        <td>
                            {{ $jobTitle->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.code') }}
                        </th>
                        <td>
                            {{ $jobTitle->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.name') }}
                        </th>
                        <td>
                            {{ $jobTitle->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.main_purpose') }}
                        </th>
                        <td>
                            {{ $jobTitle->main_purpose }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.responsibility') }}
                        </th>
                        <td>
                            {{ $jobTitle->responsibility }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.result') }}
                        </th>
                        <td>
                            {{ $jobTitle->result }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.challange') }}
                        </th>
                        <td>
                            {{ $jobTitle->challange }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.authority') }}
                        </th>
                        <td>
                            {{ $jobTitle->authority }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.internal_relation') }}
                        </th>
                        <td>
                            {{ $jobTitle->internal_relation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.external_relation') }}
                        </th>
                        <td>
                            {{ $jobTitle->external_relation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.financial_dimension') }}
                        </th>
                        <td>
                            {{ $jobTitle->financial_dimension }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.hr_dimension') }}
                        </th>
                        <td>
                            {{ $jobTitle->hr_dimension }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.qualification') }}
                        </th>
                        <td>
                            {{ $jobTitle->qualification }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobTitle.fields.training_need') }}
                        </th>
                        <td>
                            {{ $jobTitle->training_need }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.job-titles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection