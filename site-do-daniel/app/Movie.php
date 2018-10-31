<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Teste da aula 38 - 6/08/2018
    // movies_db.movies[id, created_at, updated_at, title, rating, awards, release_date, length, genre_id]
    protected   $table = 'movies';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = ['title', 'rating', 'awards', 'release_date', 'length', 'genre_id', 'revenue', 'director_id'];
    protected $guarded = ['id','created_at','updated_at'];
    protected $dates = ['release_date'];

    public function getFillArray() {
        $movie = new Movie;
        $movie->fill(['id' => null ]);
        $movie->fill(['title' => null ]);
        $movie->fill(['awards' => null ]);
        $movie->fill(['length' => null ]);
        $movie->fill(['genre_id' => null ]);
        //$movie->fill(['director_id' => null ]);
        $movie->fill(['release_date' => null ]);
        $movie->fill(['created_at' => null ]);
        $movie->fill(['updated_at' => null ]);
        return $movie;
    }

    public function getNomeFilme() {
        return $this->title;
    }

    public function getReleaseDate() {
        $release_date = new \Datetime($this->release_date);
        return $release_date->format('d/m/Y');
    }

    public function getReleaseDateToInput() {
        if ($this->release_date == null) {
            return null;    
        } else {
            $release_date = new \Datetime($this->release_date);
            return $release_date->format('Y-m-d');
        }
    }

    public function genero() {
        return $this->hasOne(Genre::class, 'id','genre_id');
    }

    public function generos() {
        return  Genre::all();
    }

    public function atores() {
        return $this->belongsToMany(Actor::class,'actor_movie', 'movie_id', 'actor_id');
    }

}
