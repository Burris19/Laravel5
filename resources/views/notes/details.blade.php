@extends('layout')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">			
			<h2>Notes</h2>	
			<hr>	
			<p>
				@if($note->category)
					<span class="label label-info">{{ $note->category->name}}</span>
				@else
					<span class="label label-info">Others</span>
				@endif
				| <a href="{{ url('notes') }}">View all notes</a>
			</p>
			{{ $note->note}}	
		</div>
	</div>
@endsection