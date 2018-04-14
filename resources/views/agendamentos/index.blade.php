@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="panel">

                <div class="panel-body">
                    <h3>Lista de Agendamentos
                        <a href="agendamentos/novo" class="pull-right btn btn-primary btn-sm"
                        role="button" aria-pressed="true">NOVO AGENDAMENTO</a>
                    </h3>
                    <hr>
                    
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">CÓDIGO</th>
                          <th scope="col">ADVOGADO</th>
                          <th scope="col">DESCRIÇÃO</th>
                          <th scope="col">DATA</th>
                          <th scope="col">AÇÕES</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($agendamentos as $agendamento)
                        <tr>
                            <th scope="row">{{ $agendamento->id }}</th>
                            <td><a href="#">{{ $agendamento->advogado->nome }}</a></td>
                            <td>{{ $agendamento->descricao }}</td>
                            <td>{{ $agendamento->data }}</td>
                            <td>
                                <a href="#"><button type="button" class="btn btn-warning btn-sm">Editar</button></a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Excluir"/>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection