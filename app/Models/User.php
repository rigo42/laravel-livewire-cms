<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    //1:1
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    //1:N
    public function blogs(){
        return $this->hasMany(Blog::class);
    }

    public function profile(){
        $image = asset('assets/admin/media/avatars/blank.png');

        if($this->image){
            $image = Storage::url($this->image->url);
        }

        return $image;
    }

    public function dateToString(){
        return Carbon::parse($this->created_at)->toFormattedDateString();
    }
}
