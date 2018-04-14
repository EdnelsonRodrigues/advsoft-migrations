<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    public $timestamps = false;

    //necessario quando for inserir os dados
    protected $fillable = ['descricao', 'data', 'advogado_id'];

    public function advogado() 
    {
        //referencia a relacao com advogado
        return $this->belongsTo(Advogado::class);
    }
}
