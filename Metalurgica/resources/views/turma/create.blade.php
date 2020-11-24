@extends('master')
@section('titulo','Nova Turma')
@section('corpo')
	<div class="container">
		<br/>
		<hr style="border-color: black" />
		<h1 class="text-center text-uppercase text-dark"><b>NOVA TURMA</b></h1>
		<hr style="border-color: black" />
		<br/>
		<div class="row">
			<div class="col-sm-6">
				
					
					<div class="form-group">
						<label for="treinamento_id" class="text-dark">Treinamento</label>
						<p>
							&nbsp&nbsp&nbsp&nbsp&nbsp{{$treinamento->treinamento}}
							
						</p>
						
					</div>
					<br/>
					<div class="form-group">
						<label for="funcionarios" class="text-dark">Funcionários</label>
						@foreach($funcionarios as $f)
							<p>
								<form action="/turma" method="post">
									@csrf  <!-- token de segurança -->
								<input type="hidden" name="treinamento_id" id="treinamento_id" value="{{$treinamento->id}}">
								@if($errors->has('treinamento_id'))
									<p class="text-danger">{{$errors->first('treinamento_id')}}</p>
								@endif
								<input type="hidden" name="funcionario_id" id="funcionario_id" value="{{$f->id}}">
								<button class="btn btn-light">{{$f->nome}} {{$f->sobrenome}}</button>
								@if($errors->has('funcionario_id'))
									<p class="text-danger">{{$errors->first('funcionario_id')}}</p>
								@endif
								<input type="submit" value="Atribuir" class="btn btn-primary"/>
								</form>
							</p>
						@endforeach
						
					</div>
					<br/>
					<div class="form-group">
		    				
		    				<a href="../../treinamento" class="btn btn-dark">Voltar</a>
		    		</div>
				
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