<div class="post-entry">
  <a href="#" class="d-block mb-4">
  <img src="{{ asset('/storage/'.$product->image) }}" alt="Image" class="img-fluid">
  </a>
  <div class="post-text">
  <span class="post-meta"><a href="#">
    @isset($product->restaurant)
      {{$product->restaurant->name}}
    @endisset  
  </a></span>  
  <h3><a href="#">{{$product->name}}</a></h3>
  <p>{{$product->description}}</p>
  <p>Rs : {{$product->price}}</p>
    <p><a href="{{ route('restaurant.show', $product->restaurant->slug) }}" class="btn btn-primary">Read more</a></p>
  </div>
</div>