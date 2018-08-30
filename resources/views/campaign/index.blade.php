@extends('structure.template')
@section('content')

{{-- 
<div class="sticky-top alert alert-primary">
	<h3>CAMPAÑAS</h3>
</div>


<div class="fixed-bootom alert alert-secundary" style="height: 80%; width: 50%;">
	<h3>Hello worl again</h3>
</div>
<div class="fixed-bootom alert alert-secundary" style="height: 50%;">
	<h3>El buen DIV</h3>
</div>
   --}}
   {{-- 
	<div class="col-md-10 col-md-offset-1" style="height: 500px; background-color: #088A68;">
		f
	</div>
	<div class="col-md-6 col-md-offset-3">
		<span>&nbsp;</span>
	</div>
    <div class="col-md-6 col-md-offset-3" style="background-color: #0B0B3B;">

    	Centrado
    </div>
 --}}


	<div class="row">
		<div id="uploads"></div>
		<div class="col-sm-6" style="background-color: #E0F8F7; height: 300px;">
			<div class="border border-primary dropzone1" id="dropzone1" style="height: 300px;">
			Drop Files here to updload dude!
			</div>
		</div>
		<div class="col-sm-6" style="background-color: #FBFBEF; height: 300px;">
			<div class="border border-primary" style="height: 300px;">
			Drop a File Here dude!
			</div>
		</div>
	</div>




@stop
