<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class PortfolioCategory extends Model
{
    use HasFactory, LogsActivity;

    protected $guarded = [];

    //Logs
    protected static $logName = 'Categoría';
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Una categoría de portafolio ha sido {$eventName}";
    }
}