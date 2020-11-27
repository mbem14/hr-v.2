@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.periode.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.periodes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.periode.fields.id') }}
                        </th>
                        <td>
                            {{ $periode->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.periode.fields.name') }}
                        </th>
                        <td>
                            {{ $periode->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.periode.fields.start_date') }}
                        </th>
                        <td>
                            {{ $periode->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.periode.fields.end_date') }}
                        </th>
                        <td>
                            {{ $periode->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.periode.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Periode::STATUS_SELECT[$periode->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.periode.fields.description') }}
                        </th>
                        <td>
                            {{ $periode->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.periodes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection