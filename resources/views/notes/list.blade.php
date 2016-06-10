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


@endSection
