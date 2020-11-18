@extends('master')
@section('titulo','Experiência profissional')
@section('corpo')
<div class="container">
<br/>
<h1 class="text-center text-uppercase text-dark">EXPERIÊNCIA PROFISSIONAL DO </h1>
<br/>
<table class="table table-striped">
<tr class="bg-dark text-white">
	<th>EMPESA</th>
	<th>CARGO OCUPADO</th>
	<th>ANO</th>
	<th>RESPONSABILIDADES</th>
	<th>COMANDO</th>
</tr>
<!-- Loop pela coleção de departamentos -->
@foreach($experienciasprofissionais as $e)
<tr >
	<td>{{$e->empresa}}</td>
	<td>{{$e->cargo_ocupado}}</td>
	<td>{{$e->ano}}</td>
	<td>{{$e->responsabilidades}}</td>
	<th>
		<a href="/turma/{{$e->id}}" class="btn btn-secondary btn-sm">Detalhe</a>
		<a href="/turma/{{$e->id}}/edit" class="btn btn-dark btn-sm">Editar</a>
	</th>
</tr> 
@endforeach
</table>

  <div class="row">
    <div class="col center">
		<a href="./create" class="btn btn-dark btn-sm">Adicionar Nova Experiência</a>
	</div>
    <div class="col-md-auto">
		{{$experienciasprofissionais->links() }}
	</div>
    <div class="col center">
		<a href="../funcionario/" class="btn btn-dark btn-sm">Visualizar Funcionários</a>
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