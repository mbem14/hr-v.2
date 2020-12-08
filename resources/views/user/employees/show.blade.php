@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employee.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.id') }}
                        </th>
                        <td>
                            {{ $employee->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.employee_number') }}
                        </th>
                        <td>
                            {{ $employee->employee_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.first_name') }}
                        </th>
                        <td>
                            {{ $employee->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.middle_name') }}
                        </th>
                        <td>
                            {{ $employee->middle_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.last_name') }}
                        </th>
                        <td>
                            {{ $employee->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.front_title') }}
                        </th>
                        <td>
                            {{ $employee->front_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.back_title') }}
                        </th>
                        <td>
                            {{ $employee->back_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.birth_place') }}
                        </th>
                        <td>
                            {{ $employee->birth_place }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.birthday') }}
                        </th>
                        <td>
                            {{ $employee->birthday }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.religion') }}
                        </th>
                        <td>
                            {{ App\Models\Employee::RELIGION_SELECT[$employee->religion] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Models\Employee::GENDER_SELECT[$employee->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.nationality') }}
                        </th>
                        <td>
                            {{ $employee->nationality->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.marital_status') }}
                        </th>
                        <td>
                            {{ App\Models\Employee::MARITAL_STATUS_SELECT[$employee->marital_status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.blood_type') }}
                        </th>
                        <td>
                            {{ $employee->blood_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.id_card') }}
                        </th>
                        <td>
                            {{ $employee->id_card }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.address_1') }}
                        </th>
                        <td>
                            {{ $employee->address_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.address_2') }}
                        </th>
                        <td>
                            {{ $employee->address_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.country') }}
                        </th>
                        <td>
                            {{ $employee->country->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.province') }}
                        </th>
                        <td>
                            {{ $employee->province->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.city') }}
                        </th>
                        <td>
                            {{ $employee->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $employee->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.home_phone') }}
                        </th>
                        <td>
                            {{ $employee->home_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.mobile_phone') }}
                        </th>
                        <td>
                            {{ $employee->mobile_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.job_title') }}
                        </th>
                        <td>
                            {{ $employee->job_title->code ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.joined_date') }}
                        </th>
                        <td>
                            {{ $employee->joined_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.confirmation_date') }}
                        </th>
                        <td>
                            {{ $employee->confirmation_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.number_decree') }}
                        </th>
                        <td>
                            {{ $employee->number_decree }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.terminate_date') }}
                        </th>
                        <td>
                            {{ $employee->terminate_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.work_phone') }}
                        </th>
                        <td>
                            {{ $employee->work_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.work_email') }}
                        </th>
                        <td>
                            {{ $employee->work_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.private_email') }}
                        </th>
                        <td>
                            {{ $employee->private_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.department') }}
                        </th>
                        <td>
                            {{ $employee->department->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.supervisor') }}
                        </th>
                        <td>
                            {{ $employee->supervisor->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.indirect_supervisors') }}
                        </th>
                        <td>
                            {{ $employee->indirect_supervisors->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Employee::STATUS_SELECT[$employee->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.employment_status') }}
                        </th>
                        <td>
                            {{ $employee->employment_status->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection