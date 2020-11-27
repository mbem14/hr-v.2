<?php

namespace App\Models;

use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class EmployeeAppraisal extends Model
{
    use SoftDeletes, MultiTenantModelTrait, Auditable, HasFactory;

    public $table = 'employee_appraisals';

    const STATUS_SELECT = [
        'Send'    => 'Send',
        'Approve' => 'Approve',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'employee_id',
        'period_id',
        'evaluator_id',
        'pilih_1',
        'pilih_2',
        'pilih_3',
        'pilih_4',
        'pilih_5',
        'pilih_6',
        'pilih_7',
        'pilih_8',
        'pilih_9',
        'pilih_10',
        'pilih_11',
        'pilih_12',
        'pilih_13',
        'pilih_14',
        'pilih_15',
        'pilih_16',
        'pilih_17',
        'pilih_18',
        'pilih_19',
        'pilih_20',
        'target_1',
        'target_2',
        'target_3',
        'target_4',
        'target_5',
        'reali_1',
        'reali_2',
        'reali_3',
        'reali_4',
        'reali_5',
        'nilai_1',
        'nilai_2',
        'nilai_3',
        'nilai_4',
        'nilai_5',
        'status',
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

    public function period()
    {
        return $this->belongsTo(AppraisalPeriode::class, 'period_id');
    }

    public function evaluator()
    {
        return $this->belongsTo(Employee::class, 'evaluator_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
