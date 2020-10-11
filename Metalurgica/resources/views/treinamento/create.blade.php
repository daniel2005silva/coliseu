@extends('master')
@section('titulo','Criar Treinamento')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="text-center text-uppercase text-dark">Novo Treinamento</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<form action="/treinamento" method="post">
					@csrf  <!-- token de segurança -->
					<div class="form-group">
						<label for="nome" class="text-dark">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}"/>
						@if($errors->has('nome'))
						<p class="text-danger">{{$errors->first('nome')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="fornecedor" class="text-dark">Fornecedor</label>
						<input type="text" name="fornecedor" id="fornecedor" class="form-control" value="{{old('fornecedor')}}"/>
						@if($errors->has('fornecedor'))
						<p class="text-danger">{{$errors->first('fornecedor')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="conteudo" class="text-dark">Contéudo</label>
						<input type="textarea" name="conteudo" id="conteudo" class="form-control" value="{{old('conteudo')}}"/>
						@if($errors->has('conteudo'))
						<p class="text-danger">{{$errors->first('conteudo')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="inicio" class="text-dark">Início</label>
						<input type="date" name="inicio" id="inicio" class="form-control" value="{{old('inicio')}}"/>
						@if($errors->has('inicio'))
						<p class="text-danger">{{$errors->first('inicio')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="fim" class="text-dark">Fim</label>
						<input type="date" name="fim" id="fim" class="form-control" value="{{old('fim')}}"/>
						@if($errors->has('fim'))
						<p class="text-danger">{{$errors->first('fim')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="tipo" class="text-dark">Tipo</label>
						<input type="text" name="tipo" id="tipo" class="form-control" value="{{old('tipo')}}"/>
						@if($errors->has('tipo'))
						<p class="text-danger">{{$errors->first('tipo')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
		    				<input type="submit" value="Criar" class="btn btn-light"/>
		    				<a href="/treinamento" class="btn btn-dark">Voltar</a>
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