@extends('master')
@section('titulo','Lista de Funcionários')
@section('corpo')
<div class="fundoFun">
<br/>
@foreach($totalFuncionarios as $tlf)
	<p class="btn btn-primary" style="position: absolute; margin-left: 1000px">Total: {{$tlf->total}}</p>
@endforeach
<h1 class="text-center text-uppercase text-dark">FUNCIONÁRIOS</h1>


<br/>
<table class="table table-striped">
<tr class="bg-dark text-white">
	<th>NOME</th>
	<th>DATA DE NASCIMENTO</th>
	<th>CARGO OCUPADO</th>
	<th style="text-align: center; width: 150px">COMANDO</th>
</tr>
<!-- Loop pela coleção de funcionários -->
@foreach($funcionarios as $f)
<tr>
	<td>{{$f->nome}}</td>
	<td>{{$f->dt_nascimento}}</td>
	<td>{{$f->cargo_ocupado}}</td>
	<td style="text-align: right">
		<a href="/funcionario/{{$f->id}}" class="btn btn-secondary btn-sm">Detalhe</a>
		<a href="/funcionario/{{$f->id}}/edit" class="btn btn-dark btn-sm">Editar</a>
	</td>
</tr> 
@endforeach
</table>

  <div class="row">
    <div class="col center">
		<a href="/funcionario/create" class="btn btn-primary btn-sm">Adicionar Novo Funcionário</a>
	</div>
    <div class="col-md-auto">
    	{{ $funcionarios->links() }}
    </div>
    <div class="col center">
		<a href="../curriculo/" class="btn btn-dark btn-sm">Visualizar Currículos</a>
	</div>
  </div>

</div>
@endsection


<style type="text/css">
	.center {
    	text-align:  center;
	}
	.fundoFun{
		height: 100%;
	}

</style>