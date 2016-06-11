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
			@if($item->category)
				<span class="label label-info">{{ $item->category->name}}</span>
			@else
				<span class="label label-info">Others</span>
			@endif			
			{{ substr($item->note, 0, 100) }} ...
			<a href="{{ url('notes/'.$item->id) }}" class="small">View note</a>
		</li>
	@endforeach	
</ul>
{!! $notes->render() !!}

@endSection
