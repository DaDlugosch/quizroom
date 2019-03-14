{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')

	@php
		$heading = get_field('heading');
		$text = get_field('text_about');
		$logo = get_field('logo', 'option');
	@endphp
	<div class="row">
		<section class="about @if(!empty($logo)) col-md-6 @else col-md-12 @endif my-5">
			<h1 class="@if(empty($logo)) text-md-center @endif mb-4 text-center text-md-left">{!! $heading !!}</h1>
			{!! $text !!}
		</section>
		@if(!empty($logo))
		<section class="col-md-6 align-self-center">
			<figure class="d-flex justify-content-center align-items-center">
				<img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" width="50%">
			</figure>
		</section>
		@endif
	</div>

@endsection
