<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'cliente_id',
        'operador_id',
        'administrador_id',
        'fecha_entrega',
        'observaciones',
        'estado',
        'valor_total',
    ];

    public function detalle()
    {
        return $this->hasMany(DetallePedido::class, 'pedido_id');
    }

    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }

    public function operador()
    {
        return $this->belongsTo(User::class, 'operador_id');
    }
}
