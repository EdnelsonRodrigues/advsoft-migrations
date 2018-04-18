<?php

Route::get('/', function () {
    return view('home');
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

//advogado-view
$this->get('advogados', 'AdvogadoController@index');

//agendamento-view
$this->get('agendamentos', 'AgendamentoController@index');
$this->get('agendamentos/novo', 'AgendamentoController@novo');
$this->post('agendamentos', 'AgendamentoController@store');

//upload
$this->get('file', 'FileController@create');
$this->post('file', 'FileController@store');








