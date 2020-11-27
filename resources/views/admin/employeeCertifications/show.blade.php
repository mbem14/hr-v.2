@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeCertification.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-certifications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeCertification.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeCertification->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeCertification.fields.certification') }}
                        </th>
                        <td>
                            {{ $employeeCertification->certification }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeCertification.fields.employee') }}
                        </th>
                        <td>
                            {{ $employeeCertification->employee->employee_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeCertification.fields.institute') }}
                        </th>
                        <td>
                            {{ $employeeCertification->institute }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeCertification.fields.date_start') }}
                        </th>
                        <td>
                            {{ $employeeCertification->date_start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeCertification.fields.date_end') }}
                        </th>
                        <td>
                            {{ $employeeCertification->date_end }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeCertification.fields.file') }}
                        </th>
                        <td>
                            @if($employeeCertification->file)
                                <a href="{{ $employeeCertification->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-certifications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection