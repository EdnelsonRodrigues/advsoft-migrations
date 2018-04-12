<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Processo;
use App\Modelos\Advogado;

class ProcessoController extends Controller
{
    //metodo para listar um processo
    public function listar()
    {
        $processo = Processo::where('acordo', 'REQUERENTE')->get()->first();

        echo "<hr><strong>SITUAÇÃO DO PROCESSO:</strong> $processo->situacao<br>";

        $advogados = $processo->advogados;

        //loop
        foreach ($advogados as $advogado) {
            echo "Advogado: $advogado->nome <br>
            OAB: $advogado->oab <br>";
        }
    }

    //meto para inserir um processo com as tabelas relacionadas
    public function inserir() 
    {
        $dadosForm = [
            'situacao' => 'Ativo',
            'acordo' => 'REQUERENTE',
            'numero' => '1234',
        ];

        $processo = Processo::create($dadosForm);

        echo "<hr><b>SITUAÇÃO DO PROCESSO:</b> $processo->situacao <br>
        <b>ACORDO:</b> $processo->acordo <br>
        <b>NUMERO:</b> $processo->numero <br><br>";

        $processo->advogados()->sync([1,2]);

         $advogados = $processo->advogados;

         echo "<b>Advogados do processo</b><br>";

         foreach ($advogados as $advogado) {
             echo "Nome: $advogado->nome <br>
             Celular: $advogado->celular <br>
             OAB: $advogado->oab <br>";
         }
    }
}
