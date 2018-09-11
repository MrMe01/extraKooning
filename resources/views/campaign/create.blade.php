@extends('structure.template')
@section('content')



	
<form action="{{ url('Campañas') }}" class="dropzone" id="myDropzone" method="POST" enctype="multipart/form-data" name="myDropzone">
      @csrf
	<input type="text" name="prueba" value="prueba">
	<button type="submit" class="btn btn-primary" id="btn" >Enviar</button>
	
</form>











@stop





		{{-- 













<script type="text/javascript">
	$("#m-dropzone-one").css({
		//'background-image':'url(/images/activities/image/1533864429Xelha.jpg)'

	});

</script>



<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datepicker();
       	$('#datetimepicker2').datepicker();
        $('#datetimepicker3').datepicker();
    });

function fo(){
	
		$('#fo').hide();
			
	
}
</script>




<div class="m-portlet__body" >
			<div class="form-group m-form__group row">
				<div class="mx-auto">
					<div class="center-block m-dropzone dropzone dz-clickable" action="/Campañas/create" id="m-dropzone-one" style="background-color: #D8D8D8; height: 300px; width: 800px;">
						<div class="m-dropzone__msg dz-message needsclick">
						    <h3 class="m-dropzone__msg-title">Deja caer la imagen aquí.</h3>
						    <span class="m-dropzone__msg-desc">Imagen grande.</span>
						</div>
						<div class="dropzone__msg">
							<input type="text" name="img_grande" style="background-color: #E6E6E6;">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
			&nbsp;
		</div>	
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<div class="col-sm-2"></div>
				<div class="col-lg-3">
					<div  style="background-color: #D8D8D8;">
						<div class="m-dropzone__msg dz-message needsclick">
						    <h3 class="m-dropzone__msg-title">Deja caer la imagen aquí.</h3>
						    <span class="m-dropzone__msg-desc">Imagen pequeña.</span>
						</div>
						<div class="dropzone__msg">
							<input type="text" name="img_peque" style="background-color: #E6E6E6;">
						</div>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="row">
						
						<div class="col-sm-8">
							<div class="col-sm-5">
								<label for="name">Nombre</label>
							</div>
							
							<div class="col-sm-6">
								<input type="text" name="name">
							</div>
							
						</div>
					</div>
					<div><span>&nbsp;</span></div>
					<div class="row">
						<div class="col-sm-8">
							<div class="col-sm-5">
								<label for="turn_off">Fecha Campaña</label>
							</div>
							
							<div class="col-sm-6">
								<div class="input-group date" id="datetimepicker1">
                    					<input type='text' class="form-control" name="turn_off">
                    					<span class="input-group-addon">
                        				<span class="glyphicon glyphicon-calendar"></span>
                    				</span>
                				</div>
							</div>
							
						</div>
					</div>

					<div><span>&nbsp;</span></div>
					<div class="row">
						
						<div class="col-sm-8" >
							<div class="col-sm-5">
								<label for="check_in">Fecha Inicio</label>
							</div>
							
							<div class="col-sm-6">
								<div class="input-group date" id="datetimepicker2">
                    					<input type='text' class="form-control" name="check_in">
                    					<span class="input-group-addon">
                        				<span class="glyphicon glyphicon-calendar"></span>
                    				</span>
                				</div>
							</div>
							
						</div>
						
					</div>
					<div><span>&nbsp;</span></div>
					<div class="row">
						
						<div class="col-sm-8">
							<div class="col-sm-5">
								<label for="check_out">Fecha Fin</label>
							</div>
							
							<div class="col-sm-6">
								<div class="input-group date" id="datetimepicker3">
                    					<input type='text' class="form-control" name="check_out" >
                    					<span class="input-group-addon">
                        				<span class="glyphicon glyphicon-calendar"></span>
                    				</span>
                				</div>
							</div>
							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	

		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
						<div class="col-sm-8"><span>&nbsp;</span></div>
						<div class="col-sm-4"><a href="#" onclick="fo()" id="sig" >Siguiente</a></div>
						<button class="btn btn-primary " type="submit" id="btn">Go</button>
					
				</div>
			</div>
		</div>
		 --}}