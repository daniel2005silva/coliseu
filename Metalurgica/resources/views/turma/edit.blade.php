@extends('master')
@section('titulo','Editar Turma')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="text-center text-uppercase text-dark">Alterar Turma</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<form action="/turma/{{$turma->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					<div class="form-group">
						<label for="treinamento_id" class="text-dark">Treinamento</label>
						<p>
							{{$treinamento->treinamento}}
							<input type="hidden" name="treinamento_id" id="treinamento_id" value="{{$treinamento->id}}">
						</p>
						@if($errors->has('treinamento_id'))
						<p class="text-danger">{{$errors->first('treinamento_id')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="funcionarios" class="text-dark">Funcionários</label>
						@foreach($funcionarios as $f)
							<p>
								<input type="checkbox" name="funcionario_id" id="funcionario_id" value="{{empty(old('funcionario_id')) ? $f->funcionario_id : old('funcionario_id')}}">{{$f->nome}} {{$f->sobrenome}}
							</p>
						@endforeach
						@if($errors->has('funcionarios'))
						<p class="text-danger">{{$errors->first('funcionarios')}}</p>
						@endif
					</div>
					<br/>
					<div>
		    			<input type="submit" value="Alterar" class="btn btn-light"/>
		    			<a href="/turma" class="btn btn-dark">Voltar</a>
		    		</div>
				</form>
			</div>
		</div>
	</div>
@endsection
<style type="text/css">
	.center {
    	text-align:  center;
	}
	
</style>