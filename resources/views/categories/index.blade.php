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
                <h3>Categorías</h3>
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
					<th style="vertical-align:middle;">Nombre</th>
					<th style="vertical-align:middle;">Tipo</th>
					<th style="vertical-align:middle;">Divisa</th>
					<th style="vertical-align:middle;">Acciones</th>
					
				</thead>
			</tr>
		</thead>
		<tbody>
			@foreach ($categories as $category)
				<tr>
					<td style="vertical-align:middle;" >{{$category->id}}</td>
					<td style="vertical-align:middle;" >{{$category->name}}</td>
					<td style="vertical-align:middle;" >{{$category->type}}</td>

					<td style="vertical-align:middle;" >
						{{-- Categoria --}}
						$ {{ $category->divisa}} USD
					</td>
					
					<td>
				<div class="col-md-3">
                <a href="/Actividades/{{$category->name}}-{{$category->type}}"><i class="fa fa-odnoklassniki" title="Actividades"></i></a>
              </div>
              <div class="col-md-3">
                <a href="/Categorias/{{$category->name}}-{{$category->type}}/edit"><i class="fa fa-edit" title="Edit"></i></a>
              </div>

                <form name="formDel" id="formDel" method="POST" action="/Categorias/{{$category->name}}-{{ $category->type }}" enctype="multipart/form-data" >
                  @csrf
                  @method('DELETE')
                  

                  @if (count($category->activities) == 0)
                  		 <button  id="but"type="submit" class="fa fa-trash-o" title="Delete"></button>
                  @endif
	                  

                </form>
              </div>
					</td>
				</tr>
			@endforeach

		</tbody>
		</table>
		{!! $categories->render(); !!}

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
