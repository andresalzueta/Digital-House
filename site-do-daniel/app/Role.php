<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected   $table = 'roles';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /** banco_db.roles[id, name, description, created_at, updated_at]
     * 
     * 
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];
    protected $guarded = ['id','created_at','updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function users()    {
        return $this->belongsToMany(User::class,'role_user', 'role_id', 'user_id');
    }
}