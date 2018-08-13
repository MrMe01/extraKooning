@extends('structure.template')
@section('content')
<div class="col-xl-9 col-lg-8">
		<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
			<div class="m-portlet__head">
				<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
      <div class="row align-items-center">
        <div class="col-xl-8 order-2 order-xl-1">
          <div class="form-group m-form__group row align-items-center">
            <div class="col-md-4">
              <div class="m-input-icon m-input-icon--left">
                <h3>Categoría</h3>
              </div>
            </div>
          </div>
        </div>
        
        
       <div class="col-xl-4 order-1 order-xl-2 m--align-right">
            <div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Regresar
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenu2" >
				<a href="/Categorias" class="dropdown-item">Categorías</a>
				<a href="/Actividades" class="dropdown-item">Actividades</a>
			</div>
		    </div>
          <div class="m-separator m-separator--dashed d-xl-none"></div>
        

          <div class="m-separator m-separator--dashed d-xl-none"></div>
        </div>
      </div>
    </div>
				
				
			</div>
			<div class="tab-content">
				<div class="tab-pane active" id="m_user_profile_tab_1" >

					<form class="m-form m-form--fit m-form--label-align-right" method="POST" enctype="multipart/form-data" action="/Categorias">
						@csrf
						<div class="m-portlet__body">

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Nombre</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="" name="name" required="required" pattern="[A-Za-z]{4-16}">
								</div>
							</div>


							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Tipo</label>
								<div class="col-7">
									<select name="type" class="form-control selectpicker"  required="required">
										<option>Parque</option>
										<option>Tour</option>
									</select>
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Divisa</label>
								<div class="col-7">
									<input type="number" name="divisa" min="0" max="50" step="any"> MXN
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