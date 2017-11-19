@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Editar area
			<a href="{{ route('area.index')}}" class="btn btn-primary pull-right">Listado</a>
		</h2>

		@include('areas.fragment.error')

		{!! Form::open(['route'=>'area.store'])!!}

			@include('areas.fragment.form')

		{!! Form::close() !!}
		
	</div>
	<div>
		@include('areas.fragment.aside')
	</div>


@endsection