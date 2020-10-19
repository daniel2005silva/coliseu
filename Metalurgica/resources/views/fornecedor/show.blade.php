@extends('master')
@section('titulo','Fornecedor')
@section('corpo')
	<div class="container">
		<br/>
		<h1 class="center text-dark">FORNECEDOR</h1>
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Empresa</dt>
					<dd>{{$fornecedor->empresa}}</dd>
					<dt>CNPJ</dt>
					<dd>{{$fornecedor->cnpj}}</dd>
				</dl>
				<form action="/fornecedor/{{$fornecedor->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-light">
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
	.col-sm-6{
		height: 100%;

	}
	dt{
		font-size: 20px;
	}
	.container{
		height: 100%;
	}
</style>