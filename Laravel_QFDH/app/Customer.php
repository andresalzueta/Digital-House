<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // digitalhouse_db.customers[id, created_at, updated_at, user_id, cpf, first_name, last_name, gender,
    //                           birthday, phone, email, address, address_number, adress_complement, city, state, zipcode]

    protected   $table = 'customers';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /** movies_db.users[id, name, email, password, remember_token, created_at, updated_at]
     * 
     * 
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','cpf', 'first_name', 'last_name', 'gender','birthday','phone','email','address', 'address_number', 'address_complement', 'city','state','zipcode'];
    protected $guarded = ['id','created_at','updated_at'];

    public function user() {
        return $this->hasOne(User::class,'id','user_id');
    }

}
