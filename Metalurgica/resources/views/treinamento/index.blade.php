@extends('master')
@section('titulo','Lista de Treinamentos')
@section('corpo')
<div >
<br/>
@foreach($totalTreinamentos as $tlt)
	<p class="btn btn-primary" style="position: absolute; margin-left: 1000px">Total: {{$tlt->total}}</p>
@endforeach
<h1 class="text-center text-uppercase text-dark">Treinamentos</h1>
<br/>
<table class="table table-striped">
<tr class="bg-dark text-white">
	<th>NOME</th>
	<th>DATA DE INÍCIO</th>
	<th>DATA DE TÉRMINO</th>
	<th>FORNECEDOR</th>
	<th>COMANDO</th>
</tr>
<!-- Loop pela coleção de departamentos -->
@foreach($treinamentos as $t)
<tr >
	<td>{{$t->treinamento}}</td>
	<td>{{$t->dt_inicio}}</td>
	<td>{{$t->dt_termino}}</td>
	<td>
		@foreach($fornecedor = $t->fornecedor()->get() as $f)
			{{$f->empresa}}
		@endforeach
	</td>
	<th>
		<a href="/treinamento/{{$t->id}}" class="btn btn-secondary btn-sm">Detalhe</a>
		<a href="/treinamento/{{$t->id}}/edit" class="btn btn-dark btn-sm">Editar</a>
		<a href="../turma/create/{{$t->id}}" class="btn btn-light btn-sm">Atribuir</a>	
	</th>
</tr> 
@endforeach
</table>

  <div class="row">
    <div class="col center">
		<a href="/treinamento/create" class="btn btn-dark btn-sm">Adicionar Novo Treinamento</a>
	</div>
    <div class="col-md-auto">
		{{$treinamentos->links() }}
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
	
</style>