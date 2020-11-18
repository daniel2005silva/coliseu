@extends('master')
@section('titulo','Treinamentos')
@section('corpo')
	<div class="container">
		<br/>
		<hr style="border-color: black" />
		<h1 class="text-center text-uppercase text-dark" ><b>Treinamento</b></h1>
		<hr style="border-color: black" />
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt class="text-dark">Nome</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$treinamento->treinamento}}</dd>
					<dt class="text-dark">Fornecedor</dt>
					<dd>
						@foreach($fornecedor = $treinamento->fornecedor()->get() as $f)
							&nbsp&nbsp&nbsp&nbsp&nbsp{{$f->empresa}}
						@endforeach
					</dd>
					<dt class="text-dark">Descrição</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$treinamento->descricao}}</dd>
					<dt class="text-dark">Conteúdo</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$treinamento->conteudo}}</dd>
					<dt class="text-dark">Data de início</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$treinamento->dt_inicio}}</dd>
					<dt class="text-dark">Data de termino</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$treinamento->dt_termino}}</dd>
					<dt class="text-dark">Tipo</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$treinamento->tipo}}</dd>
				</dl>

				</div>

				<div class="col-sm-12" style="text-align: center">
				<hr style="border-color: black" />
				<h4><b >FUNCIONÁRIOS</b></h4>
				<hr style="border-color: black" />
				</div>
				<table class="table table-striped">
				<tr class="bg-dark text-white" style="text-align: center;">
					<th>Nome</th>
					<th style="width: 150px">Comando</th>
				</tr>
				@foreach($funcionarios as $f)
				<tr>
					<td>{{$f->nome}} {{$f->sobrenome}}</td>
					<td style="text-align: center;">
						<form action="../../turma/{{$f->turma_id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
							@csrf
							@method('DELETE')
							<input type="submit" value="Excluir" class="btn btn-light btn-sm" style="position: absolute;">
						</form>
					</td>
				</tr>
				@endforeach
			</table>
			<br/>
			<br/>
				<form action="/treinamento/{{$treinamento->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-light">
					<a href="/treinamento" class="btn btn-dark">Voltar</a>
				</form>
			
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