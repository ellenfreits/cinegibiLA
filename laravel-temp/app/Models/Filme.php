<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = [
        'titulo',
        'genero',
        'classificacao',
        'duracao'
    ];

    public function sessoes()
    {
        return $this->hasMany(Sessao::class);
    }
}