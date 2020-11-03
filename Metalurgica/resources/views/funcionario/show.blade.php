@extends('master')
@section('titulo','Funcionário')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="center text-dark"><b>FUNCIONÁRIO {{$funcionario->id}}</b></h1>
		<hr style="border-color: black" />
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Nome completo:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp
						{{$funcionario->nome}} {{$funcionario->sobrenome}}</dd>
					
					<dt>Estado civil:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp
						{{$funcionario->estado_civil}}</dd>
					
					<dt>Bairro onde mora:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp
						{{$funcionario->bairro_onde_mora}}</dd>
					
					
					<dt>Rua onde mora:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp
						{{$funcionario->rua_onde_mora}}</dd>

					<dt>Estado onde mora:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp
						{{$funcionario->estado_onde_mora}}</dd>
					
					<dt>Cargo ocupado:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp
						{{$funcionario->cargo_ocupado}}</dd>
					
					<dt>Responsabilidades:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp
						{{$funcionario->responsabilidades}}</dd>
					
					<dt>Certificados:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp
						{{$funcionario->certificados}}</dd>
					

				</dl>

			
			</div>
			<div class="col-sm-6">
				<dt>Data de nascimento:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$funcionario->dt_nascimento}}</dd>
				<dt>Nacionalidade:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$funcionario->nacionalidade}}</dd>
				<dt>Cidade onde mora:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$funcionario->cidade_onde_mora}}</dd>
				<dt>Número onde mora:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$funcionario->numero_onde_mora}}</dd>
				<dt>País onde mora:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$funcionario->pais_onde_mora}}</dd>
				<dt>Cargo desejado:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$funcionario->cargo_desejado}}</dd>
				<dt>Formação acadêmica:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$funcionario->formacao_academica}}</dd>
				<dt>Idiomas:</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$funcionario->idiomas}}</dd>
			</div>

			<div class="col-sm-12" style="text-align: center">
				<hr style="border-color: black" />
				<h4><b >TREINAMENTOS</b></h4>
				<hr style="border-color: black" />
			</div>
			<table class="table table-striped">
				<tr class="bg-dark text-white">
					<th>Nome</th>
					<th>Fornecedor</th>
					<th>Descrição</th>
					<th>Início</th>
					<th>Término</th>
				</tr>
				@foreach($treinamentos as $t)
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$t->treinamento}}</td>
			
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$t->empresa}}</td>

					<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$t->descricao}}</td>
				
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$t->dt_inicio}}</td>
				
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$t->dt_termino}}</td>

					
				</tr>	
				@endforeach
			</table>

			<div class="col-sm-12" style="text-align: center">
				<hr style="border-color: black" />
				<h4><b >EXPERIÊNCIA PROFISSIONAL</b></h4>
				<hr style="border-color: black" />
			</div>
			<table class="table table-striped">
				<tr class="bg-dark text-white">
					<th>Nome da empresa:</th>
					<th>Cargo ocupado:</th>
					<th>Ano:</th>
					<th>Responsabilidades:</th>
					<th>Comando:</th>
				</tr>
				@foreach($experiencias as $e)
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$e->empresa}}</td>
			
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$e->cargo_ocupado}}</td>
				
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$e->ano}}</td>
				
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$e->responsabilidades}}</td>

					<td style="width: 150px">
						<a href="../../experienciaprofissional/{{$e->id}}" class="btn btn-secondary btn-sm">Detalhe</a>
						<a href="../../experienciaprofissional/{{$e->id}}/edit" class="btn btn-dark btn-sm">Editar</a>
					</td>
				</tr>	
				@endforeach
			</table>
			<div class="col-sm-12">
					<br/><br/>
				<form action="/funcionario/{{$funcionario->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-light">
					<a href="../experienciaprofissional/create/{{$funcionario->id}}" class="btn btn-secondary">Adicionar Experiência Profissional</a>
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