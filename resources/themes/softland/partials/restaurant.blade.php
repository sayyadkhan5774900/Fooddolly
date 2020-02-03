<div class="col-md-4">
    <div class="post-entry">
      <a href="#" class="d-block mb-4">
      <img src="{{ asset('/storage/'.$restaurant->banner_image) }}" alt="Image" class="img-fluid">
      </a>
      <div class="post-text">
      <span class="post-meta"><a href="#">
        @isset($restaurant->owner)
          {{$restaurant->owner->name}}
        @endisset  
      </a></span>  
      <h3><a href="#">{{$restaurant->name}}</a></h3>
      <p>{{$restaurant->address}}</p>
      <p>Phone : {{$restaurant->phone}}</p>
        <p><a href="{{ route('restaurant.show', $restaurant->slug) }}" class="btn btn-primary">Read more</a></p>
      </div>
    </div>
  </div>