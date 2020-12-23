@extends('layouts.admin')
@section('content')
@can('employee_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.employees.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.employee.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.employee.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Employee">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.employee_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.full_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.birthday') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.religion') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.gender') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.nationality') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.marital_status') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.blood_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.id_card') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.address_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.postal_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.home_phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.mobile_phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.job_title') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.joined_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.confirmation_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.number_decree') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.terminate_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.work_phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.work_email') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.private_email') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.department') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.supervisor') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.indirect_supervisors') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.indirect_supervisors2') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.status') }}
                    </th>
                    <th>
                        {{ trans('cruds.employee.fields.employment_status') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search" strict="true">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach(App\Models\Employee::RELIGION_SELECT as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search" strict="true">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach(App\Models\Employee::GENDER_SELECT as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($countries as $key => $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search" strict="true">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach(App\Models\Employee::MARITAL_STATUS_SELECT as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($job_titles as $key => $item)
                                <option value="{{ $item->code }}">{{ $item->code }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($company_structures as $key => $item)
                                <option value="{{ $item->title }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($employees as $key => $item)
                                <option value="{{ $item->full_name }}">{{ $item->full_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($employees2 as $key => $item)
                                <option value="{{ $item->full_name }}">{{ $item->full_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($employees3 as $key => $item)
                                <option value="{{ $item->full_name }}">{{ $item->full_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search" strict="true">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach(App\Models\Employee::STATUS_SELECT as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($employment_statuses as $key => $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                    </td>
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
@can('employee_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.employees.massDestroy') }}",
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
    ajax: "{{ route('admin.employees.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'employee_number', name: 'employee_number' },
{ data: 'full_name', name: 'full_name' },
{ data: 'birthday', name: 'birthday' },
{ data: 'religion', name: 'religion' },
{ data: 'gender', name: 'gender' },
{ data: 'nationality_name', name: 'nationality.name' },
{ data: 'marital_status', name: 'marital_status' },
{ data: 'blood_type', name: 'blood_type' },
{ data: 'id_card', name: 'id_card' },
{ data: 'address_1', name: 'address_1' },
{ data: 'postal_code', name: 'postal_code' },
{ data: 'home_phone', name: 'home_phone' },
{ data: 'mobile_phone', name: 'mobile_phone' },
{ data: 'job_title_code', name: 'job_title.code' },
{ data: 'joined_date', name: 'joined_date' },
{ data: 'confirmation_date', name: 'confirmation_date' },
{ data: 'number_decree', name: 'number_decree' },
{ data: 'terminate_date', name: 'terminate_date' },
{ data: 'work_phone', name: 'work_phone' },
{ data: 'work_email', name: 'work_email' },
{ data: 'private_email', name: 'private_email' },
{ data: 'department_title', name: 'department.title' },
{ data: 'supervisor_full_name', name: 'supervisor.full_name' },
{ data: 'indirect_supervisors_full_name', name: 'indirect_supervisors.full_name' },
{ data: 'indirect_supervisors2_full_name', name: 'indirect_supervisors2.full' },
{ data: 'status', name: 'status' },
{ data: 'employment_status_name', name: 'employment_status.name' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Employee').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  $('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value
      table
        .column($(this).parent().index())
        .search(value, strict)
        .draw()
  });
});

</script>
@endsection
