@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="panel">

                <div class="panel-body">
                    <h3>Lista de Advogados
                        <a href="#" class="pull-right btn btn-primary btn-sm"
                        role="button" aria-pressed="true">NOVO ADVOGADO</a>
                    </h3>
                    <hr>
                    
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">CÓDIGO</th>
                          <th scope="col">NOME</th>
                          <th scope="col">CELULAR</th>
                          <th scope="col">TELEFONE</th>
                          <th scope="col">OAB</th>
                          <th scope="col">AÇÕES</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($advogados as $advogado)
                        <tr>
                          <th scope="row">{{ $advogado->id }}</th>
                          <td><a href="#">{{ $advogado->nome }}</a></td>
                          <td>{{ $advogado->celular }}</td>
                          <td>{{ $advogado->telefone }}</td>
                          <td>{{ $advogado->oab }}</td>
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