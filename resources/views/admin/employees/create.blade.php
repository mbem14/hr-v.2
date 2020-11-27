@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.employee.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employees.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="employee_number">{{ trans('cruds.employee.fields.employee_number') }}</label>
                <input class="form-control {{ $errors->has('employee_number') ? 'is-invalid' : '' }}" type="text" name="employee_number" id="employee_number" value="{{ old('employee_number', '') }}" required>
                @if($errors->has('employee_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.employee_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="first_name">{{ trans('cruds.employee.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}" required>
                @if($errors->has('first_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('first_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="middle_name">{{ trans('cruds.employee.fields.middle_name') }}</label>
                <input class="form-control {{ $errors->has('middle_name') ? 'is-invalid' : '' }}" type="text" name="middle_name" id="middle_name" value="{{ old('middle_name', '') }}">
                @if($errors->has('middle_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('middle_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.middle_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_name">{{ trans('cruds.employee.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}">
                @if($errors->has('last_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('last_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="front_title">{{ trans('cruds.employee.fields.front_title') }}</label>
                <input class="form-control {{ $errors->has('front_title') ? 'is-invalid' : '' }}" type="text" name="front_title" id="front_title" value="{{ old('front_title', '') }}">
                @if($errors->has('front_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('front_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.front_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="back_title">{{ trans('cruds.employee.fields.back_title') }}</label>
                <input class="form-control {{ $errors->has('back_title') ? 'is-invalid' : '' }}" type="text" name="back_title" id="back_title" value="{{ old('back_title', '') }}">
                @if($errors->has('back_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('back_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.back_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="birth_place">{{ trans('cruds.employee.fields.birth_place') }}</label>
                <input class="form-control {{ $errors->has('birth_place') ? 'is-invalid' : '' }}" type="text" name="birth_place" id="birth_place" value="{{ old('birth_place', '') }}" required>
                @if($errors->has('birth_place'))
                    <div class="invalid-feedback">
                        {{ $errors->first('birth_place') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.birth_place_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="birthday">{{ trans('cruds.employee.fields.birthday') }}</label>
                <input class="form-control date {{ $errors->has('birthday') ? 'is-invalid' : '' }}" type="text" name="birthday" id="birthday" value="{{ old('birthday') }}" required>
                @if($errors->has('birthday'))
                    <div class="invalid-feedback">
                        {{ $errors->first('birthday') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.birthday_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.employee.fields.religion') }}</label>
                <select class="form-control {{ $errors->has('religion') ? 'is-invalid' : '' }}" name="religion" id="religion" required>
                    <option value disabled {{ old('religion', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Employee::RELIGION_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('religion', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('religion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('religion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.religion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.employee.fields.gender') }}</label>
                <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender" id="gender" required>
                    <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Employee::GENDER_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('gender', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nationality_id">{{ trans('cruds.employee.fields.nationality') }}</label>
                <select class="form-control select2 {{ $errors->has('nationality') ? 'is-invalid' : '' }}" name="nationality_id" id="nationality_id">
                    @foreach($nationalities as $id => $nationality)
                        <option value="{{ $id }}" {{ old('nationality_id') == $id ? 'selected' : '' }}>{{ $nationality }}</option>
                    @endforeach
                </select>
                @if($errors->has('nationality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nationality') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.nationality_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.employee.fields.marital_status') }}</label>
                <select class="form-control {{ $errors->has('marital_status') ? 'is-invalid' : '' }}" name="marital_status" id="marital_status" required>
                    <option value disabled {{ old('marital_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Employee::MARITAL_STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('marital_status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('marital_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marital_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.marital_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="blood_type">{{ trans('cruds.employee.fields.blood_type') }}</label>
                <input class="form-control {{ $errors->has('blood_type') ? 'is-invalid' : '' }}" type="text" name="blood_type" id="blood_type" value="{{ old('blood_type', '') }}">
                @if($errors->has('blood_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('blood_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.blood_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="id_card">{{ trans('cruds.employee.fields.id_card') }}</label>
                <input class="form-control {{ $errors->has('id_card') ? 'is-invalid' : '' }}" type="text" name="id_card" id="id_card" value="{{ old('id_card', '') }}" required>
                @if($errors->has('id_card'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_card') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.id_card_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address_1">{{ trans('cruds.employee.fields.address_1') }}</label>
                <input class="form-control {{ $errors->has('address_1') ? 'is-invalid' : '' }}" type="text" name="address_1" id="address_1" value="{{ old('address_1', '') }}" required>
                @if($errors->has('address_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.address_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address_2">{{ trans('cruds.employee.fields.address_2') }}</label>
                <input class="form-control {{ $errors->has('address_2') ? 'is-invalid' : '' }}" type="text" name="address_2" id="address_2" value="{{ old('address_2', '') }}">
                @if($errors->has('address_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.address_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_id">{{ trans('cruds.employee.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id">
                    @foreach($countries as $id => $country)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $country }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="province_id">{{ trans('cruds.employee.fields.province') }}</label>
                <select class="form-control select2 {{ $errors->has('province') ? 'is-invalid' : '' }}" name="province_id" id="province_id" required>
                    @foreach($provinces as $id => $province)
                        <option value="{{ $id }}" {{ old('province_id') == $id ? 'selected' : '' }}>{{ $province }}</option>
                    @endforeach
                </select>
                @if($errors->has('province'))
                    <div class="invalid-feedback">
                        {{ $errors->first('province') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.province_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city">{{ trans('cruds.employee.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}">
                @if($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.employee.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="text" name="postal_code" id="postal_code" value="{{ old('postal_code', '') }}">
                @if($errors->has('postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="home_phone">{{ trans('cruds.employee.fields.home_phone') }}</label>
                <input class="form-control {{ $errors->has('home_phone') ? 'is-invalid' : '' }}" type="text" name="home_phone" id="home_phone" value="{{ old('home_phone', '') }}">
                @if($errors->has('home_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('home_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.home_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile_phone">{{ trans('cruds.employee.fields.mobile_phone') }}</label>
                <input class="form-control {{ $errors->has('mobile_phone') ? 'is-invalid' : '' }}" type="text" name="mobile_phone" id="mobile_phone" value="{{ old('mobile_phone', '') }}">
                @if($errors->has('mobile_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.mobile_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="job_title_id">{{ trans('cruds.employee.fields.job_title') }}</label>
                <select class="form-control select2 {{ $errors->has('job_title') ? 'is-invalid' : '' }}" name="job_title_id" id="job_title_id" required>
                    @foreach($job_titles as $id => $job_title)
                        <option value="{{ $id }}" {{ old('job_title_id') == $id ? 'selected' : '' }}>{{ $job_title }}</option>
                    @endforeach
                </select>
                @if($errors->has('job_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.job_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="joined_date">{{ trans('cruds.employee.fields.joined_date') }}</label>
                <input class="form-control date {{ $errors->has('joined_date') ? 'is-invalid' : '' }}" type="text" name="joined_date" id="joined_date" value="{{ old('joined_date') }}" required>
                @if($errors->has('joined_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('joined_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.joined_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="confirmation_date">{{ trans('cruds.employee.fields.confirmation_date') }}</label>
                <input class="form-control date {{ $errors->has('confirmation_date') ? 'is-invalid' : '' }}" type="text" name="confirmation_date" id="confirmation_date" value="{{ old('confirmation_date') }}">
                @if($errors->has('confirmation_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('confirmation_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.confirmation_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="number_decree">{{ trans('cruds.employee.fields.number_decree') }}</label>
                <input class="form-control {{ $errors->has('number_decree') ? 'is-invalid' : '' }}" type="text" name="number_decree" id="number_decree" value="{{ old('number_decree', '') }}">
                @if($errors->has('number_decree'))
                    <div class="invalid-feedback">
                        {{ $errors->first('number_decree') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.number_decree_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="terminate_date">{{ trans('cruds.employee.fields.terminate_date') }}</label>
                <input class="form-control date {{ $errors->has('terminate_date') ? 'is-invalid' : '' }}" type="text" name="terminate_date" id="terminate_date" value="{{ old('terminate_date') }}">
                @if($errors->has('terminate_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('terminate_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.terminate_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="work_phone">{{ trans('cruds.employee.fields.work_phone') }}</label>
                <input class="form-control {{ $errors->has('work_phone') ? 'is-invalid' : '' }}" type="text" name="work_phone" id="work_phone" value="{{ old('work_phone', '') }}" required>
                @if($errors->has('work_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('work_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.work_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="work_email">{{ trans('cruds.employee.fields.work_email') }}</label>
                <input class="form-control {{ $errors->has('work_email') ? 'is-invalid' : '' }}" type="email" name="work_email" id="work_email" value="{{ old('work_email') }}" required>
                @if($errors->has('work_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('work_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.work_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="private_email">{{ trans('cruds.employee.fields.private_email') }}</label>
                <input class="form-control {{ $errors->has('private_email') ? 'is-invalid' : '' }}" type="email" name="private_email" id="private_email" value="{{ old('private_email') }}" required>
                @if($errors->has('private_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('private_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.private_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="department_id">{{ trans('cruds.employee.fields.department') }}</label>
                <select class="form-control select2 {{ $errors->has('department') ? 'is-invalid' : '' }}" name="department_id" id="department_id">
                    @foreach($departments as $id => $department)
                        <option value="{{ $id }}" {{ old('department_id') == $id ? 'selected' : '' }}>{{ $department }}</option>
                    @endforeach
                </select>
                @if($errors->has('department'))
                    <div class="invalid-feedback">
                        {{ $errors->first('department') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.department_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="supervisor_id">{{ trans('cruds.employee.fields.supervisor') }}</label>
                <select class="form-control select2 {{ $errors->has('supervisor') ? 'is-invalid' : '' }}" name="supervisor_id" id="supervisor_id" required>
                    @foreach($supervisors as $id => $supervisor)
                        <option value="{{ $id }}" {{ old('supervisor_id') == $id ? 'selected' : '' }}>{{ $supervisor }}</option>
                    @endforeach
                </select>
                @if($errors->has('supervisor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('supervisor') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.supervisor_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="indirect_supervisors_id">{{ trans('cruds.employee.fields.indirect_supervisors') }}</label>
                <select class="form-control select2 {{ $errors->has('indirect_supervisors') ? 'is-invalid' : '' }}" name="indirect_supervisors_id" id="indirect_supervisors_id">
                    @foreach($indirect_supervisors as $id => $indirect_supervisors)
                        <option value="{{ $id }}" {{ old('indirect_supervisors_id') == $id ? 'selected' : '' }}>{{ $indirect_supervisors }}</option>
                    @endforeach
                </select>
                @if($errors->has('indirect_supervisors'))
                    <div class="invalid-feedback">
                        {{ $errors->first('indirect_supervisors') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.indirect_supervisors_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.employee.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Employee::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="employment_status_id">{{ trans('cruds.employee.fields.employment_status') }}</label>
                <select class="form-control select2 {{ $errors->has('employment_status') ? 'is-invalid' : '' }}" name="employment_status_id" id="employment_status_id" required>
                    @foreach($employment_statuses as $id => $employment_status)
                        <option value="{{ $id }}" {{ old('employment_status_id') == $id ? 'selected' : '' }}>{{ $employment_status }}</option>
                    @endforeach
                </select>
                @if($errors->has('employment_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employment_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.employment_status_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
