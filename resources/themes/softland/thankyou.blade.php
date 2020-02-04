 @extends('theme::layouts.index')

@section('hero_tittle')
    Thank From Fooddolly
@endsection

@section('content')
<div class="site-section">
  <div class="container">
    
    <div class="row justify-content-center text-center">
      <div class="col-md-7 mb-5">
        <h2 class="section-heading">Thank For Choosing Fooddolly</h2>
        <p>Your Payment is Reviced Successfully.</p>
        <a class="btn btn-primary" href="{{ route('home') }}" role="button">Go Home</a>
      </div>
    </div>
  </div>
</div>


@endsection
