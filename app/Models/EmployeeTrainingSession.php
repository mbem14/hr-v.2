<?php

namespace App\Models;

use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use \DateTimeInterface;

class EmployeeTrainingSession extends Model implements HasMedia
{
    use SoftDeletes, MultiTenantModelTrait, InteractsWithMedia, Auditable, HasFactory;

    protected $appends = [
        'proof',
    ];

    public $table = 'employee_training_sessions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'training_session_id',
        'feedback',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    const STATUS_SELECT = [
        'Scheduled'    => 'Scheduled',
        'Attended'     => 'Attended',
        'Not-Attended' => 'Not-Attended',
        'Completed'    => 'Completed',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function training_session()
    {
        return $this->belongsTo(TrainingSession::class, 'training_session_id');
    }

    public function getProofAttribute()
    {
        return $this->getMedia('proof')->last();
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
