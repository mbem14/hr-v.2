@extends('layouts.admin')
@section('content')
@can('leave_period_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.leave-periods.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.leavePeriod.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.leavePeriod.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-LeavePeriod">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.leavePeriod.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.leavePeriod.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.leavePeriod.fields.date_start') }}
                        </th>
                        <th>
                            {{ trans('cruds.leavePeriod.fields.end_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.leavePeriod.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leavePeriods as $key => $leavePeriod)
                        <tr data-entry-id="{{ $leavePeriod->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $leavePeriod->id ?? '' }}
                            </td>
                            <td>
                                {{ $leavePeriod->name ?? '' }}
                            </td>
                            <td>
                                {{ $leavePeriod->date_start ?? '' }}
                            </td>
                            <td>
                                {{ $leavePeriod->end_date ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\LeavePeriod::STATUS_SELECT[$leavePeriod->status] ?? '' }}
                            </td>
                            <td>
                                @can('leave_period_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.leave-periods.show', $leavePeriod->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('leave_period_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.leave-periods.edit', $leavePeriod->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('leave_period_delete')
                                    <form action="{{ route('admin.leave-periods.destroy', $leavePeriod->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('leave_period_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.leave-periods.massDestroy') }}",
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
  let table = $('.datatable-LeavePeriod:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
