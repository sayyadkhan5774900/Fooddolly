@extends('theme::layouts.index')

@section('hero_tittle')
    {{ $restaurant->name }}
@endsection

@section('hero_detail')
    {{ $restaurant->description }}
@endsection

@section('content')
<section class="site-section">
    <div class="container">
      <div class="row">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
      </div>
      <div class="row">
        <div class="col-md-8 blog-content">

          <div class="row mb-5">
            <div class="col-md">
              <figure><img src="{{ asset('/storage/'.$restaurant->banner_image) }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                {{-- <figcaption>This is an image caption</figcaption></figure> --}}
            </div>
          </div>
          

          <p lead mb-5>{!! $restaurant->long_description !!}</p>



          <div class="site-section">
            <div class="row justify-content-center text-center">
              <div class="col-md-7">
                <h2 class="section-heading">Restaurant Prodicts</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere illum obcaecati inventore velit laborum earum.</p>
              </div>
            </div>  
            <div class="container">
                <div class="row mb-5">
                
                @isset($restaurant->products)
                  @foreach ($restaurant->products as $product)
                    <div class="col-md-3">    
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
                       
                        <form method="POST" action="{{ route('cart.store', $product->slug) }}">
                            @csrf
                          <div class="input-group">
                              <button type="submit" class="btn btn-primary">Add To Cart</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @endisset
          
                </div>
          
                <div class="row">
                  <div class="col-12 text-center">
                   {{-- {{ $products->links() }} --}}
                </div>
              </div>
            </div>
          </div>
          
          {{-- <div class="pt-5">
            <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
          </div> --}}


          {{-- <div class="pt-5">
            <h3 class="mb-5">6 Comments</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard bio">
                  <img src="img/person_1.jpg" alt="Free Website Template by Free-Template.co">
                </div>
                <div class="comment-body">
                  <h3>Jean Doe</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="img/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Jean Doe</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="img/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>Jean Doe</h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>


                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="img/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Jean Doe</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>

                          <ul class="children">
                            <li class="comment">
                              <div class="vcard bio">
                                <img src="img/person_1.jpg" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                              </div>
                            </li>
                          </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="img/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Jean Doe</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>
            </ul>
            <!-- END comment-list -->
            
            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="#" class="">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn btn-primary">
                </div>

              </form>
            </div>
          </div> --}}

        </div>
        <div class="col-md-4 sidebar">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>
          <div class="sidebar-box">
            <div class="categories">
              <h3>Menue</h3>
              @isset($restaurant->categories)
                  @foreach ($restaurant->categories as $category)
                    <li><a href="#">{{$category->name}}<span>(12)</span></a></li>
                   
                    @isset($category->childrenCategories)
                      @foreach ($category->childrenCategories as $childCategory)
                        <ul>
                          <li><a href="#">{{$childCategory->name}}<span>(12)</span></a></li>
                        </ul>
                      @endforeach    
                    @endisset

                  @endforeach
              @endisset
              
            </div>
          </div>
          <div class="sidebar-box">
            <img src="img/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
            <h3>About The Author</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
          </div>

          <div class="sidebar-box">
            <h3>Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
