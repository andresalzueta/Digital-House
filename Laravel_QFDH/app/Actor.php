<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //movies_db.actors[id, created_at, updated_at, first_name, last_name, rating, favorite_movie_id]
    protected   $table = 'actors';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $guarded = ['id','created_at','updated_at'];
    protected $fillable = ['first_name', 'last_name', 'rating', 'favorite_movie_id'];

    public function getNomeCompleto() {
        return $this->first_name .' ' .$this->last_name;
    }

    public function getFilme_Favorito() {
        return $this->hasOne(Movie::class,'id','favorite_movie_id');
    }

    public function getFilmes() {
        return  Movie::all();
    }

    public function filmes() {
        return $this->belongsToMany(Movie::class,'actor_movie', 'actor_id', 'movie_id');
    }

}
