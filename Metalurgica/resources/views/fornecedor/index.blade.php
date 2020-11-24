@extends('master')
@section('titulo','Lista de Fornecedores')
@section('corpo')
<div class="fundoFor">
<br/>
@foreach($totalFornecedores as $tlf)
	<p class="btn btn-primary" style="position: absolute; margin-left: 1000px">Total: {{$tlf->total}}</p>
@endforeach
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
	</td>
</tr> 
@endforeach
</table>

 <div class="row">
    <div class="col center">
		<a href="/fornecedor/create" class="btn btn-primary btn-sm">Adicionar Novo Fornecedor</a>
	</div>
    <div class="col-md-auto">
    	{{ $fornecedores->links() }}
    </div>
    <div class="col center">
		<a href="..\fornecedor\" class="btn btn-dark btn-sm">Visualizar Fornecedor</a>
	</div>
  </div>

</div>
@endsection


<style type="text/css">
	.center {
    	text-align:  center;
	}
	.fundoFor{
		height: 100%;
	}
</style>