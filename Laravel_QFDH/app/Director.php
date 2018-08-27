<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
//
    //movies_db.directors[id, created_at, updated_at, first_name, last_name, rating, birthday]
    protected   $table = 'directors';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $guarded = ['id','created_at','updated_at'];
    protected $fillable = ['first_name', 'last_name', 'rating', 'birthday'];

    public function getNomeCompleto() {
        return $this->first_name .' ' .$this->last_name;
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
    
    public function movies() {
        return $this->hasMany(Movie::class,'director_id','id');
    }    
}
