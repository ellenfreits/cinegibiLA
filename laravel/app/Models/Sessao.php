<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Filme;
use App\Models\Ingresso;

class Sessao extends Model 
{
    protected $fillable = [
        'filme_id',
        'data',
        'horario',
        'sala'
    ];

    public function filme()
    {
        return $this->belongsTo(Filme::class);
    }

    public function ingressos()
    {
        return $this->hasMany(Ingresso::class);
    }
}



