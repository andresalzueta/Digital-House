<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected   $table = 'orders';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /** 
     * 
     * 
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','customer_id', 'description', 'status'];
    protected $guarded = ['id','created_at','updated_at'];


    public function user() {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function customer() {
        return $this->hasOne(Customer::class,'id','customer_id');
    }
}
