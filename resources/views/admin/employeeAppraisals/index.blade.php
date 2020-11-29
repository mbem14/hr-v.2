@extends('layouts.template')
@section('content')
<!-- Page Content -->
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">{{ trans('cruds.employeeAppraisal.title_singular') }} {{ trans('global.list') }}</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">{{ trans('cruds.employeeAppraisal.title_singular') }} {{ trans('global.list') }}</li>
                </ul>
            </div>
            @can('employee_appraisal_create')
            <div class="col-auto float-right ml-auto">
                <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_appraisal"><i class="fa fa-plus"></i> {{ trans('global.add') }} {{ trans('cruds.employeeAppraisal.title_singular') }}</a>
            </div>
            @endcan
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
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
    </div>
</div>

<!-- /Page Content -->
<!-- Add Performance Appraisal Modal -->
<div id="add_appraisal" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ trans('global.create') }} {{ trans('cruds.employeeAppraisal.title_singular') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route("admin.employee-appraisals.store") }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label required" for="employee_id">{{ trans('cruds.employeeAppraisal.fields.employee') }}</label>
                                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                                    @foreach($employees as $id => $employee)
                                    <option value="{{ $id }}" {{ old('employee_id') == $id ? 'selected' : '' }}>{{ $employee }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('employee'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('employee') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.employee_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="period_id">{{ trans('cruds.employeeAppraisal.fields.period') }}</label>
                                <select class="form-control select2 {{ $errors->has('period') ? 'is-invalid' : '' }}" name="period_id" id="period_id">
                                    @foreach($periods as $id => $period)
                                    <option value="{{ $id }}" {{ old('period_id') == $id ? 'selected' : '' }}>{{ $period }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('period'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('period') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.period_helper') }}</span>
                            </div>
                            
                            <div class="form-group">
                                <label class="required" for="evaluator_id">{{ trans('cruds.employeeAppraisal.fields.evaluator') }}</label>
                                <select class="form-control select2 {{ $errors->has('evaluator') ? 'is-invalid' : '' }}" name="evaluator_id" id="evaluator_id" required>
                                    @foreach($evaluators as $id => $evaluator)
                                    <option value="{{ $id }}" {{ old('evaluator_id') == $id ? 'selected' : '' }}>{{ $evaluator }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('evaluator'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('evaluator') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.evaluator_helper') }}</span>
                            </div>
                        </div>
                        <!--Ket Tata Nilai-->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div id="appr_technical" class="pro-overview tab-pane fade show active">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="bg-white">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="5">Aspek Tata Nilai</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">Pilihlah salah satu angka pada setiap dimensi kompetensi, yang mencerminkan hasil penilaian Anda terhadap karyawan bersangkutan/ yang anda nilai!</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">1. Sangat kurang dari yang diharapkan atau bila point tersebut belum ada dalam diri ybs</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">2. Kurang dari yang diharapkan atau bila ybs masih memerlukan perbaikan / pengembangan terkait point tersebut</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">3. Sesuai harapan atau bila pada point tersebut ybs sudah cukup dimiliki</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">4. Melebihi dari yang diharapkan atau bila pada point tersebut ybs telah menjadi suatu kelebihan dalam dirinya dibandingkan dengan orang - orang selevelnya</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">5. Sangat melebihi dari yang diharapkan atau bila pada point tersebut ybs telah menjadi role model (benchmark) bagi lingkup unitnya maupun diluar unitnya</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <h4 class="modal-sub-title align-middle">Indikator Negatif</h4>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h4 class middle="modal-sub-title align-middle">Peringkat dan nama dimensi</h4>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <h4 class="modal-sub-title align-middle">Indikator Positif</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Penilaian Tata Nilai -->
                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tampilan Kerja Tidak Sesuai Harapan</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Performance</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tampilan Kerja Tidak Sesuai Harapan</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak disiplin dan tidak menyelesaikan pekerjaan</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Professionalism</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Disiplin dan mampu menyelesaikan pekerjaan melebihi target</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Hasil kerja dibawah standar</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Excellence</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Hasil kerja diatas standar</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Mudah menyerah jika ada hambatan dalam pekerjaan</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Determination</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Mampu mengatasi hambatan dalam pekerjaan</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak efisiensi dalam bekerja dan cenderung boros, tidak perduli terhadap biaya</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Efficiency</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Efisiensi dalam bekerja, perduli terhadap biaya</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Sering mengeluh, tidak fokus pada kepuasan pelanggan</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Satisfaction</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Bersyukur dan berjiwa besar, fokus pada kepuasan pelanggan</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Lebih mendahulukan kepentingan pribadi dibanding perusahaan</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Loyalitas</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Mendahulukan kepentingan perusahaan dibanding kepentingan pribadi</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Pemenuhan kebutuhan konsumen hanya berdasarkan permintaan</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Orientasi pelayanan konsumen</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Fokus berusaha memenuhi kebutuhan konsumen melebihi harapan konsumen</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak pernah melakukan inovasi untuk perubahan lebih baik dalam penyelesaian pekerjaan</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Inovasi untuk kemajuan lebih baik</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Melakukan invoasi yang lebih baik dalam penyelesaian pekerjaan</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Bertindak secara subyektif</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Integritas & kredibilitas pribadi</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Bertindak sesuai fakta yang obyektif</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Kaku, tidak mampu beradaptasi dengan perubahan dalam mencapai tujuan kerja</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Fleksibilitas / adaptibilitas</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Fokus berusaha memenuhi kebutuhan konsumen melebihi harapan konsumen</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div id="appr_technical" class="pro-overview tab-pane fade show active">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="bg-white">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="5">Aspek Potensi</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">Pilihlah salah satu angka pada setiap dimensi kompetensi, yang mencerminkan hasil penilaian Anda terhadap karyawan bersangkutan/ yang anda nilai!</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">1. Bila aspek potensi tersebut belum dapat muncul dimasa mendatang</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">2. Bila aspek potensi tersebut dapat dimunculkan dengan bantuan pengembangan dalam skala mayor</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">3. Sesuai harapan atau bila pada point tersebut ybs sudah cukup dimiliki</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">4. Bila aspek potensi tersebut dapat dimunculkan dengan bantuan pengembangan dalam skala minor</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">5. Bila aspek potensi tersebut dapat dimunculkan pada masa mendatang tanpa bantuan pengembangan</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <h4 class="modal-sub-title align-middle">Indikator Negatif</h4>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h4 class middle="modal-sub-title align-middle">Peringkat dan nama dimensi</h4>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <h4 class="modal-sub-title align-middle">Indikator Positif</h4>
                                </div>
                            </div>
                        </div>

                        <!--Baris Pertama-->
                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak mampu berkomunikasi dengan baik</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Kemampuan berkomunikasi</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Mampu berkomunikasi dengan baik</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Lambat dan menunggu perintah dalam menghadapi permasalahan</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Responsif</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tanggap dalam menghadapi permasalahan</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak mampu mengatur waktu dalam menyelesaikan pekerjaan</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Kemampuan mengatur waktu</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Mampu mengatur waktu dalam menyelesaikan pekerjaan</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak memiliki kemampuan mempengaruhi pihak lain</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Kemampuan mempengaruhi orang lain</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Mampu mempengaruhi lain dalam hubungan saling menguntungkan</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak Mampu menganalisa dan menemukan solusi dari masalah</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Analisa & Penyelesaian Masalah</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Mampu menganalisa dan menemukan solusi dari masalah</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak ada keinginan meningkatkan kemampuan diri</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Kemauan Untuk Terus Belajar</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Komitmen meningkatkan kemampuan diri</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak Fokus pada pencapaian hasil kerja</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Orientasi pada Hasil Kerja</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Fokus pada pencapaian hasil kerja</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak mampu bekerja dalam tim</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Kerjasama Tim</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Mampu bekerja dalam tim</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak Percaya Diri dalam bertindak dan berpendapat</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Kepercayaan Diri</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container">
                                            <form>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">3
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">4
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">5
                                                </label>
                                            </form>
                                        </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Percaya Diri dalam bertindak dan berpendapat</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div id="appr_technical" class="pro-overview tab-pane fade show active">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="bg-white">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="5">Aspek Kinerja</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">Gradasi Penilaian (Kinerja)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">1. Bila final jauh tidak tercapai sesuai target kinerja</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">2. Bila final tidak tercapai sesuai target kinerja</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">3. TBA</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">4. Bila final sama dengan sesuai target kinerja</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">5. Bila final melampaui target kinerja serta menghasilkan hal baru (value creation)</th>
                                                                </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table id="datatable" class="table table-striped table-bordered">





                            <thead style="background-color: #fff1c8;">
                                <tr>
                                    <th style="text-align: center;width: 40%;">Kinerja (KPI)</th>
                                    <th colspan="4" style="text-align: center;width: 40%;">PENILAIAN (KPI)</th>
                                    <th rowspan="2" style="text-align: center;width: 20% !important;">NILAI</th>
                                </tr>
                                <tr>
                                    <th style="text-align: center;">Aspek Penilaian</th>
                                    <th style="text-align: center;">Uraian</th>
                                    <th style="text-align: center;">%</th>
                                    <th style="text-align: center;">Target</th>
                                    <th style="text-align: center;">Realisasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jumlah Pencapaian Program Kerja</td>
                                    <td>Jumlah Proker yang selesai dilaksanakan dibandingkan dengan target</td>
                                    <td><input style="background-color: #dcd7d7;" type="text" name="" class="persen1" onkeyup="hitung1();" value="30" readonly=""></td>
                                    <td><input type="number" name="target1" class="target1" onkeyup="hitung1();" width="100%"></td>
                                    <td><input type="number" name="reali1" class="reali1" onkeyup="hitung1();" width="100%"></td>
                                    <td align="center">
                                        <input type="radio" value="1" name="nilai1" onclick="hitungNilai(this.value)" required="">1
                                        <input type="radio" value="2" name="nilai1" onclick="hitungNilai(this.value)">2
                                        <input type="radio" value="3" name="nilai1" onclick="hitungNilai(this.value)" disabled="">3
                                        <input type="radio" value="4" name="nilai1" onclick="hitungNilai(this.value)">4
                                        <input type="radio" value="5" name="nilai1" onclick="hitungNilai(this.value)">5
                                        <!-- <input type="number" name="" class="nilai1" onkeyup="hitungNilai()"> -->
                                    </td>
                                    <td style="display: none;"><input type="text" class="total1" onkeyup="hitungTotal()" name="" width="100%"></td>
                                </tr>
                                <tr>
                                    <td>(%) Pemahaman terhadap tugas pokok</td>
                                    <td>Pemahaman serta pengetahuan yang dimiliki terkait tugas pokok</td>
                                    <td><input style="background-color: #dcd7d7;" type="text" name="" class="persen2" onkeyup="hitung2();" value="20" readonly=""></td>
                                    <td><input type="number" name="target2" class="target2" onkeyup="hitung2();" width="100%"></td>
                                    <td><input type="number" name="reali2" class="reali2" onkeyup="hitung2();" width="100%"></td>
                                    <td align="center">
                                        <input type="radio" value="1" name="nilai2" onclick="hitungNilai(this.value)" required="">1
                                        <input type="radio" value="2" name="nilai2" onclick="hitungNilai(this.value)">2
                                        <input type="radio" value="3" name="nilai2" onclick="hitungNilai(this.value)" disabled="">3
                                        <input type="radio" value="4" name="nilai2" onclick="hitungNilai(this.value)">4
                                        <input type="radio" value="5" name="nilai2" onclick="hitungNilai(this.value)">5
                                        <!-- <input type="number" name="" class="nilai2" onkeyup="hitungNilai()"> -->
                                    </td>
                                    <td style="display: none;"><input type="text" name="" class="total2" onkeyup="hitungTotal()" width="100%"></td>
                                </tr>
                                <tr>
                                    <td>(%) Kecepatan pengerjaan terhadap tugas</td>
                                    <td>Rata - rata waktu yang di butuhkan untuk menyelesaikan tugas - tugas yang
                                        diberikan</td>
                                    <td><input style="background-color: #dcd7d7;" type="text" name="" class="persen3" onkeyup="hitung3();" value="15" readonly=""></td>
                                    <td><input type="number" name="target3" class="target3" onkeyup="hitung3();" width="100%"></td>
                                    <td><input type="number" name="reali3" class="reali3" onkeyup="hitung3();" width="100%"></td>
                                    <td align="center">
                                        <input type="radio" value="1" name="nilai3" onclick="hitungNilai(this.value)" required="">1
                                        <input type="radio" value="2" name="nilai3" onclick="hitungNilai(this.value)">2
                                        <input type="radio" value="2" name="nilai3" onclick="hitungNilai(this.value)" disabled="">3
                                        <input type="radio" value="4" name="nilai3" onclick="hitungNilai(this.value)">4
                                        <input type="radio" value="5" name="nilai3" onclick="hitungNilai(this.value)">5
                                        <!-- <input type="number" name="" class="nilai3" onkeyup="hitungNilai()"> -->
                                    </td>
                                    <td style="display: none;"><input type="text" name="" class="total3" onkeyup="hitungTotal()" width="100%"></td>
                                </tr>
                                <tr>
                                    <td>(%) Akurasi / ketepatan pengerjaan tugas</td>
                                    <td>Ketelitian dan waktu yang dibutuhkan untuk menyelesaikan tugas - tugas yang
                                        diberikan</td>
                                    <td><input style="background-color: #dcd7d7;" type="text" name="" class="persen4" onkeyup="hitung4();" value="20" readonly=""></td>
                                    <td><input type="number" name="target4" class="target4" onkeyup="hitung4();" width="100%"></td>
                                    <td><input type="number" name="reali4" class="reali4" onkeyup="hitung4();" width="100%"></td>
                                    <td align="center">
                                        <input type="radio" value="1" name="nilai4" onclick="hitungNilai(this.value)" required="">1
                                        <input type="radio" value="2" name="nilai4" onclick="hitungNilai(this.value)">2
                                        <input type="radio" value="3" name="nilai4" onclick="hitungNilai(this.value)" disabled="">3
                                        <input type="radio" value="4" name="nilai4" onclick="hitungNilai(this.value)">4
                                        <input type="radio" value="5" name="nilai4" onclick="hitungNilai(this.value)">5
                                        <!-- <input type="number" name="" class="nilai4" onkeyup="hitungNilai()"> -->
                                    </td>
                                    <td style="display: none;"><input type="text" name="" class="total4" onkeyup="hitungTotal()" width="100%"></td>
                                </tr>
                                <tr>
                                    <td>(%) Konsistensi terhadap kualitas hasil kerja</td>
                                    <td>Produk / Output dari pekerjaan yang diselesaikan tidak pernah turun/buruk
                                    </td>
                                    <td><input style="background-color: #dcd7d7;" type="text" name="" class="persen5" onkeyup="hitung5();" value="15" readonly=""></td>
                                    <td><input type="number" name="target5" class="target5" onkeyup="hitung5();" width="100%"></td>
                                    <td><input type="number" name="reali5" class="reali5" onkeyup="hitung5();" width="100%"></td>
                                    <td align="center">
                                        <input type="radio" value="1" name="nilai5" onclick="hitungNilai(this.value)" required="">1
                                        <input type="radio" value="2" name="nilai5" onclick="hitungNilai(this.value)">2
                                        <input type="radio" value="3" name="nilai5" onclick="hitungNilai(this.value)" disabled="">3
                                        <input type="radio" value="4" name="nilai5" onclick="hitungNilai(this.value)">4
                                        <input type="radio" value="5" name="nilai5" onclick="hitungNilai(this.value)">5
                                        <!-- <input type="number" name="" class="nilai5" onkeyup="hitungNilai()"> -->
                                    </td>
                                    <td style="display: none;"><input type="text" name="" class="total5" onkeyup="hitungTotal()" width="100%"></td>
                                    <input type="hidden" name="total3" class="totalnilai">
                                    <input type="hidden" name="" class="totalrealisasi">

                                </tr>
                            </tbody>
                        </table>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Status</label>
                                <select class="select">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
    @section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('employee_appraisal_delete')
            let deleteButtonTrans = '{{ trans('
            global.datatables.delete ') }}';
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.employee-appraisals.massDestroy') }}",
                className: 'btn-danger',
                action: function(e, dt, node, config) {
                    var ids = $.map(dt.rows({
                        selected: true
                    }).data(), function(entry) {
                        return entry.id
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('
                            global.datatables.zero_selected ') }}')

                        return
                    }

                    if (confirm('{{ trans('
                            global.areYouSure ') }}')) {
                        $.ajax({
                                headers: {
                                    'x-csrf-token': _token
                                },
                                method: 'POST',
                                url: config.url,
                                data: {
                                    ids: ids,
                                    _method: 'DELETE'
                                }
                            })
                            .done(function() {
                                location.reload()
                            })
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
                columns: [{
                        data: 'placeholder',
                        name: 'placeholder'
                    },
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'employee_employee_number',
                        name: 'employee.employee_number'
                    },
                    {
                        data: 'period_name',
                        name: 'period.name'
                    },
                    {
                        data: 'evaluator_employee_number',
                        name: 'evaluator.employee_number'
                    },
                    {
                        data: 'pilih_1',
                        name: 'pilih_1'
                    },
                    {
                        data: 'pilih_2',
                        name: 'pilih_2'
                    },
                    {
                        data: 'pilih_3',
                        name: 'pilih_3'
                    },
                    {
                        data: 'pilih_4',
                        name: 'pilih_4'
                    },
                    {
                        data: 'pilih_5',
                        name: 'pilih_5'
                    },
                    {
                        data: 'pilih_6',
                        name: 'pilih_6'
                    },
                    {
                        data: 'pilih_7',
                        name: 'pilih_7'
                    },
                    {
                        data: 'pilih_8',
                        name: 'pilih_8'
                    },
                    {
                        data: 'pilih_9',
                        name: 'pilih_9'
                    },
                    {
                        data: 'pilih_10',
                        name: 'pilih_10'
                    },
                    {
                        data: 'pilih_11',
                        name: 'pilih_11'
                    },
                    {
                        data: 'pilih_12',
                        name: 'pilih_12'
                    },
                    {
                        data: 'pilih_13',
                        name: 'pilih_13'
                    },
                    {
                        data: 'pilih_14',
                        name: 'pilih_14'
                    },
                    {
                        data: 'pilih_15',
                        name: 'pilih_15'
                    },
                    {
                        data: 'pilih_16',
                        name: 'pilih_16'
                    },
                    {
                        data: 'pilih_17',
                        name: 'pilih_17'
                    },
                    {
                        data: 'pilih_18',
                        name: 'pilih_18'
                    },
                    {
                        data: 'pilih_19',
                        name: 'pilih_19'
                    },
                    {
                        data: 'pilih_20',
                        name: 'pilih_20'
                    },
                    {
                        data: 'target_1',
                        name: 'target_1'
                    },
                    {
                        data: 'target_2',
                        name: 'target_2'
                    },
                    {
                        data: 'target_3',
                        name: 'target_3'
                    },
                    {
                        data: 'target_4',
                        name: 'target_4'
                    },
                    {
                        data: 'target_5',
                        name: 'target_5'
                    },
                    {
                        data: 'reali_1',
                        name: 'reali_1'
                    },
                    {
                        data: 'reali_2',
                        name: 'reali_2'
                    },
                    {
                        data: 'reali_3',
                        name: 'reali_3'
                    },
                    {
                        data: 'reali_4',
                        name: 'reali_4'
                    },
                    {
                        data: 'reali_5',
                        name: 'reali_5'
                    },
                    {
                        data: 'nilai_1',
                        name: 'nilai_1'
                    },
                    {
                        data: 'nilai_2',
                        name: 'nilai_2'
                    },
                    {
                        data: 'nilai_3',
                        name: 'nilai_3'
                    },
                    {
                        data: 'nilai_4',
                        name: 'nilai_4'
                    },
                    {
                        data: 'nilai_5',
                        name: 'nilai_5'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'actions',
                        name: '{{ trans('
                        global.actions ') }}'
                    }
                ],
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            };
            let table = $('.datatable-EmployeeAppraisal').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        });
    </script>
    @endsection