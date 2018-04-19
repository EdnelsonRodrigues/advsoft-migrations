@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="panel">

                <div class="panel-body">
                    <h3>Lista de Advogados
                        <a href="{{url('advogados/novo')}}" class="pull-right btn btn-primary btn-sm"
                        role="button" aria-pressed="true">NOVO ADVOGADO</a>
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
                            <a href="#"><button type="button" class="btn btn-warning btn-sm">
                                Editar
                            </button></a>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                                Apagar
                            </button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>

                <!-- modal -->
                <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title text-center" id="myModalLabel">Confirmação de Exclusão</h4>
                            </div>
                            <!-- form de destroy -->
                            <form action="{{ url('advogados', [$advogado->id]) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="modal-body">
                                    <p class="text-center">
                                        Tem certeza que deseja excluir o advogado?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning btn-sm">Confirmar</button>
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
                                </div>
                            </form>  
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection