<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Advogado;

class AdvogadoController extends Controller
{
    public function inserir()
    {
        /**
         * preencher um formulario com dados do advogado
         * utilizando array []
         */
        $dadosForm = [
           'situacao'       => 'Ativo',
           'nome'           => 'Ednelson Rodrigues',
           'oab'            => '12345',
           'celular'        => '(91) 98527-9745',
           'telefone'       => '3721-9654',           
           'email'          => 'luanalorena@gmail.com',           
           'cep'            => '68743-570',           
           'endereco'       => 'Alameda Padre Rolin',           
           'complemento'    => 'Casa',           
           'numero'         => '104',           
           'cidade'         => 'Castanhal',           
           'bairro'         => 'Caiçara',           
           'uf'             => 'PA',           
           'obs'            => 'teste de inserção',                       
        ];

        $inserir = Advogado::create($dadosForm);

        var_dump($inserir->nome);
    }

    public function listar()
    {
        $advogados = Advogado::find(1)->get();
        echo "Advogados Cadastrados <br><br>";
        foreach ($advogados as $advogado) {
            echo "<strong>CÓDIGO:</strong> $advogado->id <br> 
            <strong>NOME:</strong> $advogado->nome <br> 
            <strong>OAB:</strong> $advogado->oab <br> 
            <strong>CELULAR:</strong> $advogado->celular <br>
            <strong>E-MAIL:</strong> $advogado->email <hr>";
        }
    }
}
