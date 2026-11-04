<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin_funcionario extends Model
{
    protected $table = 'admin_funcionario';
    
    protected $fillable = [
        'usuario_id',
        'nivel_acesso'
    ];
}
