<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncios extends Model
{
  protected $table='anuncios';
  protected $primaryKey='idanuncios';

  public $timestamps =false;

  protected $fillable = [
   'titulo',
   'descripcion',
   'imagen',
   'precio'

  ];

  protected $guarded = [

    ];
}
