<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Portfolio extends Model
{
    use HasFactory, LogsActivity; 

    protected $guarded = [];

    //Logs
    protected static $logName = 'Portafolio';
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Una evidencía de portafolio ha sido {$eventName}";
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    //1:1
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    //1:N
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }

    public function dateToString(){
        return Carbon::parse($this->created_at)->toFormattedDateString();
    }
}
