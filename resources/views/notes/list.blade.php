@extends('layout')


@section('content')

<h2>Notes</h2>

<form method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<textarea></textarea>
<button type="submit">Crate note</button>
</form>

@endSection
