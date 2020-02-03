@extends('theme::layouts.index')

@section('tittle')
    All Restaurants
@endsection

@section('content')  

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
           
        @foreach ($restaurants as $Restaurant)
            @include('theme::partials.restaurant', ['restaurant' => $Restaurant])
        @endforeach

      </div>

      <div class="row">
        <div class="col-12 text-center">
         {{-- {{ $posts->links() }} --}}
      </div>
    </div>
  </div>
  
@endsection

