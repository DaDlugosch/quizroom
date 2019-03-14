@extends('layouts.app')

@section('content')
    <div class="alert alert-warning my-5">
      {{ __('Prepáčte, ale stránka, ktorú sa pokúšate zobraziť, neexistuje.', 'sage') }}
    </div>
@endsection
