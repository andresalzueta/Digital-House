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
    /** digitalhouse_db.users[id, name, email, password, remember_token, created_at, updated_at]
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
    protected $hidden = ['password','remember_token'];

    public function roles()  {
        return $this->belongsToMany(Role::class,'role_user', 'user_id', 'role_id');
    }

    /**
    * @param string|array $roles
    */
    public function authorizeRoles($roles)   {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) || 
                abort(401, 'Ação não autorizada para este usuário!');
        }
        return $this->hasRole($roles) || 
                abort(401, 'Ação não autorizada para este usuário!');
    }
    /**
    * Check multiple roles
    * @param array $roles
    */
    public function hasAnyRole($roles)    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }
    /**
    * Check one role
    * @param string $role
    */
    public function hasRole($role)
    {   
        return null !== $this->roles()->where('name', $role)->first();
    }
    
}
