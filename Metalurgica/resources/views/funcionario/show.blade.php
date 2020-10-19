@extends('master')
@section('titulo','Funcionário')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="center text-dark">FUNCIONÁRIO</h1>
		<br/>
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
					<dt>Nacionalidade</dt>
					<dd>{{$funcionario->nacionalidade}}</dd>
					<dt>País onde mora</dt>
					<dd>{{$funcionario->pais_onde_mora}}</dd>
					<dt>Estado onde mora</dt>
					<dd>{{$funcionario->estado_onde_mora}}</dd>
					<dt>Cidade onde mora</dt>
					<dd>{{$funcionario->cidade_onde_mora}}</dd>
					<dt>Bairro onde mora</dt>
					<dd>{{$funcionario->bairro_onde_mora}}</dd>
					<dt>Rua onde mora</dt>
					<dd>{{$funcionario->rua_onde_mora}}</dd>
					<dt>Número onde mora</dt>
					<dd>{{$funcionario->numero_onde_mora}}</dd>
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
					<input type="submit" value="Excluir" class="btn btn-light">
					<a href="/funcionario" class="btn btn-dark">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection

<style type="text/css">
	.center {
    	text-align:  center;
	}
	.col-sm-6{
		height: 100%;

	}
	dt{
		font-size: 20px;
	}
</style>