@extends('master')
@section('titulo','Funcionário')
@section('corpo')
	<div class="container">
		<h3>Funcionário</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Nome</dt>
					<dd>{{$funcionario->nome}}</dd>
					<dt>Sobrenome</dt>
					<dd>{{$funcionario->sobrenome}}</dd>
					<dt>Data de Nascimento</dt>
					<dd>{{$funcionario->dt_nascimento}}</dd>
					<dt>Estado Civil</dt>
					<dd>{{$funcionario->estado_civil}}</dd>
					<dt>País</dt>
					<dd>{{$funcionario->pais}}</dd>
					<dt>Estado</dt>
					<dd>{{$funcionario->estado}}</dd>
					<dt>Cidade</dt>
					<dd>{{$funcionario->cidade}}</dd>
					<dt>Bairro</dt>
					<dd>{{$funcionario->bairro}}</dd>
					<dt>Rua</dt>
					<dd>{{$funcionario->rua}}</dd>
					<dt>Número</dt>
					<dd>{{$funcionario->numero}}</dd>
					<dt>Cargo Ocupado</dt>
					<dd>{{$funcionario->cargo_ocupado}}</dd>
					<dt>Cargo Desejado</dt>
					<dd>{{$funcionario->cargo_desejado}}</dd>
					<dt>Responsabilidades</dt>
					<dd>{{$funcionario->responsabilidades}}</dd>
					<dt>Formação Acadêmica</dt>
					<dd>{{$funcionario->formacao_academica}}</dd>
					<dt>Certificados</dt>
					<dd>{{$funcionario->certificados}}</dd>
					<dt>Idiomas</dt>
					<dd>{{$funcionario->idiomas}}</dd>
				</dl>
				<form action="/funcionario/{{$funcionario->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
					<a href="/funcionario" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection