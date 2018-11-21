@extends('plantilla')

@section('contenido')
<div class="card container mx-auto">
	<br>
	<div class="row">
		<div class="col-sm text-center align-self-center">
			<img src="../img/contacto_img.jpg">
		</div>
		
		<div class="col-sm">
			<div class="row" align="center">
				<div class="col-md-12">
					<div class="well well-sm">
						<form class="form-horizontal" method="post">
							<fieldset>
								<legend class="text-center header" style="color: #FFFFFF;">Contacto</legend>

								<div class="form-group">
									<span class="col-md-1 col-md-offset-2 text-center"></span>
									<div class="col-md-8">
									<input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<span class="col-md-1 col-md-offset-2 text-center"></span>
									<div class="col-md-8">
										<input id="lname" name="name" type="text" placeholder="Apellido" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<span class="col-md-1 col-md-offset-2 text-center"></span>
									<div class="col-md-8">
										<input id="email" name="email" type="text" placeholder="Correo Electrónico" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<span class="col-md-1 col-md-offset-2 text-center"></span>
									<div class="col-md-8">
										<input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<span class="col-md-1 col-md-offset-2 text-center"></span>
									<div class="col-md-8">
										<textarea class="form-control" id="message" name="message" placeholder="Ingrese su mensaje aquí. Nos pondremos en contacto con usted dentro de 2 días hábiles." rows="7"></textarea>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12 text-center">
										<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
</div>

@endsection