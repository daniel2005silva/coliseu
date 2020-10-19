@extends('master')
@section('titulo','Atribuir Treinamento')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="text-center text-uppercase text-dark">NOVA ATRIBUIÇÃO DE TREINAMENTO</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<form action="/funcionario_treinamento" method="post">
					@csrf  <!-- token de segurança -->
					<div class="form-group">
						<label for="nome" class="text-dark">Nome do Treinamento</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}"/>
						@if($errors->has('nome'))
						<p class="text-danger">{{$errors->first('nome')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="fornecedor" class="text-dark">Funcionário</label>
						<input type="text" name="fornecedor" id="fornecedor" class="form-control" value="{{old('fornecedor')}}"/>
						@if($errors->has('fornecedor'))
						<p class="text-danger">{{$errors->first('fornecedor')}}</p>
						@endif
					</div>
					<br/>
					
					<div class="form-group">
		    				<input type="submit" value="Atribuir" class="btn btn-light"/>
		    				<a href="/funcionario_treinamento" class="btn btn-dark">Voltar</a>
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