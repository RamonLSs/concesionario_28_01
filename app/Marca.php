<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Coche;

class Marca extends Model
{
    protected $fillable = ['nombre','logo','pais'];
    //vamos con las relaciones en 1:N es decir de una marca
    //tendremos muchos coches, en marcas pondremos
    public function coches(){
        return $this->hasMany(Coche::class);
    }
}
