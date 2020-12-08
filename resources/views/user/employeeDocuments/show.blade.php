@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeDocument.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-documents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeDocument.fields.id') }}
                        </th>
                        <td>
                            {{ $employeeDocument->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeDocument.fields.name') }}
                        </th>
                        <td>
                            {{ $employeeDocument->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeDocument.fields.file') }}
                        </th>
                        <td>
                            @if($employeeDocument->file)
                                <a href="{{ $employeeDocument->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-documents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection