@extends('plantilla')

@section('contenido')

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
    
    @yield('script')
	
	<div class="card container mx-auto">
		<br>
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner" >
			
				<div class="carousel-item active">
					<img class="d-block w-100"  src="../img/tutoriales.jpg" alt="First slide" role="button">
				</div>
				
				<div class="carousel-item">
					<img class="d-block w-100" src="" alt="Second slide">
				</div>
				<!-- <div class="carousel-item">
					<img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
				</div>-->
			</div>
			<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<br>
	</div>

@endsection
