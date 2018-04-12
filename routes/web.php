<?php

Route::get('/', function () {
    return view('welcome');
});

//agendamento
$this->get('lista-agendamentos', 'AgendamentoController@listarAgendamentos');
$this->get('inserir-agendamento', 'AgendamentoController@inserirAgendamento');

//advogado
$this->get('inserir-advogado', 'AdvogadoController@inserir');
$this->get('lista-advogados', 'AdvogadoController@listar');


//processo
$this->get('lista-processos', 'ProcessoController@listar');
$this->get('inserir-processo', 'ProcessoController@inserir');



