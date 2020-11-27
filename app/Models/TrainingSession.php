<?php

namespace App\Models;

use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use \DateTimeInterface;

class TrainingSession extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory;

    public $table = 'training_sessions';

    protected $appends = [
        'attachment',
    ];

    const ATTENDANCE_TYPE_SELECT = [
        'Sign Up' => 'Sign Up',
        'Assign'  => 'Assign',
    ];

    protected $dates = [
        'scheduled',
        'due_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const DELIVERY_METHOD_SELECT = [
        'Classroom'  => 'Classroom',
        'Self Study' => 'Self Study',
        'Online'     => 'Online',
    ];

    protected $fillable = [
        'name',
        'course_id',
        'description',
        'scheduled',
        'due_date',
        'delivery_method',
        'location',
        'attendance_type',
        'created_at',
        'updated_at',
        'deleted_at',
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

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function getScheduledAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setScheduledAttribute($value)
    {
        $this->attributes['scheduled'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getDueDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setDueDateAttribute($value)
    {
        $this->attributes['due_date'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getAttachmentAttribute()
    {
        return $this->getMedia('attachment')->last();
    }
}
