<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Contact extends Model
{
    use HasFactory, LogsActivity;

    protected $guarded = [];

    //Logs
    protected static $logName = 'Contact';
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Contacto ha sido {$eventName}";
    }

    public function dateToString(){
        return Carbon::parse($this->created_at)->toFormattedDateString();
    }
}
