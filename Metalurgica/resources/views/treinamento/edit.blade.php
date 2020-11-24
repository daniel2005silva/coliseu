@extends('master')
@section('titulo','Editar Treinamento')
@section('corpo')
	<div class="container">
		<br/>
		<hr style="border-color: black" />
		<h1 class="text-center text-uppercase text-dark"><b>Alterar Treinamento</b></h1>
		<hr style="border-color: black" />
		<br/>
		<div class="row">
			<div class="col-sm-6">
				<form action="/treinamento/{{$treinamento->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					<div class="form-group">
						<label for="treinamento" class="text-dark">Nome</label>
						<input type="text" name="treinamento" id="treinamento" class="form-control" value="{{empty(old('treinamento')) ? $treinamento->treinamento : old('treinamento')}}"/>
						@if($errors->has('treinamento'))
						<p class="text-danger">{{$errors->first('treinamento')}}</p>
						@endif	
					</div>
					<br/>
					<div>
						<label for="fornecedor_id" class="text-dark">Fornecedor</label>
						<select name="fornecedor_id" id="fornecedor_id" class="form-control">
							@foreach($fornecedores as $fs)
							<option value="{{empty(old('fornecedor_id')) ? $fs->id : old('fornecedor_id')}}">{{$fs->empresa}}</option>
							@endforeach
						</select>
						@if($errors->has('fornecedor_id'))
						<p class="text-danger">{{$errors->first('fornecedor_id')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="descricao" class="text-dark">Descrição</label>
						<input type="textarea" name="descricao" id="descricao" class="form-control" value="{{empty(old('descricao')) ? $treinamento->descricao : old('descricao')}}"/>
						@if($errors->has('descricao'))
						<p class="text-danger">{{$errors->first('descricao')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="conteudo" class="text-dark">Conteúdo</label>
						<input type="textarea" name="conteudo" id="conteudo" class="form-control" value="{{empty(old('conteudo')) ? $treinamento->conteudo : old('conteudo')}}"/>
						@if($errors->has('conteudo'))
						<p class="text-danger">{{$errors->first('conteudo')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="dt_inicio" class="text-dark">Data de início</label>
						<input type="date" name="dt_inicio" id="dt_inicio" class="form-control" value="{{empty(old('dt_inicio')) ? $treinamento->dt_inicio : old('dt_inicio')}}"/>
						@if($errors->has('dt_inicio'))
						<p class="text-danger">{{$errors->first('dt_inicio')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="dt_termino" class="text-dark">Data de termino</label>
						<input type="date" name="dt_termino" id="dt_termino" class="form-control" value="{{empty(old('dt_termino')) ? $treinamento->dt_termino : old('dt_termino')}}"/>
						@if($errors->has('dt_termino'))
						<p class="text-danger">{{$errors->first('dt_termino')}}</p>
						@endif
					</div>
					<br/>
					<div>
						<label for="tipo" class="text-dark">Tipo</label>
						<input type="text" name="tipo" id="tipo" class="form-control" value="{{empty(old('tipo')) ? $treinamento->tipo : old('tipo')}}"/>
						@if($errors->has('tipo'))
						<p class="text-danger">{{$errors->first('tipo')}}</p>
						@endif
					</div>
					<br/>
					<div>
		    			<input type="submit" value="Alterar" class="btn btn-light"/>
		    			<a href="/treinamento" class="btn btn-dark">Voltar</a>
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
		
	}
</style>