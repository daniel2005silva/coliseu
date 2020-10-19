@extends('master')
@section('titulo','Editar Fornecedor')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="center text-dark">ALTERAR FORNECEDOR</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<form action="/fornecedor/{{$fornecedor->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					<div class="form-group">
						<label for="empresa">Empresa</label>
						<input type="text" name="empresa" id="empresa" class="form-control" value="{{empty(old('empresa')) ? $fornecedor->empresa : old('empresa')}}"/>
						@if($errors->has('empresa'))
						<p class="text-danger">{{$errors->first('empresa')}}</p>
						@endif	
					</div>
					<br/>
					<div>
						<label for="cnpj">CNPJ</label>
						<input type="text" name="cnpj" id="cnpj" class="form-control" value="{{empty(old('cnpj')) ? $fornecedor->cnpj : old('cnpj')}}"/>
						@if($errors->has('cnpj'))
						<p class="text-danger">{{$errors->first('cnpj')}}</p>
						@endif
					</div>
					<br/>
					<div>
		    			<input type="submit" value="Alterar" class="btn btn-light"/>
		    			<a href="/fornecedor" class="btn btn-dark">Voltar</a>
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