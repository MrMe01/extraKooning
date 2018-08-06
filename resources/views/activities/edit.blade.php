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

					<form class="m-form m-form--fit m-form--label-align-right" method="POST" enctype="multipart/form-data" action="/Actividades/{{$activity->name}}">
						@method('PUT')
						@csrf
						<div class="m-portlet__body">

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Nombre</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="{{$activity->name}}" name="name" " pattern="[A-Za-z]{4-16}">
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label class="col-2 col-form-label">Descripción</label>
								<div class="col-lg-9 col-md-9 col-sm-12">
									<textarea name="description" class="form-control" data-provide="markdown" rows="10" ">{{$activity->description}}</textarea>			
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
								<label for="example-text-input" class="col-2 col-form-label">Eslogan</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" name="slogan" placeholder="!EL mejor Parque!"  value="{{$activity->slogan}}">
								</div>
							</div>


							<div class="form-group m-form__group row">
										<label class="col-2 col-form-label">Imagen</label>
					                <div class="col-8">
					                	<input type="file" accept="image/png, image/jpeg, image/gif" name="image"/>
					                </div>
							</div>

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Ubicación</label>
								<div class="col-7">
									<input class="form-control m-input" name="location" type="text" value="{{$activity->location}}">
								</div>
							</div>

	




							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Longitud</label>
								<div class="col-7">
									<input class="form-control m-input" name="coordinates" type="text" placeholder="Aqui mero" value="{{$activity->coordinates}}">
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
									<input class="m-input" id="get" onchange="fetch()" type="color" value="{{$activity->background}}">
									<input type="text" id="put" name="background" value="{{$activity->background}}">
								</div>
							</div>

							<div class="form-group m-form__group row">
										<label class="col-2 col-form-label">Terminos</label>
					                <div class="col-8">
					                	<input type="file" accept="file/pdf" name="terms"/>
					                </div>
							</div>


							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Tipo</label>
								<div class="col-7">
									<select name="category" class="form-control selectpicker"  >
										@foreach ($categories as $categoria)
											@if($categoria->type == 'Parque')

												@if ($categoria->id == $activity->category_id)
													<option  selected="true" style="background-color: #EFFBFB;">{{$categoria->name .' / '. $categoria->type}}</option>
												@else
													<option  style="background-color: #EFFBFB;">{{$categoria->name .' / '. $categoria->type}}</option>
												@endif
											
											@else
												@if ($categoria->id == $activity->category_id)
													<option  selected="true" style="background-color: #FBFBEF;">{{$categoria->name .' / '. $categoria->type}}</option>
												@else
													<option  style="background-color: #FBFBEF;">{{$categoria->name .' / '. $categoria->type}}</option>
												@endif
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

										<a href="/Actividades" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancelar</a>
										
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



