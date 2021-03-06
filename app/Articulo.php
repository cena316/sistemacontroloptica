<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'cantidad'
    ];

    public function detallePedido()
    {
        return $this->hasMany(DetallePedido::class, 'articulo_id');
    }
}
