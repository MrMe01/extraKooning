@extends('structure.template')
@section('content')

<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-dropzone dropzone dz-clickable" action="http" id="m-dropzone-one" style="filter:alpha(opacity=50); opacity:0.5; width: 300px; height: 200px;">
						<div class="m-dropzone__msg dz-message needsclick" style="width: 300px; height: 200px;">
						    <h3 class="m-dropzone__msg-title">Drop files here or click to upload.</h3>
						    <span class="m-dropzone__msg-desc">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>
						</div>
					</div>
				</div>
			</div>
			<div id="dd">ss</div>
			
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto" >
						<button type="reset" class="btn btn-brand" onclick="funk()">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>

<script type="text/javascript">
	$("#dd").css({"background-color":'red'})
</script>






























@stop
