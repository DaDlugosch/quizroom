@php
	$text = get_field('copyright', 'option');
@endphp

<footer>
  <div class="container">
    {!! $text !!}
  </div>
</footer>
