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

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
    @yield('script')
	
	<div class="card container mx-auto">
		<h1> Hola guapo </h1>
		<h1> Hola guapo </h1>
		<h1> Hola guapo </h1>
		<h1> Hola guapo </h1>
		<h1> Hola guapo </h1>
		<h1> Hola guapo </h1>
		<h1> Hola guapo </h1>
		<h1> Hola guapo </h1>
		<h1> Hola guapo </h1>
		
		
	</div>

@endsection
