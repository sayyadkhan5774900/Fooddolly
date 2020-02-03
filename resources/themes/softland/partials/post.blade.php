<div class="col-md-4">
    <div class="post-entry">
      <a href="{{ route('blog.show', $post->slug) }}" class="d-block mb-4">
      <img src="{{ asset('/storage/'.$post->image) }}" alt="Image" class="img-fluid">
      </a>
      <div class="post-text">
      <span class="post-meta">{{ $post->created_at->format('M,d,y') }} 
         <a href="#">
          @isset($post->author)
            &bullet; By {{ $post->author->name }}
          @endisset  
        </a></span>  
      <h3><a href="{{ route('blog.show', $post->slug) }}">{{$post->title}}</a></h3>
      <p>{{$post->excerpt}}</p>
        <p><a href="{{ route('blog.show', $post->slug) }}" class="btn btn-primary">Read more</a></p>
      </div>
    </div>
  </div>