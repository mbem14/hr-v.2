@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeEducation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-educations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeEducation.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeEducation->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeEducation.fields.education') }}
                        </th>
                        <td>
                            {{ $employeeEducation->education->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeEducation.fields.employee') }}
                        </th>
                        <td>
                            {{ $employeeEducation->employee->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeEducation.fields.institute') }}
                        </th>
                        <td>
                            {{ $employeeEducation->institute }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeEducation.fields.date_start') }}
                        </th>
                        <td>
                            {{ $employeeEducation->date_start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeEducation.fields.date_end') }}
                        </th>
                        <td>
                            {{ $employeeEducation->date_end }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-educations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection