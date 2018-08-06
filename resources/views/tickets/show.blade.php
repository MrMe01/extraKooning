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
					<th style="vertical-align:middle;">Imagen</th>
					<th style="vertical-align:middle;">Nombre</th>
					<th style="vertical-align:middle;">Descripcion</th>
					<th style="vertical-align:middle;">Precio Adulto</th>
					<th style="vertical-align:middle;">Precio Niño</th>
					<th style="vertical-align:middle;">Actividad</th>
					<th style="vertical-align:middle;">Acciones</th>
					
				</thead>
			</tr>
		</thead>
		<tbody>
			@foreach ($tickets as $ticket)
				<tr>
					<td style="vertical-align:middle;" >{{$ticket->id}}</td>
					<td style="vertical-align:middle;" >
					<img class="card-img-top rounded-circle mx-auto d-block" style="height:60px; width: 60px; background-color: #EFEFEF;" src="images/activities/image/{{$ticket->image}}" >
					</td>
					<td style="vertical-align:middle;" >{{$ticket->name}}</td>
					<td style="vertical-align:middle;" >{{$ticket->description}}</td>
					<td style="vertical-align:middle;" >{{ $ticket->adult }}</td>
					<td style="vertical-align:middle;" >{{ $ticket->child }}</td>
				<div class="col-md-3">
                <a href="/Entradas/{{$ticket->name}}"><i class="fa fa-money" title="Tickets"></i></a>
              </div>
              <div class="col-md-3">
                <a href="/Actividades/{{$ticket->name}}/edit"><i class="fa fa-edit" title="Edit"></i></a>
              </div>

                <form name="formDel" id="formDel" method="POST" action="/Actividades/{{$ticket->name}}" enctype="multipart/form-data" >
                  @csrf
                  @method('DELETE')
                  
	                  @php
	                    $aux = true;  
	                  @endphp
	                  @if (count($tickets_id) >= 0)
	                    @for ($i = 0; $i < count($tickets_id); $i++)
	                      @if ($tickets_id[$i] == $activity->activities_id)
	                        @php
	                          $aux = false;
	                        @endphp
	                      @endif
	                    @endfor
	                  @else
	                      <button  id="but"type="submit" class="fa fa-trash-o" title="Delete"></button>
	                  @endif
	                  
	                  @if ($aux)
	                    <button  id="but"type="submit" class="fa fa-trash-o" title="Delete"></button>
	                  @endif

                </form>
              </div>
					</td>
				</tr>
			@endforeach

		</tbody>
		</table>
		{!! $tickets->render(); !!}

</div> 
  </div>



  <style type="text/css">

          #but{
            background-color: transparent !important;
            outline: none;
            border:0;
            color: #0000FF;
          }
        </style>
@stop
