@extends('master')
@section('titulo','Lista de Fornecedores')
@section('corpo')
<br/>
<h1 class="text-center text-uppercase text-dark">FORNECEDORES</h1>
<br/>
<table class="table table-striped">
<tr class="bg-dark text-white">
	<th>EMPRESA</th>
	<th>CNPJ</th>
	<th class="text-right">COMANDO</th>
</tr>
<!-- Loop pela coleção de funcionários -->
@foreach($fornecedores as $fs)
<tr>
	<td>{{$fs->empresa}}</td>
	<td>{{$fs->cnpj}}</td>
	<td class="text-right">
		<a href="/fornecedor/{{$fs->id}}" class="btn btn-secondary btn-sm">Detalhe</a>
		<a href="/fornecedor/{{$fs->id}}/edit" class="btn btn-dark btn-sm">Editar</a>
		<a href="/treinamento/{{$fs->id}}" class="btn btn-light btn-sm">Treinamentos</a>
	</td>
</tr> 
@endforeach
</table>

 <div class="row">
    <div class="col center">
		<a href="/fornecedor/create" class="btn btn-dark btn-sm">Adicionar Novo Fornecedor</a>
	</div>
    <div class="col-md-auto">
    	{{ $fornecedores->links() }}
    </div>
    <div class="col center">
		<a href="..\fornecedor\" class="btn btn-dark btn-sm">Visualizar Fornecedor</a>
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