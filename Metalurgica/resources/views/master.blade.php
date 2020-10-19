<!-- View Master - Base para outras View construidas por extenção desta. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="../">Metalúrgica</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    		<div class="navbar-nav">
      			<a class="nav-item nav-link" href="../funcionario">Funcionários</a>
      			<a class="nav-item nav-link" href="../fornecedor">Fornecedores</a>
      			<a class="nav-item nav-link" href="../treinamento">Treinamentos</a>

    		</div>
  		</div>
	</nav>
	<div class="container">
	@yield('corpo')
	</div>
</body>
</html>
<style type="text/css">
	body{ 
		background: url("{{ asset('imagens/metalurgica.jpg') }}") no-repeat fixed;
        background-size: cover;
    }
    .container{
		background-color: #b7bdb9;
	}
</style>