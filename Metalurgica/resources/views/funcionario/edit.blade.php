@extends('master')
@section('titulo','Editar Funcionário')
@section('corpo')
	<div class="container">
		<br/>
		<hr style="border-color: black" />
		<h1 class="center text-dark"><b>ALTERAR FUNCIONÁRIO</b></h1>
		<hr style="border-color: black" />
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<form action="/funcionario/{{$funcionario->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{empty(old('nome')) ? $funcionario->nome : old('nome')}}"/>
						@if($errors->has('nome'))
						<p class="text-danger">{{$errors->first('nome')}}</p>
						@endif	
					</div>
					<br/>
					<div>
						<label for="sobrenome">Sobrenome</label>
						<input type="text" name="sobrenome" id="sobrenome" class="form-control" value="{{empty(old('sobrenome')) ? $funcionario->sobrenome : old('sobrenome')}}"/>
						@if($errors->has('sobrenome'))
						<p class="text-danger">{{$errors->first('sobrenome')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="dt_nascimento">Data de Nascimento</label>
						<input type="date" name="dt_nascimento" id="dt_nascimento" class="form-control" value="{{empty(old('dt_nascimento')) ? $funcionario->dt_nascimento : old('dt_nascimento')}}"/>
						@if($errors->has('dt_nascimento'))
						<p class="text-danger">{{$errors->first('dt_nascimento')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="estado_civil">Estado Civil</label>
						<input type="text" name="estado_civil" id="estado_civil" class="form-control" value="{{empty(old('estado_civil')) ? $funcionario->estado_civil : old('estado_civil')}}"/>
						@if($errors->has('estado_civil'))
						<p class="text-danger">{{$errors->first('estado_civil')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="nacionalidade">Nacionalidade</label>
						<input type="text" name="nacionalidade" id="nacionalidade" class="form-control" value="{{empty(old('nacionalidade')) ? $funcionario->nacionalidade : old('nacionalidade')}}"/>
						@if($errors->has('nacionalidade'))
						<p class="text-danger">{{$errors->first('nacionalidade')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="pais_onde_mora">País onde mora</label>
						<input type="text" name="pais_onde_mora" id="pais_onde_mora" class="form-control" value="{{empty(old('pais_onde_mora')) ? $funcionario->pais_onde_mora : old('pais_onde_mora')}}"/>
						@if($errors->has('pais_onde_mora'))
						<p class="text-danger">{{$errors->first('pais_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="estado_onde_mora">Estado onde mora</label>
						<input type="text" name="estado_onde_mora" id="estado_onde_mora" class="form-control" value="{{empty(old('estado_onde_mora')) ? $funcionario->estado_onde_mora : old('estado_onde_mora')}}"/>
						@if($errors->has('estado_onde_mora'))
						<p class="text-danger">{{$errors->first('estado_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="cidade_onde_mora">Cidade onde mora</label>
						<input type="text" name="cidade_onde_mora" id="cidade_onde_mora" class="form-control" value="{{empty(old('cidade_onde_mora')) ? $funcionario->cidade_onde_mora : old('cidade_onde_mora')}}"/>
						@if($errors->has('cidade_onde_mora'))
						<p class="text-danger">{{$errors->first('cidade_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="bairro_onde_mora">Bairro onde mora</label>
						<input type="text" name="bairro_onde_mora" id="bairro_onde_mora" class="form-control" value="{{empty(old('bairro_onde_mora')) ? $funcionario->bairro_onde_mora : old('bairro_onde_mora')}}"/>
						@if($errors->has('bairro_onde_mora'))
						<p class="text-danger">{{$errors->first('bairro_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="rua_onde_mora">Rua onde mora</label>
						<input type="text" name="rua_onde_mora" id="rua_onde_mora" class="form-control" value="{{empty(old('rua_onde_mora')) ? $funcionario->rua_onde_mora : old('rua_onde_mora')}}"/>
						@if($errors->has('rua_onde_mora'))
						<p class="text-danger">{{$errors->first('rua_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="numero_onde_mora">Número onde mora</label>
						<input type="number" name="numero_onde_mora" id="numero_onde_mora" class="form-control" value="{{empty(old('numero_onde_mora')) ? $funcionario->numero_onde_mora : old('numero_onde_mora')}}"/>
						@if($errors->has('numero_onde_mora'))
						<p class="text-danger">{{$errors->first('numero_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="cargo_ocupado">Cargo Ocupado</label>
						<input type="text" name="cargo_ocupado" id="cargo_ocupado" class="form-control" value="{{empty(old('cargo_ocupado')) ? $funcionario->cargo_ocupado : old('cargo_ocupado')}}"/>
						@if($errors->has('cargo_ocupado'))
						<p class="text-danger">{{$errors->first('cargo_ocupado')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="cargo_desejado">Cargo Desejado</label>
						<input type="text" name="cargo_desejado" id="cargo_desejado" class="form-control" value="{{empty(old('cargo_desejado')) ? $funcionario->cargo_desejado : old('cargo_desejado')}}"/>
						@if($errors->has('cargo_desejado'))
						<p class="text-danger">{{$errors->first('cargo_desejado')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="responsabilidades">Responsabilidades</label>
						<input type="text" name="responsabilidades" id="responsabilidades" class="form-control" value="{{empty(old('responsabilidades')) ? $funcionario->responsabilidades : old('responsabilidades')}}"/>
						@if($errors->has('responsabilidades'))
						<p class="text-danger">{{$errors->first('responsabilidades')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="formacao_academica">Formação Acadêmica</label>
						<input type="text" name="formacao_academica" id="formacao_academica" class="form-control" value="{{empty(old('formacao_academica')) ? $funcionario->formacao_academica : old('formacao_academica')}}"/>
						@if($errors->has('formacao_academica'))
						<p class="text-danger">{{$errors->first('formacao_academica')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="certificados">Certificados</label>
						<input type="text" name="certificados" id="certificados" class="form-control" value="{{empty(old('certificados')) ? $funcionario->certificados : old('certificados')}}"/>
						@if($errors->has('certificados'))
						<p class="text-danger">{{$errors->first('certificados')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="idiomas">Idiomas</label>
						<input type="text" name="idiomas" id="idiomas" class="form-control" value="{{empty(old('idiomas')) ? $funcionario->idiomas : old('idiomas')}}"/>
						@if($errors->has('idiomas'))
						<p class="text-danger">{{$errors->first('idiomas')}}</p>
						@endif
					</div>
					<br/>
					<div>
		    			<input type="submit" value="Alterar" class="btn btn-light"/>
		    			<a href="/funcionario" class="btn btn-dark">Voltar</a>
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