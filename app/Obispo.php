<?php

namespace Lazarus;

use Illuminate\Database\Eloquent\Model;

class Obispo extends Model
{

  protected $table = "obispos";

  protected $primaryKey = "idobispo";

  protected $fillable = ['nombre_completo', 'fecha_inicio', 'fecha_fin','mostrar_acta'];

}
