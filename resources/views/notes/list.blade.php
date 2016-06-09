@extends('layout')


@section('content')

<h2>Notes</h2>
<ul>
	@foreach($notes as $item)
		<li>
			{{ $item->note}}
		</li>
	@endforeach	
</ul>


<!-- <form method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<textarea></textarea>
<button type="submit">Crate note</button>
</form>
 -->
@endSection
