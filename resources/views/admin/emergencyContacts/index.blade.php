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
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-EmergencyContact">
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
                <tbody>
                    @foreach($emergencyContacts as $key => $emergencyContact)
                        <tr data-entry-id="{{ $emergencyContact->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $emergencyContact->id ?? '' }}
                            </td>
                            <td>
                                {{ $emergencyContact->employee->employee_number ?? '' }}
                            </td>
                            <td>
                                {{ $emergencyContact->name ?? '' }}
                            </td>
                            <td>
                                {{ $emergencyContact->relationship ?? '' }}
                            </td>
                            <td>
                                {{ $emergencyContact->home_phone ?? '' }}
                            </td>
                            <td>
                                {{ $emergencyContact->mobile_phone ?? '' }}
                            </td>
                            <td>
                                @can('emergency_contact_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.emergency-contacts.show', $emergencyContact->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('emergency_contact_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.emergency-contacts.edit', $emergencyContact->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('emergency_contact_delete')
                                    <form action="{{ route('admin.emergency-contacts.destroy', $emergencyContact->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('emergency_contact_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.emergency-contacts.massDestroy') }}",
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
  let table = $('.datatable-EmergencyContact:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
