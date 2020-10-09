@extends('master')
@section('titulo','Treinamentos')
@section('corpo')
	<div class="container">
		<h3 class="text-center text-uppercase text-primary">Treinamento</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt class="text-primary">Nome</dt>
					<dd>{{$treinamento->nome}}</dd>
					<dt class="text-primary">Fornecedor</dt>
					<dd>{{$treinamento->fornecedor}}</dd>
					<dt class="text-primary">Conteúdo</dt>
					<dd>{{$treinamento->conteudo}}</dd>
					<dt class="text-primary">Início</dt>
					<dd>{{$treinamento->inicio}}</dd>
					<dt class="text-primary">Fim</dt>
					<dd>{{$treinamento->fim}}</dd>
					<dt class="text-primary">Tipo</dt>
					<dd>{{$treinamento->tipo}}</dd>
				</dl>
				<form action="/treinamento/{{$treinamento->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-danger btn-sm">
					<a href="/treinamento" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection