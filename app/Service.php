<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{


//
/**
 * The database table used by the model.
 *
 * @var string
 */
protected $table = 'services';

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['nombre',
 'descripcion',
  'precio',
  'lastModify_by',
  'timesClicked',
  'view'
];

}
