@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/dir_seguimientos') }}">Dir seguimiento</a> :
@endsection
@section("contentheader_description", $dir_seguimiento->$view_col)
@section("section", "Dir seguimientos")
@section("section_url", url(config('laraadmin.adminRoute') . '/dir_seguimientos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Dir seguimientos Edit : ".$dir_seguimiento->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($dir_seguimiento, ['route' => [config('laraadmin.adminRoute') . '.dir_seguimientos.update', $dir_seguimiento->id ], 'method'=>'PUT', 'id' => 'dir_seguimiento-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nodeoficio')
					@la_input($module, 'fecha')
					@la_input($module, 'asunto')
					@la_input($module, 'comentarios')
					@la_input($module, 'documentoescaneado')
					@la_input($module, 'agendaractividad')
					@la_input($module, 'status')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/dir_seguimientos') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#dir_seguimiento-edit-form").validate({
		
	});
});
</script>
@endpush
