<!DOCTYPE html>
<html>

<head>

<br>

	<link rel="shortcut icon" href="../img/logo.ico" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	

	
    <title>Floresta</title>
	<div align="center">	
		<img class="container center-block" src="../img/header11.png" width="500" height="380">	
	</div>
	<link href="https://fonts.googleapis.com/css?family=Charmonman|Great+Vibes" rel="stylesheet">	
	
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">

</head>

<body>
	<br>
	<div class="row container barra mx-auto">

		
		<div class="col-lg text-center">
			<h4><a class="" href="{{route('index')}}" style="color: #b81ef0;">Inicio</a></h4>
		</div>
		
		<div class="col-lg text-center">
			<h4><a class="" href="{{route('catalogo')}}" style="color: #b81ef0;">Catálogo</a></h4>
		</div>
				
		<div class="col-lg text-center">
			<h4><a class="" href="{{route('tutoriales')}}" style="color: #b81ef0;">Tutoriales</a></h4>
		</div>
		
		<div class="col-lg text-center">
			<h4><a class="" href="{{route('contacto')}}" style="color: #b81ef0;">Contacto</a></h4>
		</div>
		
		<div class="col-lg text-center">
			<h4><a class="" href="{{route('login')}}">Iniciar sesión</a></h4>
		</div>
		

	</div>



		@yield('contenido')
		
	<script>
		$('#carouselExampleFade').carousel({interval:3000})
	</script>

	
</body>

</html>