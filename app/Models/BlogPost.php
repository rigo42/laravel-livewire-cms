<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class BlogPost extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

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
    
    //1:N
    public function images(){
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
}
