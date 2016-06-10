@extends('layout')


@section('content')

<h2>Notes</h2>
<p>
	<!-- <a href="/notes/create">Add a note</a> -->
	<a href="{{ url('notes/create') }}">Add a note</a>	
</p>
<ul>
	@foreach($notes as $item)
		<li>
			{{ $item->note}}
		</li>
	@endforeach	
</ul>


@endSection
