@extends('master')
@section('titulo','Fornecedor')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="center text-dark">FORNECEDOR</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Empresa</dt>
					<dd>{{$fornecedor->empresa}}</dd>
					<dt>CNPJ</dt>
					<dd>{{$fornecedor->cnpj}}</dd>
				</dl>
				
				
			</div>
			<div class="col-sm-12" style="text-align: center">
					<hr style="border-color: black" />
						<h4><b >TREINAMENTOS</b></h4>
					<hr style="border-color: black" />
				</div>
			<table class="table table-striped">
					<tr class="bg-dark text-white">
						<th>Nome</th>
						<th>Descrição</th>
						<th>Conteúdo</th>
						<th>Data de início</th>
						<th>Data de término</th>
						<th>Tipo</th>
						<th>Comando</th>
					</tr>
					@foreach($treinamentos as $t)
					<tr>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$t->treinamento}}</td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$t->descricao}}</td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$t->conteudo}}</td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$t->dt_inicio}}</td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$t->dt_termino}}</td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp{{$t->tipo}}</td>
						<td style="width: 150px">
							<a href="../../treinamento/{{$t->id}}" class="btn btn-secondary btn-sm">Detalhe</a>
							<a href="../../treinamento/{{$t->id}}/edit" class="btn btn-dark btn-sm">Editar</a>
						</td>
					</tr>
					@endforeach
				</table>
				<br/>
				<form action="/fornecedor/{{$fornecedor->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-light">
					<a href="/fornecedor" class="btn btn-dark">Voltar</a>
				</form>
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
	.container{
		height: 100%;
	}
</style>