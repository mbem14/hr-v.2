@extends('layouts.admin')
@section('content')
@can('employee_language_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.employee-languages.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.employeeLanguage.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.employeeLanguage.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-EmployeeLanguage">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.employee') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.languages') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.reading') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.speaking') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.writing') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeLanguage.fields.listening') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employeeLanguages as $key => $employeeLanguage)
                        <tr data-entry-id="{{ $employeeLanguage->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $employeeLanguage->id ?? '' }}
                            </td>
                            <td>
                                {{ $employeeLanguage->employee->employee_number ?? '' }}
                            </td>
                            <td>
                                {{ $employeeLanguage->languages->name ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\EmployeeLanguage::READING_SELECT[$employeeLanguage->reading] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\EmployeeLanguage::SPEAKING_SELECT[$employeeLanguage->speaking] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\EmployeeLanguage::WRITING_SELECT[$employeeLanguage->writing] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\EmployeeLanguage::LISTENING_SELECT[$employeeLanguage->listening] ?? '' }}
                            </td>
                            <td>
                                @can('employee_language_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.employee-languages.show', $employeeLanguage->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('employee_language_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.employee-languages.edit', $employeeLanguage->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('employee_language_delete')
                                    <form action="{{ route('admin.employee-languages.destroy', $employeeLanguage->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('employee_language_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.employee-languages.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-EmployeeLanguage:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
