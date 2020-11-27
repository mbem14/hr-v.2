@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeLanguage.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-languages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeLanguage->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.employee') }}
                        </th>
                        <td>
                            {{ $employeeLanguage->employee->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.languages') }}
                        </th>
                        <td>
                            {{ $employeeLanguage->languages->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.reading') }}
                        </th>
                        <td>
                            {{ App\Models\EmployeeLanguage::READING_SELECT[$employeeLanguage->reading] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.speaking') }}
                        </th>
                        <td>
                            {{ App\Models\EmployeeLanguage::SPEAKING_SELECT[$employeeLanguage->speaking] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.writing') }}
                        </th>
                        <td>
                            {{ App\Models\EmployeeLanguage::WRITING_SELECT[$employeeLanguage->writing] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.listening') }}
                        </th>
                        <td>
                            {{ App\Models\EmployeeLanguage::LISTENING_SELECT[$employeeLanguage->listening] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-languages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection