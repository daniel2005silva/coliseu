@extends('master')
@section('titulo','Criar Funcionário')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="center text-dark">NOVO FUNCIONÁRIO</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<form action="/funcionario" method="post">
					@csrf  <!-- token de segurança -->
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}"/>
						@if($errors->has('nome'))
						<p class="text-danger">{{$errors->first('nome')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="sobrenome">Sobrenome</label>
						<input type="text" name="sobrenome" id="sobrenome" class="form-control" value="{{old('sobrenome')}}"/>
						@if($errors->has('sobrenome'))
						<p class="text-danger">{{$errors->first('sobrenome')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="dt_nascimento">Data de Nascimento</label>
						<input type="date" name="dt_nascimento" id="dt_nascimento" class="form-control" value="{{old('dt_nascimento')}}"/>
						@if($errors->has('dt_nascimento'))
						<p class="text-danger">{{$errors->first('dt_nascimento')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="estado_civil">Estado Civil</label>
						<input type="text" name="estado_civil" id="estado_civil" class="form-control" value="{{old('estado_civil')}}"/>
						@if($errors->has('estado_civil'))
						<p class="text-danger">{{$errors->first('estado_civil')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="nacionalidade">Nacionalidade</label>
						<input type="text" name="nacionalidade" id="nacionalidade" class="form-control" value="{{old('nacionalidade')}}"/>
						@if($errors->has('nacionalidade'))
						<p class="text-danger">{{$errors->first('nacionalidade')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="pais_onde_mora">País onde mora</label>
						<input type="text" name="pais_onde_mora" id="pais_onde_mora" class="form-control" value="{{old('pais_onde_mora')}}"/>
						@if($errors->has('pais_onde_mora'))
						<p class="text-danger">{{$errors->first('pais_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="estado_onde_mora">Estado onde mora</label>
						<input type="text" name="estado_onde_mora" id="estado_onde_mora" class="form-control" value="{{old('estado')}}"/>
						@if($errors->has('estado_onde_mora'))
						<p class="text-danger">{{$errors->first('estado_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="cidade_onde_mora">Cidade onde mora</label>
						<input type="text" name="cidade_onde_mora" id="cidade_onde_mora" class="form-control" value="{{old('cidade_onde_mora')}}"/>
						@if($errors->has('cidade_onde_mora'))
						<p class="text-danger">{{$errors->first('cidade_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="bairro_onde_mora">Bairro onde mora</label>
						<input type="text" name="bairro_onde_mora" id="bairro_onde_mora" class="form-control" value="{{old('bairro_onde_mora')}}"/>
						@if($errors->has('bairro_onde_mora'))
						<p class="text-danger">{{$errors->first('bairro_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="rua_onde_mora">Rua onde mora</label>
						<input type="text" name="rua_onde_mora" id="rua_onde_mora" class="form-control" value="{{old('rua_onde_mora')}}"/>
						@if($errors->has('rua_onde_mora'))
						<p class="text-danger">{{$errors->first('rua_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="numero_onde_mora">Número onde mora</label>
						<input type="number" name="numero_onde_mora" id="numero_onde_mora" class="form-control" value="{{old('numero')}}"/>
						@if($errors->has('numero_onde_mora'))
						<p class="text-danger">{{$errors->first('numero_onde_mora')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="cargo_ocupado">Cargo Ocupado</label>
						<input type="text" name="cargo_ocupado" id="cargo_ocupado" class="form-control" value="{{old('cargo_ocupado')}}"/>
						@if($errors->has('cargo_ocupado'))
						<p class="text-danger">{{$errors->first('cargo_ocupado')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="cargo_desejado">Cargo Desejado</label>
						<input type="text" name="cargo_desejado" id="cargo_desejado" class="form-control" value="{{old('cargo_desejado')}}"/>
						@if($errors->has('cargo_desejado'))
						<p class="text-danger">{{$errors->first('cargo_desejado')}}</p>
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
						<label for="formacao_academica">Formação Acadêmica</label>
						<textarea name="formacao_academica" id="formacao_academica" class="form-control" value="{{old('formacao_academica')}}">Digite: nome da formação - ano de início - ano de término
						</textarea>
						@if($errors->has('formacao_academica'))
						<p class="text-danger">{{$errors->first('formacao_academica')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="certificados">Certificados</label>
						<textarea name="certificados" id="certificados" class="form-control" value="{{old('certificados')}}">Digite: nome do certificado - ano de início - ano de término
						</textarea>
						@if($errors->has('certificados'))
						<p class="text-danger">{{$errors->first('certificados')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="idiomas">Idiomas</label>
						<input type="text" name="idiomas" id="idiomas" class="form-control" value="{{old('idiomas')}}"/>
						@if($errors->has('idiomas'))
						<p class="text-danger">{{$errors->first('idiomas')}}</p>
						@endif
					</div>
					<br/>
		    		<input type="submit" value="Criar" class="btn btn-light"/>
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
	.container{
		
	}
</style>