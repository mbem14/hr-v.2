<?php

namespace App\Models;

use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class EmployeeLanguage extends Model
{
    use SoftDeletes, MultiTenantModelTrait, Auditable, HasFactory;

    public $table = 'employee_languages';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'employee_id',
        'languages_id',
        'reading',
        'speaking',
        'writing',
        'listening',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    const READING_SELECT = [
        'Elementary Proficiency'           => 'Elementary Proficiency',
        'Limited Working Proficiency'      => 'Limited Working Proficiency',
        'Professional Working Proficiency' => 'Professional Working Proficiency',
        'Full Professional Proficiency'    => 'Full Professional Proficiency',
        'Native or Bilingual Proficiency'  => 'Native or Bilingual Proficiency',
    ];

    const WRITING_SELECT = [
        'Elementary Proficiency'           => 'Elementary Proficiency',
        'Limited Working Proficiency'      => 'Limited Working Proficiency',
        'Professional Working Proficiency' => 'Professional Working Proficiency',
        'Full Professional Proficiency'    => 'Full Professional Proficiency',
        'Native or Bilingual Proficiency'  => 'Native or Bilingual Proficiency',
    ];

    const SPEAKING_SELECT = [
        'Elementary Proficiency'           => 'Elementary Proficiency',
        'Limited Working Proficiency'      => 'Limited Working Proficiency',
        'Professional Working Proficiency' => 'Professional Working Proficiency',
        'Full Professional Proficiency'    => 'Full Professional Proficiency',
        'Native or Bilingual Proficiency'  => 'Native or Bilingual Proficiency',
    ];

    const LISTENING_SELECT = [
        'Elementary Proficiency'           => 'Elementary Proficiency',
        'Limited Working Proficiency'      => 'Limited Working Proficiency',
        'Professional Working Proficiency' => 'Professional Working Proficiency',
        'Full Professional Proficiency'    => 'Full Professional Proficiency',
        'Native or Bilingual Proficiency'  => 'Native or Bilingual Proficiency',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function languages()
    {
        return $this->belongsTo(Language::class, 'languages_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
