@extends('layout')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2>Create a note test</h2>		

			@include('partials/errors')

			<form method="POST" action="{{ url('notes') }}" class="form">
				{{ csrf_field() }}
				<textarea name="note" class="form-control" placeholder="Write your note here...">{{ old('note') }}</textarea>
				<button type="submit" class="btn btn-primary">Crate note</button>
			</form>
		</div>
	</div>
@endsection