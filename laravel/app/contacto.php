<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    protected $fillable = array('nombre','telefono');
    
    protected $hidden = array('remember_token');
}
