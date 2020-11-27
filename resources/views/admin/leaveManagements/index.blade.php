@extends('layouts.admin')
@section('content')
@can('leave_management_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.leave-managements.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.leaveManagement.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.leaveManagement.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-LeaveManagement">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.leaveManagement.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.leaveManagement.fields.employee') }}
                    </th>
                    <th>
                        {{ trans('cruds.leaveManagement.fields.date_start') }}
                    </th>
                    <th>
                        {{ trans('cruds.leaveManagement.fields.end_start') }}
                    </th>
                    <th>
                        {{ trans('cruds.leaveManagement.fields.details') }}
                    </th>
                    <th>
                        {{ trans('cruds.leaveManagement.fields.status') }}
                    </th>
                    <th>
                        {{ trans('cruds.leaveManagement.fields.leave_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.leaveManagement.fields.leave_periode') }}
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
@can('leave_management_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.leave-managements.massDestroy') }}",
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
    ajax: "{{ route('admin.leave-managements.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'employee_employee_number', name: 'employee.employee_number' },
{ data: 'date_start', name: 'date_start' },
{ data: 'end_start', name: 'end_start' },
{ data: 'details', name: 'details' },
{ data: 'status', name: 'status' },
{ data: 'leave_type_name', name: 'leave_type.name' },
{ data: 'leave_periode_name', name: 'leave_periode.name' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-LeaveManagement').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection
