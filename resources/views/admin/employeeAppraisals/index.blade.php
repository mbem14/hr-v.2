@extends('layouts.admin')
@section('content')
@can('employee_appraisal_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.employee-appraisals.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.employeeAppraisal.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.employeeAppraisal.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-EmployeeAppraisal">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.employee') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.period') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.evaluator') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_6') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_7') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_9') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_10') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_11') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_13') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_15') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_16') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_17') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_18') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_19') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.pilih_20') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.target_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.target_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.target_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.target_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.target_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.reali_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.reali_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.reali_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.reali_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.reali_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.nilai_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.nilai_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.nilai_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.nilai_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.nilai_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeAppraisal.fields.status') }}
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
@can('employee_appraisal_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.employee-appraisals.massDestroy') }}",
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
    ajax: "{{ route('admin.employee-appraisals.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'employee_employee_number', name: 'employee.employee_number' },
{ data: 'period_name', name: 'period.name' },
{ data: 'evaluator_employee_number', name: 'evaluator.employee_number' },
{ data: 'pilih_1', name: 'pilih_1' },
{ data: 'pilih_2', name: 'pilih_2' },
{ data: 'pilih_3', name: 'pilih_3' },
{ data: 'pilih_4', name: 'pilih_4' },
{ data: 'pilih_5', name: 'pilih_5' },
{ data: 'pilih_6', name: 'pilih_6' },
{ data: 'pilih_7', name: 'pilih_7' },
{ data: 'pilih_8', name: 'pilih_8' },
{ data: 'pilih_9', name: 'pilih_9' },
{ data: 'pilih_10', name: 'pilih_10' },
{ data: 'pilih_11', name: 'pilih_11' },
{ data: 'pilih_12', name: 'pilih_12' },
{ data: 'pilih_13', name: 'pilih_13' },
{ data: 'pilih_14', name: 'pilih_14' },
{ data: 'pilih_15', name: 'pilih_15' },
{ data: 'pilih_16', name: 'pilih_16' },
{ data: 'pilih_17', name: 'pilih_17' },
{ data: 'pilih_18', name: 'pilih_18' },
{ data: 'pilih_19', name: 'pilih_19' },
{ data: 'pilih_20', name: 'pilih_20' },
{ data: 'target_1', name: 'target_1' },
{ data: 'target_2', name: 'target_2' },
{ data: 'target_3', name: 'target_3' },
{ data: 'target_4', name: 'target_4' },
{ data: 'target_5', name: 'target_5' },
{ data: 'reali_1', name: 'reali_1' },
{ data: 'reali_2', name: 'reali_2' },
{ data: 'reali_3', name: 'reali_3' },
{ data: 'reali_4', name: 'reali_4' },
{ data: 'reali_5', name: 'reali_5' },
{ data: 'nilai_1', name: 'nilai_1' },
{ data: 'nilai_2', name: 'nilai_2' },
{ data: 'nilai_3', name: 'nilai_3' },
{ data: 'nilai_4', name: 'nilai_4' },
{ data: 'nilai_5', name: 'nilai_5' },
{ data: 'status', name: 'status' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-EmployeeAppraisal').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection
