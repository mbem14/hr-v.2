@extends('layouts.admin')
@section('content')
@can('appraisal_periode_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.appraisal-periodes.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.appraisalPeriode.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.appraisalPeriode.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-AppraisalPeriode">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.end_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.appraisalPeriode.fields.description') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appraisalPeriodes as $key => $appraisalPeriode)
                        <tr data-entry-id="{{ $appraisalPeriode->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $appraisalPeriode->id ?? '' }}
                            </td>
                            <td>
                                {{ $appraisalPeriode->name ?? '' }}
                            </td>
                            <td>
                                {{ $appraisalPeriode->start_date ?? '' }}
                            </td>
                            <td>
                                {{ $appraisalPeriode->end_date ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\AppraisalPeriode::STATUS_SELECT[$appraisalPeriode->status] ?? '' }}
                            </td>
                            <td>
                                {{ $appraisalPeriode->description ?? '' }}
                            </td>
                            <td>
                                @can('appraisal_periode_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.appraisal-periodes.show', $appraisalPeriode->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('appraisal_periode_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.appraisal-periodes.edit', $appraisalPeriode->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('appraisal_periode_delete')
                                    <form action="{{ route('admin.appraisal-periodes.destroy', $appraisalPeriode->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('appraisal_periode_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.appraisal-periodes.massDestroy') }}",
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
  let table = $('.datatable-AppraisalPeriode:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
