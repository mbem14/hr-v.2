@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeNonFormalEducation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-non-formal-educations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeNonFormalEducation.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeNonFormalEducation->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeNonFormalEducation.fields.name') }}
                        </th>
                        <td>
                            {{ $employeeNonFormalEducation->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeNonFormalEducation.fields.date_start') }}
                        </th>
                        <td>
                            {{ $employeeNonFormalEducation->date_start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeNonFormalEducation.fields.date_end') }}
                        </th>
                        <td>
                            {{ $employeeNonFormalEducation->date_end }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeNonFormalEducation.fields.level') }}
                        </th>
                        <td>
                            {{ $employeeNonFormalEducation->level }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeNonFormalEducation.fields.file') }}
                        </th>
                        <td>
                            @if($employeeNonFormalEducation->file)
                                <a href="{{ $employeeNonFormalEducation->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeNonFormalEducation.fields.notes') }}
                        </th>
                        <td>
                            {{ $employeeNonFormalEducation->notes }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-non-formal-educations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection