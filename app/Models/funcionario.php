<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    protected $table = 'funcionario';

    public $timestamps = false;
    protected $fillable = [
        'nome',
        'cargo',
        'departamento',
        'data_admissao',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'usuario_id');
    }
}
