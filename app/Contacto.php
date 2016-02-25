<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{


/**
 * The database table used by the model.
 *
 * @var string
 */
protected $table = 'contactos';

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['name', 'telephone', 'email', 'message'];



}
