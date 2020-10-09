@extends('master')
@section('titulo','Editar Funcionário')
@section('corpo')
	<div class="container">
		<h3>Novo Funcionário</h3>
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
					<div>
						<label for="sobrenome">Sobrenome</label>
						<input type="text" name="sobrenome" id="sobrenome" class="form-control" value="{{empty(old('sobrenome')) ? $funcionario->sobrenome : old('sobrenome')}}"/>
						@if($errors->has('sobrenome'))
						<p class="text-danger">{{$errors->first('sobrenome')}}</p>
						@endif
					</div>
					<div>
						<label for="dt_nascimento">Data de Nascimento</label>
						<input type="date" name="dt_nascimento" id="dt_nascimento" class="form-control" value="{{empty(old('dt_nascimento')) ? $funcionario->dt_nascimento : old('dt_nascimento')}}"/>
						@if($errors->has('dt_nascimento'))
						<p class="text-danger">{{$errors->first('dt_nascimento')}}</p>
						@endif
					</div>
					<div>
						<label for="estado_civil">Estado Civil</label>
						<input type="text" name="estado_civil" id="estado_civil" class="form-control" value="{{empty(old('estado_civil')) ? $funcionario->estado_civil : old('estado_civil')}}"/>
						@if($errors->has('estado_civil'))
						<p class="text-danger">{{$errors->first('estado_civil')}}</p>
						@endif
					</div>
					<div>
						<label for="pais">País</label>
						<input type="text" name="pais" id="pais" class="form-control" value="{{empty(old('pais')) ? $funcionario->pais : old('pais')}}"/>
						@if($errors->has('pais'))
						<p class="text-danger">{{$errors->first('pais')}}</p>
						@endif
					</div>
					<div>
						<label for="estado">Estado</label>
						<input type="text" name="estado" id="estado" class="form-control" value="{{empty(old('estado')) ? $funcionario->estado : old('estado')}}"/>
						@if($errors->has('estado'))
						<p class="text-danger">{{$errors->first('estado')}}</p>
						@endif
					</div>
					<div>
						<label for="cidade">Cidade</label>
						<input type="text" name="cidade" id="cidade" class="form-control" value="{{empty(old('cidade')) ? $funcionario->cidade : old('cidade')}}"/>
						@if($errors->has('cidade'))
						<p class="text-danger">{{$errors->first('cidade')}}</p>
						@endif
					</div>
					<div>
						<label for="bairro">Bairro</label>
						<input type="text" name="bairro" id="bairro" class="form-control" value="{{empty(old('bairro')) ? $funcionario->bairro : old('bairro')}}"/>
						@if($errors->has('bairro'))
						<p class="text-danger">{{$errors->first('bairro')}}</p>
						@endif
					</div>
					<div>
						<label for="rua">Rua</label>
						<input type="text" name="rua" id="rua" class="form-control" value="{{empty(old('rua')) ? $funcionario->rua : old('rua')}}"/>
						@if($errors->has('rua'))
						<p class="text-danger">{{$errors->first('rua')}}</p>
						@endif
					</div>
					<div>
						<label for="numero">Número</label>
						<input type="number" name="numero" id="numero" class="form-control" value="{{empty(old('numero')) ? $funcionario->numero : old('numero')}}"/>
						@if($errors->has('numero'))
						<p class="text-danger">{{$errors->first('numero')}}</p>
						@endif
					</div>
					<div>
						<label for="cargo_ocupado">Cargo Ocupado</label>
						<input type="text" name="cargo_ocupado" id="cargo_ocupado" class="form-control" value="{{empty(old('cargo_ocupado')) ? $funcionario->cargo_ocupado : old('cargo_ocupado')}}"/>
						@if($errors->has('cargo_ocupado'))
						<p class="text-danger">{{$errors->first('cargo_ocupado')}}</p>
						@endif
					</div>
					<div>
						<label for="cargo_desejado">Cargo Desejado</label>
						<input type="text" name="cargo_desejado" id="cargo_desejado" class="form-control" value="{{empty(old('cargo_desejado')) ? $funcionario->cargo_desejado : old('cargo_desejado')}}"/>
						@if($errors->has('cargo_desejado'))
						<p class="text-danger">{{$errors->first('cargo_desejado')}}</p>
						@endif
					</div>
					<div>
						<label for="responsabilidades">Responsabilidades</label>
						<input type="text" name="responsabilidades" id="responsabilidades" class="form-control" value="{{empty(old('responsabilidades')) ? $funcionario->responsabilidades : old('responsabilidades')}}"/>
						@if($errors->has('responsabilidades'))
						<p class="text-danger">{{$errors->first('responsabilidades')}}</p>
						@endif
					</div>
					<div>
						<label for="formacao_academica">Formação Acadêmica</label>
						<input type="text" name="formacao_academica" id="formacao_academica" class="form-control" value="{{empty(old('formacao_academica')) ? $funcionario->formacao_academica : old('formacao_academica')}}"/>
						@if($errors->has('formacao_academica'))
						<p class="text-danger">{{$errors->first('formacao_academica')}}</p>
						@endif
					</div>
					<div>
						<label for="certificados">Certificados</label>
						<input type="text" name="certificados" id="certificados" class="form-control" value="{{empty(old('certificados')) ? $funcionario->certificados : old('certificados')}}"/>
						@if($errors->has('certificados'))
						<p class="text-danger">{{$errors->first('certificados')}}</p>
						@endif
					</div>
					<div>
						<label for="idiomas">Idiomas</label>
						<input type="text" name="idiomas" id="idiomas" class="form-control" value="{{empty(old('idiomas')) ? $funcionario->idiomas : old('idiomas')}}"/>
						@if($errors->has('idiomas'))
						<p class="text-danger">{{$errors->first('idiomas')}}</p>
						@endif
					</div>
		    		<input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
		    		<a href="/funcionario" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection