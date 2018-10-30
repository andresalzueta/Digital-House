<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // movies_db.genres[id, created_at, updated_at, name, ranking, active]
    protected   $table = 'genres';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = ['name', 'ranking', 'active'];
    protected $guarded = ['id','created_at','updated_at'];


    public function getNomeGenero() {
        return $this->name;
    }
   
    public function getIsActive() {
        if ($this->active == 1) {
            return "Sim";
        } else {
            return "Não";
        }
    }

    public function movies() {
        return $this->hasMany(Movie::class,'genre_id','id');
    }
}
