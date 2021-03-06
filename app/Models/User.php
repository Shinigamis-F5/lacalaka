<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', //default normal user, faker both, regist both ask about
        'address',
        'openingTimes',
        'img',
        'organization',
        'city',
        'description',
        'phone'
    ];

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

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
    
    public function partiesVenue()
    {
        return $this->hasMany(Party::class);
    }

    public function partiesUser()
    {
        return $this->belongsToMany(Party::class);
    }

    public function followParty($party)
    {
        return $this->partiesUser()->attach($party);
    }
    public function unfollowParty($party)
    {
        return $this->partiesUser()->detach($party);
    }
}
