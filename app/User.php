<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'lastname',
        'firstname',
        'lastname_kana',
        'firstname_kana',
        'company',
        'role',
        'email',
        'password',
        'mobile',
        'image',
        'job_title',
        'location',
        'linkedin',
        'facebook',
        'link',
        'twitter',
        'cv',
        'type',
        'user_desc',
        'remember_token',

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
}
