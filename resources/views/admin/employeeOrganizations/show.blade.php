@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeOrganization.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-organizations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeOrganization.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeOrganization->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeOrganization.fields.name') }}
                        </th>
                        <td>
                            {{ $employeeOrganization->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeOrganization.fields.role') }}
                        </th>
                        <td>
                            {{ $employeeOrganization->role }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeOrganization.fields.periode') }}
                        </th>
                        <td>
                            ********
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeOrganization.fields.notes') }}
                        </th>
                        <td>
                            {{ $employeeOrganization->notes }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-organizations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection