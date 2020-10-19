@extends('master')
@section('titulo','Criar Fornecedor')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="center text-dark">NOVO FORNECEDOR</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<form action="/fornecedor" method="post">
					@csrf  <!-- token de segurança -->
					<div class="form-group">
						<label for="empresa">Empresa</label>
						<input type="text" name="empresa" id="empresa" class="form-control" value="{{old('empresa')}}"/>
						@if($errors->has('empresa'))
						<p class="text-danger">{{$errors->first('empresa')}}</p>
						@endif
					</div>
					<br/>
					<div class="form-group">
						<label for="cnpj">CNPJ</label>
						<input type="text" name="cnpj" id="cnpj" class="form-control" value="{{old('cnpj')}}"/>
						@if($errors->has('cnpj'))
						<p class="text-danger">{{$errors->first('cnpj')}}</p>
						@endif
					</div>
					<br/>
		    		<input type="submit" value="Confirmar" class="btn btn-light"/>
		    		<a href="/fornecedor" class="btn btn-dark">Voltar</a>
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