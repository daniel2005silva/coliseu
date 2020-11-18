@extends('master')
@section('titulo','Nova Experiência Profissional')
@section('corpo')
	<div class="container">
		<br/>
		<hr style="border-color: black" />
		<h1 class="text-center text-uppercase text-dark"><b>NOVA EXPERIÊNCIA PROFISSIONAL</b></h1>
		<hr style="border-color: black" />
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<form action="/experienciaprofissional" method="post">
					@csrf  <!-- token de segurança -->
					@csrf  <!-- token de segurança -->
					<div class="form-group">
						<label for="funcionario_id">Funcionário</label>
						<input type="text" name="funcionario" id="funcionario" class="form-control" value="{{$funcionario_id->nome}} {{$funcionario_id->sobrenome}}" disabled/>
						<input type="hidden" name="funcionario_id" id="funcionario_id" class="form-control" value="{{$funcionario_id->id}}"/>
					</div>
					<br/>
					<div class="form-group">
						<label for="empresa">Empresa</label>
						<input type="text" name="empresa" id="empresa" class="form-control" value="{{old('empresa')}}"/>
						@if($errors->has('empresa'))
						<p class="text-danger">{{$errors->first('empresa')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="cargo_ocupado">Cargo ocupado</label>
						<input type="text" name="cargo_ocupado" id="cargo_ocupado" class="form-control" value="{{old('cargo_ocupado')}}"/>
						@if($errors->has('cargo_ocupado'))
						<p class="text-danger">{{$errors->first('cargo_ocupado')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="ano">Ano</label>
						<input type="number" name="ano" id="ano" class="form-control" value="{{old('ano')}}"/>
						@if($errors->has('ano'))
						<p class="text-danger">{{$errors->first('ano')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="responsabilidades">Responsabilidades</label>
						<textarea name="responsabilidades" id="responsabilidades" class="form-control" value="{{old('responsabilidades')}}">
							</textarea>
						@if($errors->has('responsabilidades'))
						<p class="text-danger">{{$errors->first('responsabilidades')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
		    				<input type="submit" value="Atribuir" class="btn btn-light"/>
		    				<a href="../../funcionario/{{$funcionario_id->id}}" class="btn btn-dark">Voltar</a>
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
	.container{
		height: 100%;
	}
</style>