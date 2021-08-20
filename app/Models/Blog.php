<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    //Logs
    protected static $logName = 'Blog';
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Un blog ha sido {$eventName}";
    }

    public function getRouteKeyName(){
        return 'slug';
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
    //1:1
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    //N:M
    public function blogCategories(){
        return $this->belongsToMany(BlogCategory::class);
    }

    //N:M
    public function blogTags(){
        return $this->belongsToMany(BlogTag::class);
    }

    public function dateToString(){
        return Carbon::parse($this->created_at)->toFormattedDateString();
    }
}
