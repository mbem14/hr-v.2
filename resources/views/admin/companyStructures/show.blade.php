@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.companyStructure.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.company-structures.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.companyStructure.fields.id') }}
                        </th>
                        <td>
                            {{ $companyStructure->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.companyStructure.fields.title') }}
                        </th>
                        <td>
                            {{ $companyStructure->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.companyStructure.fields.description') }}
                        </th>
                        <td>
                            {{ $companyStructure->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.companyStructure.fields.type') }}
                        </th>
                        <td>
                            {{ App\Models\CompanyStructure::TYPE_SELECT[$companyStructure->type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.companyStructure.fields.parent') }}
                        </th>
                        <td>
                            {{ $companyStructure->parent->title ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.company-structures.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
