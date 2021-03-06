@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/solicitudes_infos') }}">Solicitudes info</a> :
@endsection
@section("contentheader_description", $solicitudes_info->$view_col)
@section("section", "Solicitudes infos")
@section("section_url", url(config('laraadmin.adminRoute') . '/solicitudes_infos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Solicitudes infos Edit : ".$solicitudes_info->$view_col)

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
				{!! Form::model($solicitudes_info, ['route' => [config('laraadmin.adminRoute') . '.solicitudes_infos.update', $solicitudes_info->id ], 'method'=>'PUT', 'id' => 'solicitudes_info-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nodeoficio')
					@la_input($module, 'fecha')
					@la_input($module, 'direccionemiteofcopc')
					@la_input($module, 'fechadevencimiento')
					@la_input($module, 'informacionsolicita')
					@la_input($module, 'documentoescaneado')
					@la_input($module, 'agendaractividad')
					@la_input($module, 'status')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/solicitudes_infos') }}">Cancel</a></button>
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
	$("#solicitudes_info-edit-form").validate({
		
	});
});
</script>
@endpush
