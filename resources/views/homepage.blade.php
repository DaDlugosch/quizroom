{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')

	@php
		$heading = get_field('heading');
		$text = get_field('text_about');
		$logo = get_field('logo', 'option');
		$download = get_field('download_heading');
		$windows_heading = get_field('windows_heading');
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
	@if(!empty($windows_file) || !empty($mac_file) || !empty($linux_file))
	<div class="offset" id="download"></div>
	<h1 class="text-center text-md-left mt-4">{!! $download !!}</h1>
	<div class="download row">
		@if(!empty($windows_file))
		<section class="@if(empty($mac_file) && empty($linux_file))col-md-12 @endif @if((empty($mac_file) && !empty($linux_file)) || (!empty($mac_file) && empty($linux_file)))col-md-6 @endif @if(!empty($mac_file) && !empty($linux_file))col-md-4 @endif">
			<h2 class="text-center">{{ $windows_heading }}</h2>
			<a href="{{ $windows_file }}" class="download-link" download="QuizRoom-Win">{{ get_field('windows_text') }}</a>
		</section>
		@endif
		@if(!empty($mac_file))
		<section class="@if(empty($windows_file) && empty($linux_file))col-md-12 @endif @if((empty($windows_file) && !empty($linux_file)) || (!empty($windows_file) && empty($linux_file)))col-md-6 @endif @if(!empty($windows_file) && !empty($linux_file))col-md-4 @endif">
			<h2 class="text-center">{{ $mac_heading }}</h2>
			<a href="{{ $mac_file }}" class="download-link" download="QuizRoom-Mac">{{ $mac_text }}</a>
		</section>
		@endif
		@if(!empty($linux_file))
		<section class="@if(empty($mac_file) && empty($windows_file))col-md-12 @endif @if((!empty($mac_file) && empty($windows_file)) || (!empty($mac_file) && empty($windows_file)))col-md-6 @endif @if(!empty($mac_file) && !empty($windows_file))col-md-4 @endif">
			<h2 class="text-center">{{ $linux_heading }}</h2>
			<a href="{{ $linux_file }}" class="download-link" download="QuizRoom-Linux">{{ $linux_text }}</a>
		</section>
		@endif
	</div>
	@endif

@endsection
