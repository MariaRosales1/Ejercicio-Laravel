<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $guarded = [];

    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }
    
}
