@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="panel">

                <div class="panel-body">
                    <h3>Novo Advogado</h3>
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

                    <form role="form" action="{{url('advogados')}}" method="POST">
                    {{ csrf_field() }}

                        <h4 style="color: #679cf7">Dados Pessoais</h4>
                        
                        <!-- select trazendo dados de situação do ENUM -->
                        <div class="form-group col-md-2">
                            <label for="situacao">Situação *</label>
                                <select class="form-control input-sm" id="advogadoSituacao" name="situacao" required>
                                <option></option>
                                <option value="Ativo">A</option>
                                <option value="Inativo">I</option>
                            </select>
					    </div>

                        <!-- nome -->
                        <div class="form-group col-md-6">
                            <label for="nome">Nome *</label>
                            <input type="text" class="form-control input-sm" id="advNome" 
                            name="nome" placeholder="digite seu nome..." required>
	                    </div>
                        
                        <!-- oab -->
                        <div class="form-group col-md-4">
                            <label for="oab">OAB *</label>
                            <input type="text" class="form-control input-sm" id="advOab" 
                            name="oab" placeholder="digite sua OAB..." required>
	                    </div>

                        <!-- celular -->
                        <div class="form-group col-md-4">
                            <label for="celular">Celular *</label>
                            <input type="text" class="form-control input-sm" id="advCelular" 
                            name="celular" placeholder="digite seu celular..." required>
	                    </div>

                        <!-- telefone -->
                        <div class="form-group col-md-4">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control input-sm" id="advTelefone" 
                            name="telefone" placeholder="digite seu telefone...">
	                    </div>

                        <!-- email -->
                        <div class="form-group col-md-4">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control input-sm" id="advEmail" 
                            name="email" placeholder="digite seu e-mail...">
                            <br>
	                    </div>

                        <h4 style="color: #679cf7">Endereço</h4>

                        <!-- cep -->
                        <div class="form-group col-md-2">
                            <label for="cep">CEP *</label>
                            <input type="text" class="form-control input-sm" id="advCep" 
                            name="cep" placeholder="digite seu cep..." required>
	                    </div>

                        <!-- endereco -->
                        <div class="form-group col-md-6">
                            <label for="endereco">Endereço *</label>
                            <input type="text" class="form-control input-sm" id="advEndereco" 
                            name="endereco" placeholder="digite seu endereço..." required>
	                    </div>

                        <!-- complemento -->
                        <div class="form-group col-md-4">
                            <label for="complemento">Complemento *</label>
                            <input type="text" class="form-control input-sm" id="advComplemento" 
                            name="complemento" placeholder="digite seu complemento..." required>
	                    </div>

                        <!-- numero -->
                        <div class="form-group col-md-2">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control input-sm" id="advNumero" 
                            name="numero" placeholder="digite o numero da sua residencia...">
	                    </div>

                        <!-- cidade -->
                        <div class="form-group col-md-4">
                            <label for="cidade">Cidade *</label>
                            <input type="text" class="form-control input-sm" id="advCidade" 
                            name="cidade" placeholder="digite sua cidade..." required>
	                    </div>

                        <!-- bairro -->
                        <div class="form-group col-md-4">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control input-sm" id="advBairro" 
                            name="bairro" placeholder="digite seu bairro...">
	                    </div>

                        <!-- uf -->
                        <div class="form-group col-md-2">
                            <label for="uf">UF *</label>
                            <select name="uf" class="form-control input-sm" id="advogadoUf" required>
                                <option></option>
                                <option>PA</option>
                                <option>BA</option>
                                <option>RJ</option>
                                <option>MA</option>
                            </select>
                            <br>
                        </div>

                        <h4 style="color: #679cf7">Descrições adicionais</h4>

                        <!-- bairro -->
                        <div class="form-group col-md-12">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" name="descricao" id="advDescricao" 
                            cols="30" rows="3" placeholder="digite uma descrição..."></textarea>
	                    </div>

                        <div class="form-group" style="margin-left: 15px">	
                            <button type="submit" class="btn btn-success btn-sm">
                                Salvar agendamento
                            </button>
                            <a href="{{url('advogados')}}" class="btn btn-primary btn-sm">
                                Voltar à lista de agendamentos
                            </a>
     			        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection