@extends('master')
@section('titulo','Lista de Currículos')
@section('corpo')
<div class="container">
<br/>
<hr style="border-color: black" />
<h1 class="text-center text-uppercase text-dark"><b>CURRíCULOS</b></h1>
<hr style="border-color: black" />
<p class="text-align center">Os currículos são gerados e atualizados toda vez que clicar para visualizar os detalhes de um determinado funcionário.</p>
<br/>
<p>Clique nos arquivos .txt para abrir-los.</p>
<br />
<?php
$path = "./Curriculos/";
$diretorio = dir($path);

while($arquivo = $diretorio -> read()){
	if($arquivo != '.' && $arquivo != '..'){
		echo "<a href='.".$path.$arquivo."' class='btn btn-light'>".$arquivo."</a>";
		echo "<a href='curriculo/".$arquivo."' class='btn btn-danger'>X</a><br /><br />";
	}

}
$diretorio -> close();
?>
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