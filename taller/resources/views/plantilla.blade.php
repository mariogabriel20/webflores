<!DOCTYPE html>
<html>

<head>
	<!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	
	
	<!-- -->
	
	<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />
	<br>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <title>Floresta</title>
		

	<!-- Botones redes sociales-->

	<div style="margin-left: 95%; margin-right: 5%; position:fixed;">
  
        <div class="text-right center-block" >
            <br/>
            <a href="https://www.facebook.com" target="_blank"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	        <a href="https://www.instagram.com" target="_blank"><i id="social-in" class="fa fa-instagram fa-3x social" aria-hidden="true"></i></a>
			<a href="https://www.youtube.com" target="_blank"><i id="social-yt" class="fa fa-youtube fa-3x social" aria-hidden="true"></i></a>
		</div>

	</div>

	<!-- Fin botones -->

	<div align="center">	
		<a href="{{route('index')}}"><img class="container center-block" src="../img/header.png"></a>	
	</div>
	
</head>

<body>
	<br>
	
	<h1><i class="ir-arriba fas fa-angle-double-up" style="color:#ffffff;"></i></h1>
	
	<div class="row container barra mx-auto">

		
		<div class="col-lg text-center" style="">
			<h4><a href="{{route('index')}}" style="color: #FFFFFF;">Inicio</a></h4>

		</div>

		<div class="col-lg text-center">
			<div class="nav-item " style="background-color: transparent;">
				<div class="dropdown">
					<h4><button class="dropbtn">Catálogos</button></h4>
					<div class="dropdown-content">
						<h5><a href="{{route('catalogo_flores')}}" style="color: #FFFFFF;">Flores</a></h5>
						<a href="{{route('catalogo_arreglos')}}" style="color: #FFFFFF;">Arreglos florales</a>
					</div>
				</div>
			</div>
		</div>
				
		<div class="col-lg text-center">
			<h4><a class="" href="{{route('tutoriales')}}" style="color: #FFFFFF;">Tutoriales</a></h4>
		</div>
		
		<div class="col-lg text-center">
			<h4><a class="" href="{{route('contacto')}}" style="color: #FFFFFF;">Contacto</a></h4>
		</div>
		
		<div class="col-lg text-center">
			<h4><a class="" href="{{route('login')}}" style="color :#FFFFFF;">Iniciar sesión</a></h4>
		</div>
		

	</div>
		

	@yield('contenido')
		
	<script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>   	
	<script src="{{asset('js/arriba.js')}}"></script>
	
	<script>
		$('#carouselExampleFade').carousel({interval:3000})
	</script>


</body>

</html>