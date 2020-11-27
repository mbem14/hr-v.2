<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class LeaveStartingBalance extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'leave_starting_balances';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'leave_type_id',
        'employee_id',
        'leave_period_id',
        'amount',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function leave_type()
    {
        return $this->belongsTo(LeaveType::class, 'leave_type_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function leave_period()
    {
        return $this->belongsTo(LeavePeriod::class, 'leave_period_id');
    }
}
