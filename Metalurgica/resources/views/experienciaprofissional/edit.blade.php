@extends('master')
@section('titulo','Editar Experiencia')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="text-center text-uppercase text-dark">Editar Experiencia</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<form action="/experienciaprofissional/{{$experienciasprofissionais->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					@foreach($funcionario as $f)
					<div class="form-group">
						<label for="funcionario_id">Funcionario</label>
						<input type="text" name="funcionario" id="funcionario" class="form-control" value="{{$f->nome}} {{$f->sobrenome}}" disabled/>
						<input type="hidden" name="funcionario_id" id="funcionario_id" class="form-control" value="{{$f->id}}"/>
					</div>
					<br/>
					@endforeach
					<div class="form-group">
						<label for="empresa">Empresa</label>
						<input type="text" name="empresa" id="empresa" class="form-control" value="{{empty(old('empresa')) ? $experienciasprofissionais->empresa : old('empresa')}}"/>
						@if($errors->has('empresa'))
						<p class="text-danger">{{$errors->first('empresa')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="cargo_ocupado">Cargo ocupaddo</label>
						<input type="text" name="cargo_ocupado" id="cargo_ocupado" class="form-control" value="{{empty(old('cargo_ocupado')) ? $experienciasprofissionais->cargo_ocupado : old('cargo_ocupado')}}"/>
						@if($errors->has('cargo_ocupado'))
						<p class="text-danger">{{$errors->first('cargo_ocupado')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="ano">Ano</label>
						<input type="number" name="ano" id="ano" class="form-control" value="{{empty(old('ano')) ? $experienciasprofissionais->ano : old('ano')}}"/>
						@if($errors->has('ano'))
						<p class="text-danger">{{$errors->first('ano')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="responsabilidades">Responsabilidades</label>
						<input type="text" name="responsabilidades" id="responsabilidades" class="form-control" value="{{empty(old('responsabilidades')) ? $experienciasprofissionais->responsabilidades : old('responsabilidades')}}"/>
						@if($errors->has('responsabilidades'))
						<p class="text-danger">{{$errors->first('responsabilidades')}}</p>
						@endif
					</div>
					<br/>
					<div>
		    			<input type="submit" value="Alterar" class="btn btn-light"/>
		    			<a href="../../funcionario/" class="btn btn-dark">Voltar</a>
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