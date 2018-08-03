@extends('structure.template')
@section('content')



  
	<div class="content">
   
   <div class="m-portlet__body">
<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
      <div class="row align-items-center">
        <div class="col-xl-8 order-2 order-xl-1">
          <div class="form-group m-form__group row align-items-center">
            <div class="col-md-4">
              <div class="m-input-icon m-input-icon--left">
                <h3>Actividades</h3>
              </div>
            </div>
          </div>
        </div>
        
       <div class="col-xl-4 order-1 order-xl-2 m--align-right">
            <div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Agregar
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenu2" >
				<a href="/Categorias/create" class="dropdown-item">Categoria</a>
				<a href="/Actividades/create" class="dropdown-item">Actividad</a>
			</div>
		    </div>
          <div class="m-separator m-separator--dashed d-xl-none"></div>
        

          <div class="m-separator m-separator--dashed d-xl-none"></div>
        </div>
      </div>
    </div>


         <table class=" table table-striped table-bordered table-hover table-checkable" style="text-align: center; " >
		<thead>
			<tr>
				<thead>
					<th style="vertical-align:middle;" width="20px">ID</th>
					<th style="vertical-align:middle;" width="">Imagen</th>
					<th style="vertical-align:middle;" width="">Nombre</th>
					<th style="vertical-align:middle;" width="">Eslogan</th>
					<th style="vertical-align:middle;" width="">Categoría</th>
					
				</thead>
			</tr>
		</thead>
		<tbody>
			@foreach ($actividades as $actividad)
				<tr>
					<td style="vertical-align:middle;" >{{$actividad->id}}</td>
					<td style="vertical-align:middle;" >
					<img class="card-img-top rounded-circle mx-auto d-block" style="height:60px; width: 60px; background-color: #EFEFEF;" src="images/actividades/activities/map/{{$actividad->Map}}" >
					</td>
					<td style="vertical-align:middle;" >{{$actividad->Name}}</td>
					<td style="vertical-align:middle;" >{{$actividad->Slogan}}</td>

					<td style="vertical-align:middle;" >
						@foreach ($categorias as $categoria)
							@if ($categoria->id == $actividad->category_id)
								{{$categoria->Name}}
							@endif
						@endforeach
					</td>
				</tr>
			@endforeach
		</tbody>
		</table>
		{!! $actividades->render(); !!}

</div> 
  </div>
@stop
