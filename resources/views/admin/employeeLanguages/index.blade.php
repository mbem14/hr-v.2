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
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-EmployeeLanguage">
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
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('employee_language_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.employee-languages.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.employee-languages.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'employee_employee_number', name: 'employee.employee_number' },
{ data: 'languages_name', name: 'languages.name' },
{ data: 'reading', name: 'reading' },
{ data: 'speaking', name: 'speaking' },
{ data: 'writing', name: 'writing' },
{ data: 'listening', name: 'listening' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-EmployeeLanguage').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection
