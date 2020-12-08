@extends('layouts.admin')
@section('content')
@can('emergency_contact_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.emergency-contacts.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.emergencyContact.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.emergencyContact.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-EmergencyContact">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.emergencyContact.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.emergencyContact.fields.employee') }}
                    </th>
                    <th>
                        {{ trans('cruds.emergencyContact.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.emergencyContact.fields.relationship') }}
                    </th>
                    <th>
                        {{ trans('cruds.emergencyContact.fields.home_phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.emergencyContact.fields.mobile_phone') }}
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
@can('emergency_contact_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.emergency-contacts.massDestroy') }}",
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
    ajax: "{{ route('admin.emergency-contacts.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'employee_employee_number', name: 'employee.employee_number' },
{ data: 'name', name: 'name' },
{ data: 'relationship', name: 'relationship' },
{ data: 'home_phone', name: 'home_phone' },
{ data: 'mobile_phone', name: 'mobile_phone' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-EmergencyContact').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection
