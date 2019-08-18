<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    
    protected $guarded = [];

    public function vehiculo()
    {
        return $this->hasOne('App\Vehiculo');
    }
}
