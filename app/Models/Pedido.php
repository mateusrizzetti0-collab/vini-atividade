<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';

    public $timestamps = false;
    protected $fillable = [
        'data_pedido',
        'status',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'usuario_id');
    }
}
