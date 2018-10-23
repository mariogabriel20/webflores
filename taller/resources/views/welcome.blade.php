<!DOCTYPE html>
<html>

<head>
<!--<link rel="shortcut icon" href="../img/logo.ico" />-->
<br>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Siscon Online</title>
	
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
	<br>
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
		<a class="navbar-brand" href="#">Menú</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active size">
					<a class="nav-link" href="#	">Inicio</a>
				</li>
				<li class="nav-item active size">
					<a class="nav-link" href="#">Opcion1</a>
				</li>
				<li class="nav-item active size">
					<a class="nav-link" href="#">Opcion2</a>
				</li>
				<li class="nav-item active size">
					<a class="nav-link" href="#">Iniciar sesión</a>
				</li>
			</ul>
		</div>
	</nav>

        <!-- Page Content  -->
        <div id="content">
          <div class=".d-none .d-sm-block .d-md-none" hidden>
            <button type="button" id="sidebarCollapse" class="btn btn-secondary">
              <i class="fas fa-align-left"></i>
            </button>
          </div>
            @yield('contenido')

        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="contenido_modal">

        </div>
      </div>
    </div>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
    @yield('script')

</body>

</html>

