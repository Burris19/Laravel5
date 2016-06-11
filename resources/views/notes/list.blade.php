@extends('layout')


@section('content')

<h2>Notes</h2>
<p>
	<!-- <a href="/notes/create">Add a note</a> -->
	<a href="{{ url('notes/create') }}">Add a note</a>	
</p>
<ul class="list-group">
	@foreach($notes as $item)
		<li class="list-group-item">
			<span class="label label-info">{{ $item->category->name}}</span>
			{{ $item->note}}
		</li>
	@endforeach	
</ul>
{!! $notes->render() !!}

@endSection
