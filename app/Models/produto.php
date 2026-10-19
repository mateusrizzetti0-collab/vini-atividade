<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $table = 'produto';

    public $timestamps = false;
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'categoria_id'
    ];

    public function categoria()
    {
        return $this->belongsTo(categoria::class, 'categoria_id');
    }
}
