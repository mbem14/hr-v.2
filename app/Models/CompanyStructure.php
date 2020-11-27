<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class CompanyStructure extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'company_structures';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'description',
        'type',
        'parent_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const TYPE_SELECT = [
        'Head Office' => 'Head Office',
        'Division'    => 'Division',
        'Department'  => 'Department',
        'Section'     => 'Section',
        'Project'     => 'Project',
        'BOD'         => 'BOD',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function parent()
    {
        return $this->belongsTo(CompanyStructure::class, 'parent_id');
    }
}
