@extends('theme::layouts.index')

@section('tittle')
    Fooddolly
@endsection

@section('content')

<div class="site-section">
   
  <div class="row justify-content-center text-center">
    <div class="col-md-7">
      <h2 class="section-heading">Our Top Restaurants</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere illum obcaecati inventore velit laborum earum.</p>
    </div>
  </div>  
  <div class="container">
      <div class="row mb-5">
      
        @foreach ($restaurants as $restaurant)
            @include('theme::partials.restaurant', ['restaurant' => $restaurant])
        @endforeach

      </div>

      <div class="row">
        <div class="col-12 text-center">
         {{ $restaurants->links() }}
      </div>
    </div>
  </div>
</div>
<hr>

<div class="site-section">
  <div class="row justify-content-center text-center">
    <div class="col-md-7">
      <h2 class="section-heading">Our Top Prodicts</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere illum obcaecati inventore velit laborum earum.</p>
    </div>
  </div>  
  <div class="container">
      <div class="row mb-5">
        
        @foreach ($products as $product)
          <div class="col-md-4">
              @include('theme::partials.product', ['product' => $product])
          </div>
        @endforeach

      </div>
      <div class="row">
        <div class="col-12 text-center">
         {{ $products->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
