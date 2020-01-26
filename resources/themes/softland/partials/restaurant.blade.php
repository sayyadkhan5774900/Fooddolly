<div class="col-md-4">
    <div class="post-entry">
      <a href="#" class="d-block mb-4">
      <img src="{{ asset('/storage/'.$restuarant->image) }}" alt="Image" class="img-fluid">
      </a>
      <div class="post-text">
      <span class="post-meta"><a href="#">{{$restuarant->owner->name}}</a></span>  
      <h3><a href="#">{{$restuarant->name}}</a></h3>
      <p>{{$restuarant->address}}</p>
      <p>Phone : {{$restuarant->phone}}</p>
        <p><a href="#" class="btn btn-primary">Read more</a></p>
      </div>
    </div>
  </div>