@php
	$image = get_field('bg_image', 'option');
	$logo = get_field('logo', 'option');
	$text = get_field('download_button', 'option');
	$heading = get_field('main_heading', 'option');
@endphp

<header>
	@if(!empty($logo) || !empty($text))
	<div class="navigation d-flex">
		<div class="container d-flex justify-content-between align-items-center">
			@if(!empty($logo))
			<figure class="mb-0">
				<a href="/"><img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" width="50rem"></a>
			</figure>
			@endif
			@if(!empty($text))
			<a href="#download" class="download-link">{!! $text !!}</a>
			@endif
		</div>
	</div>
	@endif
	<div class="parallax-window" data-parallax="scroll" data-image-src="{{ $image['url'] }}">
		<h1>{!! $heading !!}</h1>
	    <div class="arrow down">
	        <a href="#content"><i class="fas fa-angle-down"></i></a>
	    </div>
	</div>
</header>
