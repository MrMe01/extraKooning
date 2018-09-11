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
                <h3>Blogs</h3>
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
				<a href="/Blogs/create" class="dropdown-item">Blog</a>
				<a href="/Ciudades/create" class="dropdown-item">Ciudades</a>
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
					<th style="vertical-align:middle;">Titulo</th>
					<th style="vertical-align:middle;">Locacion</th>
					<th style="vertical-align:middle;">Descripcion</th>
				</thead>
			</tr>
		</thead>
		<tbody>
			@foreach ($blogs as $blog)
				<tr>
					<td style="vertical-align:middle;" >{{$blog->id}}</td>
					<td style="vertical-align:middle;" >
					<img class="card-img-top rounded-circle mx-auto d-block" style="height:60px; width: 60px; background-color: #EFEFEF;" src="images/activities/image/{{$blog->image}}" >
					</td>
					<td style="vertical-align:middle;" >{{$blog->title}}</td>
					<td style="vertical-align:middle;" >{{$blog->location}}</td>

					<td style="vertical-align:middle;" >{{ $blog->description }} </td>
					
					<td>
				<div class="col-md-3">
                <a href="/Segments/{{$blog->id}}"><i class="fa fa-ticket" title="Segments"></i></a>
              </div>
              <div class="col-md-3">
                <a href="/Blogs/{{$blog->id}}/edit"><i class="fa fa-edit" title="Edit"></i></a>
              </div>

                <form name="formDel" id="formDel" method="POST" action="/Blogs/{{$blog->id}}" enctype="multipart/form-data" >
                  @csrf
                  @method('DELETE')
                  		 <button  id="but"type="submit" class="fa fa-trash-o" title="Delete"></button>             
                </form>
              </div>
					</td>
				</tr>
			@endforeach

		</tbody>
		</table>
		{!! $blogs->render(); !!}

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