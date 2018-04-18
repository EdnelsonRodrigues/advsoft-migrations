@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="panel">

                <div class="panel-body">
                    <h3>Anexo</h3>
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

                    <!-- estrutura para mensagem de sucesso -->
                     @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Form -->
                    <h4 class="well">File Upload</h4>
                    <form method="post" action="{{url('file')}}" enctype="multipart/form-data">
                    {{csrf_field()}}

                        <div class="input-group control-group lst increment">
                            <input type="file" name="filenames[]" class="myfrm form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Adicionar</button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-danger" style="margin-top:10px">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection