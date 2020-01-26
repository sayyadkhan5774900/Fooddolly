@extends('theme::layouts.index')

@section('tittle')
    Fooddolly
@endsection

@section('content')


<div class="site-section">
    <div class="container">
      <div class="row mb-5">
{{--         
        @foreach ($restuarants as $restuarant)
            @include('theme::partials.restaurant', ['restuarant' => $restuarant])
        @endforeach --}}

      </div>

      <div class="row">
        <div class="col-12 text-center">
         {{-- {{ $posts->links() }} --}}
      </div>
    </div>
  </div>

@endsection
