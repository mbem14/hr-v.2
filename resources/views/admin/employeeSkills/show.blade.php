@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeSkill.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-skills.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeSkill.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeSkill->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeSkill.fields.skill') }}
                        </th>
                        <td>
                            {{ $employeeSkill->skill }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeSkill.fields.details') }}
                        </th>
                        <td>
                            {{ $employeeSkill->details }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeSkill.fields.employee') }}
                        </th>
                        <td>
                            {{ $employeeSkill->employee->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeSkill.fields.file') }}
                        </th>
                        <td>
                            @if($employeeSkill->file)
                                <a href="{{ $employeeSkill->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-skills.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection