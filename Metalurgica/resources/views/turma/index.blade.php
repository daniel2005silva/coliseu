@extends('master')
@section('titulo','Lista de Turmas')
@section('corpo')
<br/>
<h1 class="text-center text-uppercase text-dark">Turmas</h1>
<br/>
<table class="table table-striped">
<tr class="bg-dark text-white">
	<th>NOME</th>
	<th>TREINAMENTO</th>
	<th>TOTAL DE ALUNOS</th>
	<th>COMANDO</th>
</tr>
<!-- Loop pela coleção de departamentos -->
@foreach($turmas as $ts)
<tr >
	<td>{{$ts->created_at}}</td>
	<td>
		@foreach($treinamento = $ts->treinamento()->get() as $t)
			{{$t->treinamento}}
		@endforeach
	</td>
	<td></td>
	<th>
		<a href="/turma/{{$ts->id}}" class="btn btn-secondary btn-sm">Detalhe</a>
		<a href="/turma/{{$ts->id}}/edit" class="btn btn-dark btn-sm">Editar</a>
	</th>
</tr> 
@endforeach
</table>

  <div class="row">
    <div class="col center">
		<a href="../treinamento/" class="btn btn-dark btn-sm">Adicionar Nova Turma</a>
	</div>
    <div class="col-md-auto">
		{{$turmas->links() }}
	</div>
    <div class="col center">
		<a href="../funcionario/" class="btn btn-dark btn-sm">Visualizar Funcionários</a>
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