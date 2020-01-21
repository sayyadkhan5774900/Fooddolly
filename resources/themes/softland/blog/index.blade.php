@extends('theme::layouts.index')

@section('tittle')
    Our New Blog
@endsection

@section('content')  

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        
        @foreach ($posts as $post)
            @include('theme::partials.post', ['post' => $post])
        @endforeach

      </div>

      <div class="row">
        <div class="col-12 text-center">
         {{ $posts->links() }}
      </div>
    </div>
  </div>
  
@endsection

