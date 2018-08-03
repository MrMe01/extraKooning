@extends('structure.template')
@section('content')
	@foreach ($categorias as $categoria)
		<h4>{{$categoria->name}}</h4>
	@endforeach
	
@stop