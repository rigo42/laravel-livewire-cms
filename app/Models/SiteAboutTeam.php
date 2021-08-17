<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteAboutTeam extends Model
{
    use HasFactory;

    protected $guarded = [];

    //1:N
    public function images(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
