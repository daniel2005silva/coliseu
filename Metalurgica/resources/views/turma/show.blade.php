@extends('master')
@section('titulo','Turmas')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="text-center text-uppercase text-dark">Turmas</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt class="text-dark">Treinamento</dt>
					@foreach($treinamento as $t)
							<dd>{{$t->treinamento}}</dd>
					@endforeach
					<dt class="text-dark">Alunos</dt>
					@foreach($funcionarios as $f)
						<dd>{{$f->nome}} {{$f->sobrenome}}</dd>
					@endforeach
				</dl>
				<form action="/turma/{{$turma->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-light">
					<a href="/turma" class="btn btn-dark">Voltar</a>
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