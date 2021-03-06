<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//chamar o namespace dos modelos
use App\Modelos\Advogado;
use App\Modelos\Agendamento;

class AgendamentoController extends Controller
{
    public function index()
    {  
        $agendamentos = Agendamento::all();
        return view('agendamentos.index', compact('agendamentos'));
    }

    public function novo() //create
    {
        $advogados = Advogado::all();
        return view('agendamentos.novo', compact('advogados'));
    }

    public function store(Request $request, Agendamento $agendamento) 
    {
        //validação
        $request->validate([
            
            'advogado_id'   => 'required',
            'descricao'     => 'required',
            'data'          => 'required',
        ]);

        $insere = $agendamento->create($request->all());

        // Verifica se inseriu com sucesso
        // Redireciona para a listagem dos agendamentos
        // Passa uma session flash success (sessão temporária)
        if ($insere) {

            return redirect('/agendamentos/'.$agendamento->id)->with('success', 'Agendamento inserido com sucesso!');
            /*return redirect()
                    ->route('agendamentos.index'.$agendamento->id)
                    ->with('success', 'Agendamento inserido com sucesso!');*/

            // Redireciona de volta com uma mensagem de erro
            return redirect()->back()->with('error', 'Falha ao inserir');
        }
    }



    public function listarAgendamentos() 
    {
        //recuperando o advogado pelo nome pegando o primeiro registro
        //$advogado = Advogado::where('nome', 'Ednelson Rodrigues')->get()->first();

        //retornar mais de um resultado de advogado com seus agendamentos utilizando LIKE
        $pesquisa = 'e';
        $advogados = Advogado::where('nome', 'LIKE', "%$pesquisa%")->get();     

        //loop para mostrar os advogados e seus agendamentos
        foreach ($advogados as $advogado) {
            echo "<strong>Advogado:</strong> $advogado->nome";

        /**
         * criar a variavel dos agendamentos e pegar todos os agendamentos relacionados
         * a um advogado.
         * chamando o metodo em formato de atributo
         */
        //$agendamentos = $advogado->agendamentos;

        /**
         * ja que ele retorna varios registro de agendaentos
         * cria-se entao um loop para mostrar esses registros
         */

         /**
          * chamr o metodo em formato de metodo mesmo, vantagem em colocar condições de buscar 
          * como por exemplo usando like, e outras funções
          */
          $agendamentos = $advogado->agendamentos()/*->where('descricao', 'teste 2')*/->get();

            foreach ($agendamentos as $agendamento) {
                echo "<br>Descrição: $agendamento->descricao <br>";
                echo "Data: $agendamento->data";            
            }

            echo "<hr>";
        }
    }

    //metodo para inserir um agendamento com um advogado vinculado
    public function inserirAgendamento() 
    {
        /**
         * preencher um formulario com dados do agendamento
         * utilizando array []
         */
        $dadosForm = [
            'descricao' => 'teste de inserção 1',
            'data' => '2018-04-30 00:00:00',
            'advogado_id' => '4',
        ];

        //recuperar um advogado pelo id, nome.. a seu criterio
        //$advogado = Advogado::find(1);
        
        //$inserir = $advogado->agendamentos()->create($dadosAgendamento);
        $inserir = Agendamento::create($dadosForm);
        
        var_dump($inserir->descricao);
    }
}
