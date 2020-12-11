@extends('layouts.template')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeAppraisal.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-appraisals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.employee') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->employee->full_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.period') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->period->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.evaluator') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->evaluator->full_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_1') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_2') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_3') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_4') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_5') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_6') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_7') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_8') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_9') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_10') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_11') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_12') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_13') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_13 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_14') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_15') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_15 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_16') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_16 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_17') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_17 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_18') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_18 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_19') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_19 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.pilih_20') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->pilih_20 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.target_1') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->target_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.target_2') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->target_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.target_3') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->target_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.target_4') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->target_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.target_5') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->target_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.reali_1') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->reali_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.reali_2') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->reali_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.reali_3') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->reali_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.reali_4') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->reali_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.reali_5') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->reali_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.nilai_1') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->nilai_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.nilai_2') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->nilai_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.nilai_3') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->nilai_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.nilai_4') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->nilai_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.nilai_5') }}
                        </th>
                        <td>
                            {{ $employeeAppraisal->nilai_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeAppraisal.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\EmployeeAppraisal::STATUS_SELECT[$employeeAppraisal->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-appraisals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection