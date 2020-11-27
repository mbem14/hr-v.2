<?php

namespace App\Models;

use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class LeaveManagement extends Model
{
    use SoftDeletes, MultiTenantModelTrait, Auditable, HasFactory;

    public $table = 'leave_managements';

    protected $dates = [
        'date_start',
        'end_start',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_SELECT = [
        'Approved'               => 'Approved',
        'Pending'                => 'Pending',
        'Rejected'               => 'Rejected',
        'Cancellation Requested' => 'Cancellation Requested',
    ];

    protected $fillable = [
        'employee_id',
        'date_start',
        'end_start',
        'details',
        'status',
        'created_at',
        'leave_type_id',
        'leave_periode_id',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function getDateStartAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateStartAttribute($value)
    {
        $this->attributes['date_start'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEndStartAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEndStartAttribute($value)
    {
        $this->attributes['end_start'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function leave_type()
    {
        return $this->belongsTo(LeaveType::class, 'leave_type_id');
    }

    public function leave_periode()
    {
        return $this->belongsTo(LeavePeriod::class, 'leave_periode_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
