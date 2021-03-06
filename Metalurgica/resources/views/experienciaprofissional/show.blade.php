@extends('master')
@section('titulo','Experiência Profissional')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="text-center text-uppercase text-dark">Experiência Profissional</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt class="text-dark">Funcionário</dt>
					@foreach($funcionario as $f)
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$f->nome}} {{$f->sobrenome}}</dd>
					@endforeach
					<dt class="text-dark">Empresa</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$experienciaprofissional->empresa}}</dd>
					<dt class="text-dark">Cargo ocupado</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$experienciaprofissional->cargo_ocupado}}</dd>
					<dt class="text-dark">Ano</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$experienciaprofissional->ano}}</dd>
					<dt class="text-dark">Responsabilidades</dt>
					<dd>&nbsp&nbsp&nbsp&nbsp&nbsp{{$experienciaprofissional->responsabilidades}}</dd>
				</dl>
				<form action="/experienciaprofissional/{{$experienciaprofissional->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-light">
					<a href="../../funcionario/{{$f->id}}" class="btn btn-dark">Voltar</a>
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