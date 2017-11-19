@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Editar evaluacion
			<a href="{{ route('evaluacion.index')}}" class="btn btn-primary pull-right">Listado</a>
		</h2>

		@include('evaluacions.fragment.error')

		{!! Form::open(['route'=>'evaluacion.store'])!!}

			@include('evaluacions.fragment.form')

		{!! Form::close() !!}

	</div>
	<div>
		@include('evaluacions.fragment.aside')
	</div>


@endsection
