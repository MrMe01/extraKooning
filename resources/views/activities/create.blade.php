@extends('structure.template')
@section('content')
<div class="col-xl-9 col-lg-8">
	<h1 >Actividad</h1>
	<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
		<div class="m-portlet__head">
			<div class="m-portlet__head-tools">
				<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
							<i class="flaticon-share m--hide"></i>
							Agregar
						</a>
					</li>
					
				</ul>
			</div>
			
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="m_user_profile_tab_1" >
				<form class="m-form m-form--fit m-form--label-align-right" method="POST" enctype="multipart/form-data" action="/Actividades">
					@csrf
					<div class="m-portlet__body">
						<div class="form-group m-form__group row">
							<label for="example-text-input" class="col-2 col-form-label">Nombre</label>
							<div class="col-7">
								<input class="form-control m-input" type="text" value="" name="name" required="required" pattern="[A-Za-z]{4-16}">
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-2 col-form-label">Descripción</label>
							<div class="col-lg-9 col-md-9 col-sm-12">
								<textarea name="description" class="form-control" data-provide="markdown" rows="10" required="required"></textarea>
								<span class="m-form__help">Escribe la descripción del parque</span>
							</div>
						</div>


						
						<div class="form-group m-form__group row">
							<label for="example-text-input" class="col-2 col-form-label">Mapa</label>
							<div class="col-8">
								<input  type="file" name="map" accept="image/png, image/jpeg, image/gif">
							</div>
						</div>

						<div class="form-group m-form__group row">
							<label for="example-text-input" class="col-2 col-form-label">Logo</label>
							<div class="col-8">
								<input  type="file" name="logo" accept="image/png, image/jpeg, image/gif">
							</div>
						</div>

						<div class="form-group m-form__group row">
							<label for="example-text-input" class="col-2 col-form-label">Fondo</label>
							<div class="col-8">
								<input  type="file" name="fondo" accept="image/png, image/jpeg, image/gif">
							</div>
						</div>
						
						<div class="form-group m-form__group row">
							<label for="example-text-input" class="col-2 col-form-label">Ubicación</label>
							<div class="col-7">
								<input class="form-control m-input" name="location" type="text" value=""required="required">
							</div>
						</div>
						
						<div class="form-group m-form__group row">
							<label for="example-text-input" class="col-2 col-form-label">Longitud</label>
							<div class="col-7">
								<input class="form-control m-input" name="coordinates" type="text" placeholder="Aqui mero">
							</div>
						</div>
						<script type="text/javascript">
							function fetch(){
								var get = document.getElementById("get").value;
								document.getElementById("put").value = get;
							}
						</script>
						<div class="form-group m-form__group row">
							<label  class="col-2 col-form-label">Color</label>
							<div class="col-7">
								<input class="m-input" id="get" onchange="fetch()" type="color" value="">
								<input type="text" id="put" name="background" >
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-2 col-form-label">Terminos</label>
							<div class="col-8">
								<input type="file" accept="file/pdf" name="terms"required="required"/>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label for="example-text-input" class="col-2 col-form-label">Tipo</label>
							<div class="col-7">
								<select name="category" class="form-control selectpicker"  required="required">
									@foreach ($categories as $categoria)
									@if($categoria->type == 'Parque')
									<option style="background-color: #EFFBFB;">{{$categoria->name .' / '. $categoria->type}}</option>
									@else
									<option style="background-color: #FBFBEF;">{{$categoria->name .' / '. $categoria->type}}</option>
									@endif
									
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="m-portlet__foot m-portlet__foot--fit">
						<div class="m-form__actions">
							<div class="row">
								<div class="col-2">
								</div>
								<div class="col-7">
									<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">Guardar Cambios</button>&nbsp;&nbsp;
									<a href="/parques" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancelar</a>
									
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
@stop()