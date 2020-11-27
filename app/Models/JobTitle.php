<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class JobTitle extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'job_titles';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'code',
        'name',
        'main_purpose',
        'responsibility',
        'result',
        'challange',
        'authority',
        'internal_relation',
        'external_relation',
        'financial_dimension',
        'hr_dimension',
        'qualification',
        'training_need',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
