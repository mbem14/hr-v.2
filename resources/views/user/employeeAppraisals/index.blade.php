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
                <a href="#" class="btn add-btn" data-toggle="modal" data-target="#ajaxModel"><i class="fa fa-plus"></i> {{ trans('global.add') }} {{ trans('cruds.employeeAppraisal.title_singular') }}</a>
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
<!-- Performance Appraisal Modal -->
<div id="ajaxModel" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ trans('global.create') }} {{ trans('cruds.employeeAppraisal.title_singular') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route("user.employee-appraisals.store") }}" id="appraisalModal" enctype="multipart/form-data">
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
                                <select class="form-control select2 {{ $errors->has('period') ? 'is-invalid' : '' }}" name="period_id" id="period_id" required>
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
                                    <option value="{{ $id }}" {{ auth()->user()->employee_id == $id ? 'selected' : '' }}>{{ $evaluator }}</option>
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
                            <div class="col-sm-4 d-flex justify-content-center">
                                <div class="form-group">
                                    <h4 class middle="modal-sub-title align-middle">Peringkat dan nama dimensi</h4>
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
                                <label class="col-form-label d-flex justify-content-center">Performance</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_1') ? 'is-invalid' : '' }}" type="radio" name="pilih_1" id="pilih_1" value="1" {{ old('pilih_1') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_1') ? 'is-invalid' : '' }}" type="radio" name="pilih_1" id="pilih_1" value="2" {{ old('pilih_1') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_1') ? 'is-invalid' : '' }}" type="radio" name="pilih_1" id="pilih_1" value="3" {{ old('pilih_1') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_1') ? 'is-invalid' : '' }}" type="radio" name="pilih_1" id="pilih_1" value="4" {{ old('pilih_1') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_1') ? 'is-invalid' : '' }}" type="radio" name="pilih_1" id="pilih_1" value="5" {{ old('pilih_1') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_1'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_1') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_1_helper') }}</span>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tampilan Kerja Sesuai Harapan</label>
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
                                <label class="col-form-label d-flex justify-content-center">Professionalism</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_2') ? 'is-invalid' : '' }}" type="radio" name="pilih_2" id="pilih_2" value="1" {{ old('pilih_2') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_2') ? 'is-invalid' : '' }}" type="radio" name="pilih_2" id="pilih_2" value="2" {{ old('pilih_2') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_2') ? 'is-invalid' : '' }}" type="radio" name="pilih_2" id="pilih_2" value="3" {{ old('pilih_2') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_2') ? 'is-invalid' : '' }}" type="radio" name="pilih_2" id="pilih_2" value="4" {{ old('pilih_2') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_2') ? 'is-invalid' : '' }}" type="radio" name="pilih_2" id="pilih_2" value="5" {{ old('pilih_2') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_2'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_2') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_2_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Excellence</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_3') ? 'is-invalid' : '' }}" type="radio" name="pilih_3" id="pilih_3" value="1" {{ old('pilih_3') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_3') ? 'is-invalid' : '' }}" type="radio" name="pilih_3" id="pilih_3" value="2" {{ old('pilih_3') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_3') ? 'is-invalid' : '' }}" type="radio" name="pilih_3" id="pilih_3" value="3" {{ old('pilih_3') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_3') ? 'is-invalid' : '' }}" type="radio" name="pilih_3" id="pilih_3" value="4" {{ old('pilih_3') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_3') ? 'is-invalid' : '' }}" type="radio" name="pilih_3" id="pilih_3" value="5" {{ old('pilih_3') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_3'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_3') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_3_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Determination</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_4') ? 'is-invalid' : '' }}" type="radio" name="pilih_4" id="pilih_4" value="1" {{ old('pilih_4') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_4') ? 'is-invalid' : '' }}" type="radio" name="pilih_4" id="pilih_4" value="2" {{ old('pilih_4') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_4') ? 'is-invalid' : '' }}" type="radio" name="pilih_4" id="pilih_4" value="3" {{ old('pilih_4') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_4') ? 'is-invalid' : '' }}" type="radio" name="pilih_4" id="pilih_4" value="4" {{ old('pilih_4') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_4') ? 'is-invalid' : '' }}" type="radio" name="pilih_4" id="pilih_4" value="5" {{ old('pilih_4') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_4'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_4') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_4_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Efficiency</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_5') ? 'is-invalid' : '' }}" type="radio" name="pilih_5" id="pilih_5" value="1" {{ old('pilih_5') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_5') ? 'is-invalid' : '' }}" type="radio" name="pilih_5" id="pilih_5" value="2" {{ old('pilih_5') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_5') ? 'is-invalid' : '' }}" type="radio" name="pilih_5" id="pilih_5" value="3" {{ old('pilih_5') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_5') ? 'is-invalid' : '' }}" type="radio" name="pilih_5" id="pilih_5" value="4" {{ old('pilih_5') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_5') ? 'is-invalid' : '' }}" type="radio" name="pilih_5" id="pilih_5" value="5" {{ old('pilih_5') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_5'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_5') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_5_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Satisfaction</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_6') ? 'is-invalid' : '' }}" type="radio" name="pilih_6" id="pilih_6" value="1" {{ old('pilih_6') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_6') ? 'is-invalid' : '' }}" type="radio" name="pilih_6" id="pilih_6" value="2" {{ old('pilih_6') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_6') ? 'is-invalid' : '' }}" type="radio" name="pilih_6" id="pilih_6" value="3" {{ old('pilih_6') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_6') ? 'is-invalid' : '' }}" type="radio" name="pilih_6" id="pilih_6" value="4" {{ old('pilih_6') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_6') ? 'is-invalid' : '' }}" type="radio" name="pilih_6" id="pilih_6" value="5" {{ old('pilih_6') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_6'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_6') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_6_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Loyalitas</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_7') ? 'is-invalid' : '' }}" type="radio" name="pilih_7" id="pilih_7" value="1" {{ old('pilih_7') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_7') ? 'is-invalid' : '' }}" type="radio" name="pilih_7" id="pilih_7" value="2" {{ old('pilih_7') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_7') ? 'is-invalid' : '' }}" type="radio" name="pilih_7" id="pilih_7" value="3" {{ old('pilih_7') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_7') ? 'is-invalid' : '' }}" type="radio" name="pilih_7" id="pilih_7" value="4" {{ old('pilih_7') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_7') ? 'is-invalid' : '' }}" type="radio" name="pilih_7" id="pilih_7" value="5" {{ old('pilih_7') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_7'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_7') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_7_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Orientasi pelayanan konsumen</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_8') ? 'is-invalid' : '' }}" type="radio" name="pilih_8" id="pilih_8" value="1" {{ old('pilih_8') == "1" ? 'checked' : '' }} required>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_8') ? 'is-invalid' : '' }}" type="radio" name="pilih_8" id="pilih_8" value="2" {{ old('pilih_8') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_8') ? 'is-invalid' : '' }}" type="radio" name="pilih_8" id="pilih_8" value="3" {{ old('pilih_8') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_8') ? 'is-invalid' : '' }}" type="radio" name="pilih_8" id="pilih_8" value="4" {{ old('pilih_8') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_8') ? 'is-invalid' : '' }}" type="radio" name="pilih_8" id="pilih_8" value="5" {{ old('pilih_8') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_8'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_8') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_8_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Inovasi untuk kemajuan lebih baik</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_9') ? 'is-invalid' : '' }}" type="radio" name="pilih_9" id="pilih_9" value="1" {{ old('pilih_9') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_9') ? 'is-invalid' : '' }}" type="radio" name="pilih_9" id="pilih_9" value="2" {{ old('pilih_9') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_9') ? 'is-invalid' : '' }}" type="radio" name="pilih_9" id="pilih_9" value="3" {{ old('pilih_9') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_9') ? 'is-invalid' : '' }}" type="radio" name="pilih_9" id="pilih_9" value="4" {{ old('pilih_9') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_9') ? 'is-invalid' : '' }}" type="radio" name="pilih_9" id="pilih_9" value="5" {{ old('pilih_9') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_9'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_9') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_9_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Integritas & kredibilitas pribadi</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_10') ? 'is-invalid' : '' }}" type="radio" name="pilih_10" id="pilih_10" value="1" {{ old('pilih_10') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_10') ? 'is-invalid' : '' }}" type="radio" name="pilih_10" id="pilih_10" value="2" {{ old('pilih_10') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_10') ? 'is-invalid' : '' }}" type="radio" name="pilih_10" id="pilih_10" value="3" {{ old('pilih_10') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_10') ? 'is-invalid' : '' }}" type="radio" name="pilih_10" id="pilih_10" value="4" {{ old('pilih_10') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_10') ? 'is-invalid' : '' }}" type="radio" name="pilih_10" id="pilih_10" value="5" {{ old('pilih_10') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_10'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_10') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_10_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Fleksibilitas / adaptibilitas</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_11') ? 'is-invalid' : '' }}" type="radio" name="pilih_11" id="pilih_11" value="1" {{ old('pilih_11') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_11') ? 'is-invalid' : '' }}" type="radio" name="pilih_11" id="pilih_11" value="2" {{ old('pilih_11') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_11') ? 'is-invalid' : '' }}" type="radio" name="pilih_11" id="pilih_11" value="3" {{ old('pilih_11') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_11') ? 'is-invalid' : '' }}" type="radio" name="pilih_11" id="pilih_11" value="4" {{ old('pilih_11') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input tatanilai {{ $errors->has('pilih_11') ? 'is-invalid' : '' }}" type="radio" name="pilih_11" id="pilih_11" value="5" {{ old('pilih_11') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_11'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_11') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_11_helper') }}</span>
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
                                    <label class="col-form-label">Average (AVG)</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label d-flex justify-content-center"><input type="text" align="center" id="total1" name="total1"></label>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label"></label>
                                </div>
                            </div>
                        </div>
                        <!-- end Penilaian Tata Nilai -->
                        <!-- Penilaian Potensi -->
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

                                <div class="form-group d-flex justify-content-center">
                                    <h4 class middle="modal-sub-title align-middle">Peringkat dan nama dimensi</h4>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <h4 class="modal-sub-title align-middle">Indikator Positif</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Tidak mampu berkomunikasi dengan baik</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label d-flex justify-content-center">Kemampuan berkomunikasi</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_12') ? 'is-invalid' : '' }}" type="radio" name="pilih_12" id="pilih_12" value="1" {{ old('pilih_12') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_12') ? 'is-invalid' : '' }}" type="radio" name="pilih_12" id="pilih_12" value="2" {{ old('pilih_12') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_12') ? 'is-invalid' : '' }}" type="radio" name="pilih_12" id="pilih_12" value="3" {{ old('pilih_12') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_12') ? 'is-invalid' : '' }}" type="radio" name="pilih_12" id="pilih_12" value="4" {{ old('pilih_12') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_12') ? 'is-invalid' : '' }}" type="radio" name="pilih_12" id="pilih_12" value="5" {{ old('pilih_12') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_12'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_12') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_12_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Responsif</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_13') ? 'is-invalid' : '' }}" type="radio" name="pilih_13" id="pilih_13" value="1" {{ old('pilih_13') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_13') ? 'is-invalid' : '' }}" type="radio" name="pilih_13" id="pilih_13" value="2" {{ old('pilih_13') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_13') ? 'is-invalid' : '' }}" type="radio" name="pilih_13" id="pilih_13" value="3" {{ old('pilih_13') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_13') ? 'is-invalid' : '' }}" type="radio" name="pilih_13" id="pilih_13" value="4" {{ old('pilih_13') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_13') ? 'is-invalid' : '' }}" type="radio" name="pilih_13" id="pilih_13" value="5" {{ old('pilih_13') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_13'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_13') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_13_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Kemampuan mengatur waktu</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_14') ? 'is-invalid' : '' }}" type="radio" name="pilih_14" id="pilih_14" value="1" {{ old('pilih_14') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_14') ? 'is-invalid' : '' }}" type="radio" name="pilih_14" id="pilih_14" value="2" {{ old('pilih_14') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_14') ? 'is-invalid' : '' }}" type="radio" name="pilih_14" id="pilih_14" value="3" {{ old('pilih_14') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_14') ? 'is-invalid' : '' }}" type="radio" name="pilih_14" id="pilih_14" value="4" {{ old('pilih_14') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_14') ? 'is-invalid' : '' }}" type="radio" name="pilih_14" id="pilih_14" value="5" {{ old('pilih_14') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_14'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_14') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_14_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Kemampuan mempengaruhi orang lain</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_15') ? 'is-invalid' : '' }}" type="radio" name="pilih_15" id="pilih_15" value="1" {{ old('pilih_15') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_15') ? 'is-invalid' : '' }}" type="radio" name="pilih_15" id="pilih_15" value="2" {{ old('pilih_15') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_15') ? 'is-invalid' : '' }}" type="radio" name="pilih_15" id="pilih_15" value="3" {{ old('pilih_15') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_15') ? 'is-invalid' : '' }}" type="radio" name="pilih_15" id="pilih_15" value="4" {{ old('pilih_15') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_15') ? 'is-invalid' : '' }}" type="radio" name="pilih_15" id="pilih_15" value="5" {{ old('pilih_15') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_15'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_15') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_15_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Analisa & Penyelesaian Masalah</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_16') ? 'is-invalid' : '' }}" type="radio" name="pilih_16" id="pilih_16" value="1" {{ old('pilih_16') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_16') ? 'is-invalid' : '' }}" type="radio" name="pilih_16" id="pilih_16" value="2" {{ old('pilih_16') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_16') ? 'is-invalid' : '' }}" type="radio" name="pilih_16" id="pilih_16" value="3" {{ old('pilih_16') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_16') ? 'is-invalid' : '' }}" type="radio" name="pilih_16" id="pilih_16" value="4" {{ old('pilih_16') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_16') ? 'is-invalid' : '' }}" type="radio" name="pilih_16" id="pilih_16" value="5" {{ old('pilih_16') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_16'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_16') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_16_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Kemauan Untuk Terus Belajar</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_17') ? 'is-invalid' : '' }}" type="radio" name="pilih_17" id="pilih_17" value="1" {{ old('pilih_17') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_17') ? 'is-invalid' : '' }}" type="radio" name="pilih_17" id="pilih_17" value="2" {{ old('pilih_17') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_17') ? 'is-invalid' : '' }}" type="radio" name="pilih_17" id="pilih_17" value="3" {{ old('pilih_17') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_17') ? 'is-invalid' : '' }}" type="radio" name="pilih_17" id="pilih_17" value="4" {{ old('pilih_17') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_17') ? 'is-invalid' : '' }}" type="radio" name="pilih_17" id="pilih_17" value="5" {{ old('pilih_17') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_17'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_17') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_17_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Orientasi pada Hasil Kerja</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_18') ? 'is-invalid' : '' }}" type="radio" name="pilih_18" id="pilih_18" value="1" {{ old('pilih_18') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_18') ? 'is-invalid' : '' }}" type="radio" name="pilih_18" id="pilih_18" value="2" {{ old('pilih_18') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_18') ? 'is-invalid' : '' }}" type="radio" name="pilih_18" id="pilih_18" value="3" {{ old('pilih_18') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_18') ? 'is-invalid' : '' }}" type="radio" name="pilih_18" id="pilih_18" value="4" {{ old('pilih_18') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_18') ? 'is-invalid' : '' }}" type="radio" name="pilih_18" id="pilih_18" value="5" {{ old('pilih_18') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_18'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_18') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_18_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Kerjasama Tim</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_19') ? 'is-invalid' : '' }}" type="radio" name="pilih_19" id="pilih_19" value="1" {{ old('pilih_19') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_19') ? 'is-invalid' : '' }}" type="radio" name="pilih_19" id="pilih_19" value="2" {{ old('pilih_19') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_19') ? 'is-invalid' : '' }}" type="radio" name="pilih_19" id="pilih_19" value="3" {{ old('pilih_19') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_19') ? 'is-invalid' : '' }}" type="radio" name="pilih_19" id="pilih_19" value="4" {{ old('pilih_19') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_19') ? 'is-invalid' : '' }}" type="radio" name="pilih_19" id="pilih_19" value="5" {{ old('pilih_19') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_19'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_19') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_19_helper') }}</span>
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
                                <label class="col-form-label d-flex justify-content-center">Kepercayaan Diri</label>
                                <div class="form-group">
                                    <td colspan="2">
                                        <div class="container d-flex justify-content-center">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_20') ? 'is-invalid' : '' }}" type="radio" name="pilih_20" id="pilih_20" value="1" {{ old('pilih_20') == "1" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_20') ? 'is-invalid' : '' }}" type="radio" name="pilih_20" id="pilih_20" value="2" {{ old('pilih_20') == "2" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_20') ? 'is-invalid' : '' }}" type="radio" name="pilih_20" id="pilih_20" value="3" {{ old('pilih_20') == "3" ? 'checked' : '' }} disabled>
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_20') ? 'is-invalid' : '' }}" type="radio" name="pilih_20" id="pilih_20" value="4" {{ old('pilih_20') == "4" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input potensi {{ $errors->has('pilih_20') ? 'is-invalid' : '' }}" type="radio" name="pilih_20" id="pilih_20" value="5" {{ old('pilih_20') == "5" ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            
                                        </div>
                                        @if($errors->has('pilih_20'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pilih_20') }}
                                        </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.employeeAppraisal.fields.pilih_20_helper') }}</span>
                                    </td>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Percaya Diri dalam bertindak dan berpendapat</label>
                                </div>
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Average (AVG)</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label d-flex justify-content-center"><input type="text" align="center" id="total2" name="total2"></label>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label"></label>
                                </div>
                            </div>
                        </div>
                        <!-- Penilaian Potensi -->

                        <!-- Penilaian Kinerja -->
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

                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead style="background-color: #fff1c8;">
                                <tr>
                                    <th style="text-align: center;width: 40%;">Kinerja (KPI)</th>
                                    <th colspan="4" style="text-align: center;width: 40%;">PENILAIAN (KPI)</th>
                                    <th rowspan="2" style="text-align: center;width: 20% !important;">NILAI</th>
                                </tr>
                                <tr>
                                    <th style="text-align: center;" class="col-md-2">Aspek Penilaian</th>
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
                                    <td><input style="background-color: #dcd7d7;" type="text" name="" class="persen_1" oninput="hitung1();" value="30" readonly=""></td>
                                    <td><input type="number" name="target_1" class="target_1" oninput="hitung1();" width="100%"></td>
                                    <td><input type="number" name="reali_1" class="reali_1" oninput="hitung1();" width="100%"></td>
                                    <td align="center">
                                        <input type="radio" value="1" name="nilai_1" onclick="hitungNilai(this.value)" required="">1
                                        <input type="radio" value="2" name="nilai_1" onclick="hitungNilai(this.value)">2
                                        <input type="radio" value="3" name="nilai_1" onclick="hitungNilai(this.value)" disabled="">3
                                        <input type="radio" value="4" name="nilai_1" onclick="hitungNilai(this.value)">4
                                        <input type="radio" value="5" name="nilai_1" onclick="hitungNilai(this.value)">5
                                    </td>
                                    <td style="display:none;"><input type="text" class="totalkinerja_1" oninput="hitungTotal()" name="" width="100%"></td>
                                </tr>
                                <tr>
                                    <td>(%) Pemahaman terhadap tugas pokok</td>
                                    <td>Pemahaman serta pengetahuan yang dimiliki terkait tugas pokok</td>
                                    <td><input style="background-color: #dcd7d7;" type="text" name="" class="persen_2" oninput="hitung2();" value="20" readonly=""></td>
                                    <td><input type="number" name="target_2" class="target_2" oninput="hitung2();" width="100%"></td>
                                    <td><input type="number" name="reali_2" class="reali_2" oninput="hitung2();" width="100%"></td>
                                    <td align="center">
                                        <input type="radio" value="1" name="nilai_2" onclick="hitungNilai(this.value)" required="">1
                                        <input type="radio" value="2" name="nilai_2" onclick="hitungNilai(this.value)">2
                                        <input type="radio" value="3" name="nilai_2" onclick="hitungNilai(this.value)" disabled="">3
                                        <input type="radio" value="4" name="nilai_2" onclick="hitungNilai(this.value)">4
                                        <input type="radio" value="5" name="nilai_2" onclick="hitungNilai(this.value)">5
                                    </td>
                                    <td style="display:none;"><input type="text" name="" class="totalkinerja_2" oninput="hitungTotal()" width="100%"></td>
                                </tr>
                                <tr>
                                    <td>(%) Kecepatan pengerjaan terhadap tugas</td>
                                    <td>Rata - rata waktu yang di butuhkan untuk menyelesaikan tugas - tugas yang
                                        diberikan</td>
                                    <td><input style="background-color: #dcd7d7;" type="text" name="" class="persen_3" oninput="hitung3();" value="15" readonly=""></td>
                                    <td><input type="number" name="target_3" class="target_3" oninput="hitung3();" width="100%"></td>
                                    <td><input type="number" name="reali_3" class="reali_3" oninput="hitung3();" width="100%"></td>
                                    <td align="center">
                                        <input type="radio" value="1" name="nilai_3" onclick="hitungNilai(this.value)" required="">1
                                        <input type="radio" value="2" name="nilai_3" onclick="hitungNilai(this.value)">2
                                        <input type="radio" value="2" name="nilai_3" onclick="hitungNilai(this.value)" disabled="">3
                                        <input type="radio" value="4" name="nilai_3" onclick="hitungNilai(this.value)">4
                                        <input type="radio" value="5" name="nilai_3" onclick="hitungNilai(this.value)">5
                                    </td>
                                    <td style="display:none;"><input type="text" name="" class="totalkinerja_3" oninput="hitungTotal()" width="100%"></td>
                                </tr>
                                <tr>
                                    <td>(%) Akurasi / ketepatan pengerjaan tugas</td>
                                    <td>Ketelitian dan waktu yang dibutuhkan untuk menyelesaikan tugas - tugas yang
                                        diberikan</td>
                                    <td><input style="background-color: #dcd7d7;" type="text" name="" class="persen_4" oninput="hitung4();" value="20" readonly=""></td>
                                    <td><input type="number" name="target_4" class="target_4" oninput="hitung4();" width="100%"></td>
                                    <td><input type="number" name="reali_4" class="reali_4" oninput="hitung4();" width="100%"></td>
                                    <td align="center">
                                        <input type="radio" value="1" name="nilai_4" onclick="hitungNilai(this.value)" required="">1
                                        <input type="radio" value="2" name="nilai_4" onclick="hitungNilai(this.value)">2
                                        <input type="radio" value="3" name="nilai_4" onclick="hitungNilai(this.value)" disabled="">3
                                        <input type="radio" value="4" name="nilai_4" onclick="hitungNilai(this.value)">4
                                        <input type="radio" value="5" name="nilai_4" onclick="hitungNilai(this.value)">5
                                        <!-- <input type="number" name="" class="nilai_4" oninput="hitungNilai()"> -->
                                    </td>
                                    <td style="display:none;"><input type="text" name="" class="totalkinerja_4" oninput="hitungTotal()" width="100%"></td>
                                </tr>
                                <tr>
                                    <td>(%) Konsistensi terhadap kualitas hasil kerja</td>
                                    <td>Produk / Output dari pekerjaan yang diselesaikan tidak pernah turun/buruk
                                    </td>
                                    <td><input style="background-color: #dcd7d7;" type="text" name="" class="persen_5" oninput="hitung5();" value="15" readonly=""></td>
                                    <td><input type="number" name="target_5" class="target_5" oninput="hitung5();" width="100%"></td>
                                    <td><input type="number" name="reali_5" class="reali_5" oninput="hitung5();" width="100%"></td>
                                    <td align="center">
                                        <input type="radio" value="1" name="nilai_5" onclick="hitungNilai(this.value)" required="">1
                                        <input type="radio" value="2" name="nilai_5" onclick="hitungNilai(this.value)">2
                                        <input type="radio" value="3" name="nilai_5" onclick="hitungNilai(this.value)" disabled="">3
                                        <input type="radio" value="4" name="nilai_5" onclick="hitungNilai(this.value)">4
                                        <input type="radio" value="5" name="nilai_5" onclick="hitungNilai(this.value)">5
                                        <!-- <input type="number" name="" class="nilai5" oninput="hitungNilai()"> -->
                                    </td>
                                    <td style="display:none;"><input type="text" name="" class="totalkinerja_5" oninput="hitungTotal()" width="100%"></td>
                                    <input type="text" name="total3" class="totalnilai">
                                    <input type="text" name="" class="totalrealisasi">

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
                        <!-- end Penilaian Kinerja-->
                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                    </div>
                </form>  
            </div>
        </div>
    </div>
</div>
    @endsection
    @section('scripts')
    @parent
    <script>
            function calcscore() {
                var score = 0;
                //var n = score.toFixed(2);
                $(".tatanilai:checked").each(function() {
                    //score+=parseInt($(this).val(),10);
                    score += parseFloat($(this).val(), 10);
                });
                $("input[name=total1]").val(score)
            }
            $(".tatanilai").change(function() {
                calcscore()
            });
            function calcscore2() {
                var score = 0;
                //var n = score.toFixed(2);
                $(".potensi:checked").each(function() {
                    //score+=parseInt($(this).val(),10);
                    score += parseFloat($(this).val(), 10);
                });
                $("input[name=total2]").val(score)
            }
            $(".potensi").change(function() {
                calcscore2()
            });
            
            
            function hitung1() {
                var a = $(".target_1").val();
                var b = $(".reali_1").val();
                var c = $(".persen_1").val();
                d = (b / a) * c; //a kali b
                $(".totalkinerja_1").val(d);
                hitungTotal();
            }

            function hitung2() {
                var a = $(".target_2").val();
                var b = $(".reali_2").val();
                var c = $(".persen_2").val();
                d = (b / a) * c; //a kali b
                $(".totalkinerja_2").val(d);
                hitungTotal();
            }

            function hitung3() {
                var a = $(".target_3").val();
                var b = $(".reali_3").val();
                var c = $(".persen_3").val();
                d = (b / a) * c; //a kali b
                $(".totalkinerja_3").val(d);
                hitungTotal();
            }

            function hitung4() {
                var a = $(".target_4").val();
                var b = $(".reali_4").val();
                var c = $(".persen_4").val();
                d = (b / a) * c; //a kali b
                $(".totalkinerja_4").val(d);
                hitungTotal();
            }

            function hitung5() {
                var a = $(".target_5").val();
                var b = $(".reali_5").val();
                var c = $(".persen_5").val();
                d = (b / a) * c; //a kali b
                $(".totalkinerja_5").val(d);
                hitungTotal();
            }

            function hitungTotal() {
                var a = parseInt($(".totalkinerja_1").val());
                var b = parseInt($(".totalkinerja_2").val());
                var c = parseInt($(".totalkinerja_3").val());
                var d = parseInt($(".totalkinerja_4").val());
                var e = parseInt($(".totalkinerja_5").val());
                f = a + b + c + d + e;
                $(".totalrealisasi").val(f);
            }

            function hitungNilai() {
                var a = $('input[name="nilai_1"]:checked').val();
                // var a = parseInt($(".nilai1").val());
                var b = $('input[name="nilai_2"]:checked').val();
                var c = $('input[name="nilai_3"]:checked').val();
                var d = $('input[name="nilai_4"]:checked').val();
                var e = $('input[name="nilai_5"]:checked').val();
                var f = parseInt($(".persen_1").val());
                var g = parseInt($(".persen_2").val());
                var h = parseInt($(".persen_3").val());
                var i = parseInt($(".persen_4").val());
                var j = parseInt($(".persen_5").val());
                k = ((a * f / 100) + (b * g / 100) + (c * h / 100) + (d * i / 100) + (e * j / 100)) * 10;
                $(".totalnilai").val(k);
            }
        
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('employee_appraisal_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
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
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
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
                        name: '{{ trans('global.actions') }}'
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

            // $('#appraisalModal').click(function () {

            //     $('#saveBtn').val("create-appraisal");

            //     $('#appraisal_id').val('');

            //     $('#appraisalModal').trigger("reset");

            //     $('#modelHeading').html("Create New Appraisal");

            //     $('#ajaxModel').modal('show');

            // });
            $('#saveBtn').click(function (e) {

                e.preventDefault();

                $(this).html('Sending..');



                $.ajax({

                data: $('#appraisalModal').serialize(),

                url: "{{ route('user.employee-appraisals.store') }}",

                type: "POST",

                dataType: 'json',

                success: function (data) {



                    $('#appraisalModal').trigger("reset");

                    $('#ajaxModel').modal('hide');

                    table.draw();

                

                },

                error: function (data) {

                    console.log('Error:', data);

                    $('#saveBtn').html('Save Changes');

                }

                });

            });
            

        });

        
    </script>
    @endsection