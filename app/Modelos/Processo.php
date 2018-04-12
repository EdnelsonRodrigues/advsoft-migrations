<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $fillable = ['situacao', 'acordo', 'numero'];
    /**
     * relacionamento para trazer todos os advogados de um processo especifico
     * no plural pois ira retornar mais de um resultado
     */
    public function advogados() 
    {
        /**
         * lembre-se a tabela que faz pivô com as duas tabelas deve estar na ordem alfabetica,
         * caso contrario deve ser especificada no return abaixo.
         */
    return $this->belongsToMany(Advogado::class/*, 'processo_advogado'*/);
    }
}
