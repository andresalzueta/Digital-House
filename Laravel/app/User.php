<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected   $table = 'users';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /** movies_db.users[id, name, email, password, remember_token, created_at, updated_at]
     * 
     * 
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'remember_token'];
    protected $guarded = ['id','created_at','updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

}
