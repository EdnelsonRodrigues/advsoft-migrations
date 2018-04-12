<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Advogado extends Model
{
    //necessario quando for inserir os dados
    protected $fillable = [
        'situacao',
           'nome',
           'oab',
           'celular',
           'telefone',           
           'email',           
           'cep',           
           'endereco',           
           'complemento',           
           'numero',           
           'cidade',           
           'bairro',           
           'uf',           
           'obs'
    ];

    /* metodo de relacao de um para muitos com agendamento
    perceba que o metodo esta no plural, isso pq ele ira retornar 
    todos os agendamentos desse advogado
    */
    public function agendamentos()
    {
        //hasMany para fazer o relacionamento um para muitos
        return $this->hasMany(Agendamento::class);
    }
}
