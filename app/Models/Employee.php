<?php

namespace App\Models;

use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Employee extends Model
{
    use SoftDeletes, MultiTenantModelTrait, Auditable, HasFactory;

    public $table = 'employees';

    const GENDER_SELECT = [
        'Male'   => 'Male',
        'Female' => 'Female',
    ];

    const STATUS_SELECT = [
        'Active'     => 'Active',
        'Terminated' => 'Terminated',
    ];

    protected $dates = [
        'birthday',
        'joined_date',
        'confirmation_date',
        'terminate_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const MARITAL_STATUS_SELECT = [
        'Married'  => 'Married',
        'Single'   => 'Single',
        'Divorced' => 'Divorced',
        'Widowed'  => 'Widowed',
        'Other'    => 'Other',
    ];

    const RELIGION_SELECT = [
        'Islam'     => 'Islam',
        'Protestan' => 'Protestan',
        'Katolik'   => 'Katolik',
        'Hindu'     => 'Hindu',
        'Buddha'    => 'Buddha',
        'Khonghucu' => 'Khonghucu',
    ];

    protected $fillable = [
        'employee_number',
        'first_name',
        'middle_name',
        'last_name',
        'front_title',
        'back_title',
        'birth_place',
        'birthday',
        'religion',
        'gender',
        'nationality_id',
        'marital_status',
        'blood_type',
        'id_card',
        'address_1',
        'address_2',
        'country_id',
        'province_id',
        'city',
        'postal_code',
        'home_phone',
        'mobile_phone',
        'job_title_id',
        'joined_date',
        'confirmation_date',
        'number_decree',
        'terminate_date',
        'work_phone',
        'work_email',
        'private_email',
        'department_id',
        'supervisor_id',
        'indirect_supervisors_id',
        'status',
        'created_at',
        'employment_status_id',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getBirthdayAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setBirthdayAttribute($value)
    {
        $this->attributes['birthday'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function nationality()
    {
        return $this->belongsTo(Country::class, 'nationality_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function job_title()
    {
        return $this->belongsTo(JobTitle::class, 'job_title_id');
    }

    public function getJoinedDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setJoinedDateAttribute($value)
    {
        $this->attributes['joined_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getConfirmationDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setConfirmationDateAttribute($value)
    {
        $this->attributes['confirmation_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getTerminateDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setTerminateDateAttribute($value)
    {
        $this->attributes['terminate_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function department()
    {
        return $this->belongsTo(CompanyStructure::class, 'department_id');
    }

    public function supervisor()
    {
        return $this->belongsTo(Employee::class, 'supervisor_id');
    }

    public function indirect_supervisors()
    {
        return $this->belongsTo(Employee::class, 'indirect_supervisors_id');
    }

    public function employment_status()
    {
        return $this->belongsTo(EmploymentStatus::class, 'employment_status_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
