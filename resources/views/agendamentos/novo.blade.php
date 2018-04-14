@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="panel">

                <div class="panel-body">
                    <h3>Novo Agendamento</h3>
                    <hr>
                    
                    <!-- estrutura para mensagem de erro -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif

                    <form role="form" action="/agendamentos" method="POST">
                    {{ csrf_field() }}

                        <!-- select trazendo todos os registro dos advogados -->
                        <div class="form-group col-md-4">
                            <label for="advogado">Advogado *</label>
                            <select name="advogado_id" class="form-control input-sm" id="advogado" required>
                                <option value="">--</option>
                                    <optgroup label="Selecione um Advogado">
                                       @foreach ($advogados as $advogado)
                                            <option value="{{ $advogado->id }}">{{ $advogado->nome }}</option>
                                       @endforeach 
                                    </optgroup>
                            </select>
                        </div>

                        <!-- campos para preeeencher com dados da descricao do agendamento -->
                        <div class="form-group col-md-4 has-error has-feedback">
                            <label for="descricao">Descrição *</label>
                            <input type="text" class="form-control input-sm" id="agendamentoDescricao" name="descricao" placeholder="digite uma descrição..." required>
	                    </div>

                        <!-- campos para preeeencher com dados da data do agendamento -->
                        <div class="form-group col-md-4">
                            <label for="data">Data *</label>
                            <input type="text" class="form-control input-sm" id="agendamentoData" name="data" placeholder="YY-MM-DD hh:ii:ss" required>
	                    </div>

                        <div class="form-group" style="margin-left: 15px">	
                            <button type="submit" class="btn btn-success btn-sm">Salvar agendamento</button>
                            <a href="../agendamentos" class="btn btn-primary btn-sm">Voltar à lista de agendamentos</a>
     			        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection