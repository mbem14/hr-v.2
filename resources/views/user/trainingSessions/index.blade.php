@extends('layouts.admin')
@section('content')
@can('training_session_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.training-sessions.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.trainingSession.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.trainingSession.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-TrainingSession">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.trainingSession.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.trainingSession.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.trainingSession.fields.course') }}
                    </th>
                    <th>
                        {{ trans('cruds.trainingSession.fields.description') }}
                    </th>
                    <th>
                        {{ trans('cruds.trainingSession.fields.scheduled') }}
                    </th>
                    <th>
                        {{ trans('cruds.trainingSession.fields.due_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.trainingSession.fields.delivery_method') }}
                    </th>
                    <th>
                        {{ trans('cruds.trainingSession.fields.location') }}
                    </th>
                    <th>
                        {{ trans('cruds.trainingSession.fields.attendance_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.trainingSession.fields.attachment') }}
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
@can('training_session_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.training-sessions.massDestroy') }}",
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
    ajax: "{{ route('admin.training-sessions.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'course_code', name: 'course.code' },
{ data: 'description', name: 'description' },
{ data: 'scheduled', name: 'scheduled' },
{ data: 'due_date', name: 'due_date' },
{ data: 'delivery_method', name: 'delivery_method' },
{ data: 'location', name: 'location' },
{ data: 'attendance_type', name: 'attendance_type' },
{ data: 'attachment', name: 'attachment', sortable: false, searchable: false },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-TrainingSession').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection
