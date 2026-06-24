<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingresso extends Model
{
    protected $fillable = [
        'sessao_id',
        'nome_cliente',
        'quantidade',
        'valor_total'
    ];

    public function sessao()
    {
        return $this->belongsTo(Sessao::class);
    }
}

