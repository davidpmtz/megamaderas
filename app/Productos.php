<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{


//
/**
 * The database table used by the model.
 *
 * @var string
 */
protected $table = 'productos';

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = [
  'nombre',
  'descripcion',
  'precio',
  'tipo_id',
  'lastModify_by',
  'timesClicked',
  'cantidad',
  'view'
];

}
