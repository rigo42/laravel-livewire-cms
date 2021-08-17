<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class SiteService extends Model
{
    use HasFactory, LogsActivity;

    protected $guarded = [];

    //1:N
    public function images(){
        return $this->morphOne(Image::class, 'imageable');
    }

    //Logs
    protected static $logName = 'Website';
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Un Servicio ha sido {$eventName}";
    }
}
