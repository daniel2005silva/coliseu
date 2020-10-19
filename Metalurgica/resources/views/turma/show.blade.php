@extends('master')
@section('titulo','Treinamentos')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="text-center text-uppercase text-dark">Treinamento</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt class="text-dark">Nome</dt>
					<dd>{{$treinamento->treinamento}}</dd>
					<dt class="text-dark">Fornecedor</dt>
					<dd>{{$treinamento->fornecedor_id}}</dd>
					<dt class="text-dark">Descrição</dt>
					<dd>{{$treinamento->descricao}}</dd>
					<dt class="text-dark">Conteúdo</dt>
					<dd>{{$treinamento->conteudo}}</dd>
					<dt class="text-dark">Data de início</dt>
					<dd>{{$treinamento->dt_inicio}}</dd>
					<dt class="text-dark">Data de termino</dt>
					<dd>{{$treinamento->dt_termino}}</dd>
					<dt class="text-dark">Tipo</dt>
					<dd>{{$treinamento->tipo}}</dd>
				</dl>
				<form action="/treinamento/{{$treinamento->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-light">
					<a href="/treinamento" class="btn btn-dark">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection
<style type="text/css">
	.center {
    	text-align:  center;
	}
	.container{
		height: 100%;
	}
	dt{
		font-size: 20px;
	}
</style>