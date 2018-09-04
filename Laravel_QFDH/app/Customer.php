<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // digitalhouse_db.customers[id, created_at, updated_at, user_id, cpf_cnpj, first_name, last_name, gender,
    //                           birthday, phone, email, address, address_number, adress_complement, city, state, zipcode]

    protected   $table = 'customers';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /** 
     * 
     * 
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','cpf_cnpj', 'first_name', 'last_name', 'gender','birthday','phone','email','address', 'address_number', 'address_complement', 'city','state','zipcode'];
    protected $guarded = ['id','created_at','updated_at'];

    public function getFullName() {
        return $this->first_name .' ' .$this->last_name;
    }

    public function user() {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function genders() {
        $genders = ['M', 'F'];
        return $genders;
    }

    public function orders() {
        return $this->hasMany(Order::class,'customer_id','id');
    }    

    public function states() {
        $states = array( "SP", "AC", "AL", "AM", "AP", "BA", "CE", "DF", "ES", "GO", "MA", "MT", "MS", "MG", "PA", "PB", "PR", "PE", "PI", "RJ", "RN", "RO", "RS", "RR", "SC", "SE", "SP", "TO" );
        return $states;
    }

    public function getBirthday() {
        $date = new \Datetime($this->birthday);
        return $date->format('d/m/Y');
    }

    public function getBirthdayToInput() {
        if ($this->birthday == null) {
            return null;    
        } else {
            $date = new \Datetime($this->birthday);
            return $date->format('Y-m-d');
        }
    }
}
