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

    public function getTataNilaiAttribute()
    {
       return $this->pilih_1 + $this->pilih_2 + $this->pilih_3 + $this->pilih_4 + $this->pilih_5 + $this->pilih_6 + $this->pilih_7 + $this->pilih_8 + $this->pilih_9 + $this->pilih_10 + $this->pilih_11 ;
    }

    public function getPotensiAttribute()
    {
       return $this->pilih_12 + $this->pilih_13 + $this->pilih_14 + $this->pilih_15 + $this->pilih_16 + $this->pilih_17 + $this->pilih_18 + $this->pilih_19 + $this->pilih_20 ;
    }

    public function getKinerjaAttribute()
    {
       return $this->nilai_1 + $this->nilai_2 + $this->nilai_3 + $this->nilai_4 + $this->nilai_5 ;
    }
    public function getXaxisAttribute(){
        return $this->potensi;
    }
    public function getYaxisAttribute(){
        return (70/100 * $this->kinerja) + (30/100 * $this->tata_nilai);
    }
    public function getMappingAttribute(){
        $a = $this->yaxis;
        $b = $this->xaxis;
        if ($a>9 && $a<24 AND $b>9 && $b<24)  {
            $sta="G";
        }
        elseif ($a>=24 && $a<38 AND $b>9 && $b<24) {
            $sta="F";
        }
        elseif ($a>=38 AND $b>9 && $b<24) {
            $sta="E";
        }
        elseif ($a>9 && $a<24 AND $b>=24 && $b<38)  {
            $sta="F";
        }
        elseif ($a>=24 && $a<38 AND $b>=24 && $b<38) {
            $sta="C";
        }
        elseif ($a>=38 AND $b>=24 && $b<38) {
            $sta="B";
        }
        elseif ($a>9 && $a<24 AND $b>=38)  {
            $sta="D";
        }
        elseif ($a>=24 && $a<38 AND $b>=38) {
            $sta="B";
        }
        elseif ($a>=38 AND $b>=38) {
            $sta="A ";
        }

        return $sta;
    }
    
}
