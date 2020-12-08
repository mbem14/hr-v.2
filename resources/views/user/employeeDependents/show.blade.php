@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeDependent.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-dependents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeDependent.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeDependent->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeDependent.fields.employee') }}
                        </th>
                        <td>
                            {{ $employeeDependent->employee->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeDependent.fields.name') }}
                        </th>
                        <td>
                            {{ $employeeDependent->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeDependent.fields.relationship') }}
                        </th>
                        <td>
                            {{ App\Models\EmployeeDependent::RELATIONSHIP_SELECT[$employeeDependent->relationship] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeDependent.fields.dob') }}
                        </th>
                        <td>
                            {{ $employeeDependent->dob }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeDependent.fields.address') }}
                        </th>
                        <td>
                            {{ $employeeDependent->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeDependent.fields.idcard') }}
                        </th>
                        <td>
                            {{ $employeeDependent->idcard }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-dependents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection