@extends('master')

@section('content')
	<div>
		<p><strong>Path : </strong> {{ $image_url }}</p>
		<img src="{{ $image_url }}">
	</div>
@stop