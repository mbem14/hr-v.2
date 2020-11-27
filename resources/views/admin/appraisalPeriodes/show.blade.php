@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.appraisalPeriode.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.appraisal-periodes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.id') }}
                        </th>
                        <td>
                            {{ $appraisalPeriode->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.name') }}
                        </th>
                        <td>
                            {{ $appraisalPeriode->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.start_date') }}
                        </th>
                        <td>
                            {{ $appraisalPeriode->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.end_date') }}
                        </th>
                        <td>
                            {{ $appraisalPeriode->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\AppraisalPeriode::STATUS_SELECT[$appraisalPeriode->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.description') }}
                        </th>
                        <td>
                            {{ $appraisalPeriode->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.appraisal-periodes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection