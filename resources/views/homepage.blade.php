{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')

	@php
		$heading = get_field('heading');
		$text = get_field('text_about');
		$logo = get_field('logo', 'option');
		$windows_heading = get_field('windows_heading');
		$windows_text = get_field('windows_text');
		$windows_file = get_field('windows_file');
		$mac_heading = get_field('mac_heading');
		$mac_text = get_field('mac_text');
		$mac_file = get_field('mac_file');
		$linux_heading = get_field('linux_heading');
		$linux_text = get_field('linux_text');
		$linux_file = get_field('linux_file');
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
	<div class="offset" id="download"></div>
	<h1><span class="green">Na</span> <span class="orange">stiahnutie</span></h1>
	<div class="download row">
		<section class="col-md-4">
			<h2 class="text-center">{{ $windows_heading }}</h2>
			<a href="{{ $windows_file }}" class="download-link" download="QuizRoom-Win">{{ $windows_text }}</a>
		</section>
		<section class="col-md-4">
			<h2 class="text-center">{{ $mac_heading }}</h2>
			<a href="{{ $mac_file }}" class="download-link" download="QuizRoom-Mac">{{ $mac_text }}</a>
		</section>
		<section class="col-md-4">
			<h2 class="text-center">{{ $linux_heading }}</h2>
			<a href="{{ $linux_file }}" class="download-link" download="QuizRoom-Linux">{{ $linux_text }}</a>
		</section>
	</div>

@endsection
