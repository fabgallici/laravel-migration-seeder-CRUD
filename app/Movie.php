<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //Non obbligatorio se il nome del model (in questo caso movie) e il nome della tabella (in questo caso movies) sono uguali con il solo cambio: singolare / plurale. Se la tabella si chiamasse ad esempio film e il modello movie è necessario usare protcted $table
    protected $table = 'movies';

    protected $fillable = ['title', 'year', 'overview'];

}
