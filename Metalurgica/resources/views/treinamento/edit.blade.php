@extends('master')
@section('titulo','Editar Treinamento')
@section('corpo')
	<div class="container">
		<h3 class="text-center text-uppercase text-primary">Alterar Treinamento</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/treinamento/{{$treinamento->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					<div class="form-group">
						<label for="nome" class="text-primary">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{empty(old('nome')) ? $treinamento->nome : old('nome')}}"/>
						@if($errors->has('nome'))
						<p class="text-danger">{{$errors->first('nome')}}</p>
						@endif	
					</div>
					<div>
						<label for="fornecedor" class="text-primary">Fornecedor</label>
						<input type="text" name="fornecedor" id="fornecedor" class="form-control" value="{{empty(old('fornecedor')) ? $treinamento->fornecedor : old('fornecedor')}}"/>
						@if($errors->has('fornecedor'))
						<p class="text-danger">{{$errors->first('fornecedor')}}</p>
						@endif
					</div>
					<div>
						<label for="conteudo" class="text-primary">Conteúdo</label>
						<input type="textarea" name="conteudo" id="conteudo" class="form-control" value="{{empty(old('conteudo')) ? $treinamento->conteudo : old('conteudo')}}"/>
						@if($errors->has('conteudo'))
						<p class="text-danger">{{$errors->first('conteudo')}}</p>
						@endif
					</div>
					<div>
						<label for="inicio" class="text-primary">Início</label>
						<input type="date" name="inicio" id="inicio" class="form-control" value="{{empty(old('inicio')) ? $treinamento->inicio : old('inicio')}}"/>
						@if($errors->has('inicio'))
						<p class="text-danger">{{$errors->first('inicio')}}</p>
						@endif
					</div>
					<div>
						<label for="fim" class="text-primary">Fim</label>
						<input type="date" name="fim" id="fim" class="form-control" value="{{empty(old('fim')) ? $treinamento->fim : old('fim')}}"/>
						@if($errors->has('fim'))
						<p class="text-danger">{{$errors->first('fim')}}</p>
						@endif
					</div>
					<div>
						<label for="tipo" class="text-primary">Tipo</label>
						<input type="text" name="tipo" id="tipo" class="form-control" value="{{empty(old('tipo')) ? $treinamento->tipo : old('tipo')}}"/>
						@if($errors->has('tipo'))
						<p class="text-danger">{{$errors->first('tipo')}}</p>
						@endif
					</div>
		    		<input type="submit" value="Alterar" class="btn btn-success btn-sm"/>
		    		<a href="/treinamento" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection