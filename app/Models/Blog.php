<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\Activitylog\Traits\LogsActivity;

class Blog extends Model
{
    use HasFactory, Sluggable, LogsActivity; 

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

    //N:1
    public function user(){
        return $this->belongsTo(User::class);
    }

    //N:M
    public function blogCategories(){
        return $this->belongsToMany(BlogCategory::class);
    }

    //N:M
    public function blogTags(){
        return $this->belongsToMany(BlogTag::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function dateToString(){
        return Carbon::parse($this->created_at)->toFormattedDateString();
    }
}
