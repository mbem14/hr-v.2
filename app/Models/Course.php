<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Course extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'courses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_SELECT = [
        'Active'   => 'Active',
        'inActive' => 'inActive',
    ];

    const PAYMENT_TYPE_SELECT = [
        'Company Sponsored' => 'Company Sponsored',
        'Paid By Employee'  => 'Paid By Employee',
        'Free External'     => 'Free Online',
        'Free Internal'     => 'Free Internal',
    ];

    protected $fillable = [
        'code',
        'name',
        'description',
        'coordinator_id',
        'trainer',
        'trainer_info',
        'payment_type',
        'currency',
        'cost',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function coordinator()
    {
        return $this->belongsTo(Employee::class, 'coordinator_id');
    }
}
