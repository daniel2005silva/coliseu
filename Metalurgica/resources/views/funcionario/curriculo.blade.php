@extends('master')
@section('titulo','Lista de Currículos')
@section('corpo')
<br/>
<h1 class="text-center text-uppercase text-dark">CURRíCULOS</h1>
<br/>
<?php
$path = "./Curriculos/";
$diretorio = dir($path);

while($arquivo = $diretorio -> read()){
	if($arquivo != '.' && $arquivo != '..'){
		echo "<a href='.".$path.$arquivo."' class='btn btn-light'>".$arquivo."</a><br /><br />";
	}

}
$diretorio -> close();
?>
@endsection


<style type="text/css">
	.center {
    	text-align:  center;
	}
	.container{
		
	}

</style>