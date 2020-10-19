@extends('master')
@section('titulo','Lista de Funcionários')
@section('corpo')
<br/>
<h1 class="text-center text-uppercase text-dark">FUNCIONÁRIOS</h1>
<br/>
<table class="table table-striped">
<tr class="bg-dark text-white">
	<th>NOME</th>
	<th>DATA DE NASCIMENTO</th>
	<th>CARGO OCUPADO</th>
	<th>COMANDO</th>
</tr>
<!-- Loop pela coleção de funcionários -->
@foreach($funcionarios as $f)
<tr>
	<td>{{$f->nome}}</td>
	<td>{{$f->dt_nascimento}}</td>
	<td>{{$f->cargo_ocupado}}</td>
	<td>
		<a href="/funcionario/{{$f->id}}" class="btn btn-secondary btn-sm">Detalhe</a>
		<a href="/funcionario/{{$f->id}}/edit" class="btn btn-dark btn-sm">Editar</a>
	</td>
</tr> 
@endforeach
</table>

  <div class="row">
    <div class="col center">
		<a href="/funcionario/create" class="btn btn-dark btn-sm">Adicionar Novo Funcionário</a>
	</div>
    <div class="col-md-auto">
    	{{ $funcionarios->links() }}
    </div>
    <div class="col center">
		<a href="../treinamento/" class="btn btn-dark btn-sm">Visualizar Treinamentos</a>
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