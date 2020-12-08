<?php

namespace App\Models;

use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class EmergencyContact extends Model
{
    use SoftDeletes, MultiTenantModelTrait, Auditable, HasFactory;

    public $table = 'emergency_contacts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'employee_id',
        'name',
        'relationship',
        'home_phone',
        'mobile_phone',
        'created_at',
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

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
