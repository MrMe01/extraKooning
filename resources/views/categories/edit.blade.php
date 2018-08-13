@extends('structure.template')
@section('content')
<div class="col-xl-9 col-lg-8">
		<h1 >Categoría</h1>
		<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
			<div class="m-portlet__head">
				<div class="m-portlet__head-tools">
					<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
								<i class="flaticon-share m--hide"></i>
								Editar
							</a>
						</li>
						
					</ul>
				</div>
				
				
			</div>
			<div class="tab-content">
				<div class="tab-pane active" id="m_user_profile_tab_1" >

					<form class="m-form m-form--fit m-form--label-align-right" method="POST" enctype="multipart/form-data" action="/Categorias/{{$category->name}}-{{ $category->type }}">
						@method('PUT')
						@csrf
						<div class="m-portlet__body">

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Nombre</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="{{ $category->name }}" name="name" required="required" pattern="[A-Za-z]{4-16}">
								</div>
							</div>


							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Tipo</label>
								<div class="col-7">
									<select name="type" class="form-control selectpicker"  required="required">

										@if ($category->type == 'Parque')
											<option selected="true">Parque</option>
											<option>Tour</option>
										@else
											<option>Parque</option>
											<option selected="true">Tour</option>
										@endif
										
									</select>
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Divisa</label>
								<div class="col-7">
									<input type="number" name="divisa" min="0" step="any" value="{{ $category->divisa }}"> MXN
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

										<a href="/Categorias" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancelar</a>
										
									</div>
								</div>
							</div>
						</div>
					</form>

				</div>

				
			</div>
		</div>
	</div>
@stop

{{--Nombre tipo divisa--}}