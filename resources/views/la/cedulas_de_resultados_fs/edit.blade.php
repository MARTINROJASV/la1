@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/cedulas_de_resultados_fs') }}">Cedulas de resultados f</a> :
@endsection
@section("contentheader_description", $cedulas_de_resultados_f->$view_col)
@section("section", "Cedulas de resultados fs")
@section("section_url", url(config('laraadmin.adminRoute') . '/cedulas_de_resultados_fs'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Cedulas de resultados fs Edit : ".$cedulas_de_resultados_f->$view_col)

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
				{!! Form::model($cedulas_de_resultados_f, ['route' => [config('laraadmin.adminRoute') . '.cedulas_de_resultados_fs.update', $cedulas_de_resultados_f->id ], 'method'=>'PUT', 'id' => 'cedulas_de_resultados_f-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nodeoficio')
					@la_input($module, 'fecha')
					@la_input($module, 'direccionemiteofc')
					@la_input($module, 'fechapresentacion')
					@la_input($module, 'lugar')
					@la_input($module, 'fechaacta')
					@la_input($module, 'nodeacta')
					@la_input($module, 'documentoescaneado')
					@la_input($module, 'numderesultados')
					@la_input($module, 'observacionunison')
					@la_input($module, 'sinobservaciones')
					@la_input($module, 'observaciongobedo')
					@la_input($module, 'plazoparaatencion')
					@la_input($module, 'fechadevencimiento')
					@la_input($module, 'status')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/cedulas_de_resultados_fs') }}">Cancel</a></button>
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
	$("#cedulas_de_resultados_f-edit-form").validate({
		
	});
});
</script>
@endpush
