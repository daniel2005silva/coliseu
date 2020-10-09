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
	<nav class="navbar navbar-dark bg-dark">
  		<a class="navbar-brand" href="../">Metalúrgica</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      			<li class="nav-item active">
        			<a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Link</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link disabled" href="#">Desativado</a>
     			</li>
    		</ul>
    		
  		</div>
	</nav>
	<div class="container">
	@yield('corpo')
	</div>
</body>
</html>
<style type="text/css">
	body{ 
		background: url("{{ asset('imagens/metalurgica.jpg') }}") no-repeat;
        background-size: cover;
    }
    .container{
		background-color: white;
		height: 100%;
	}
</style>