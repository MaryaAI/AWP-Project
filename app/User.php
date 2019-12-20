<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
Use App\Roadster;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function ratings()
{
    return $this->hasMany('App\Rating');
}
public function rated(Roadster $roadster)
{
    return $this->ratings->where('roadster_id', $roadster->id)->isNotEmpty();
}
public function bookRating(Roadster $roadster)
{
    return $this->rated($roadster) ? $this->ratings->where('roadster_id', $roadster->id)->first() : NULL;
}

public function roadstersInCart()
{
    return $this->belongsToMany('App\Roadster');
}


}
