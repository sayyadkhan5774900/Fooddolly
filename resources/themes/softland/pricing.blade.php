 @extends('theme::layouts.index')

@section('tittle')
    My Pricing
@endsection

@section('content')
<div class="site-section">
  <div class="container">
    
    <div class="row justify-content-center text-center">
      <div class="col-md-7 mb-5">
        <h2 class="section-heading">Choose A Plan</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere illum obcaecati inventore velit laborum earum.</p>
      </div>
    </div>
    <div class="row align-items-stretch">

      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="pricing h-100 text-center">
          <span>&nbsp;</span>
          <h3>Basic</h3>
          <ul class="list-unstyled">
            <li>Create up to 5 forms</li>
            <li>Generate 100 monthly reports</li>
          </ul>
          <div class="price-cta">
            <strong class="price">Free</strong>
            <p><a href="#" class="btn btn-white">Choose Plan</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="pricing h-100 text-center popular">
          <span class="popularity">Most Popular</span>
          <h3>Professional</h3>
          <ul class="list-unstyled">
            <li>Create up to 20 forms</li>
            <li>Generate 2500 monthly reports</li>
            <li>Manage a team of up to 5 people</li>
          </ul>
          <div class="price-cta">
            <strong class="price">$9.95/month</strong>
            <p><a href="#" class="btn btn-white">Choose Plan</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="pricing h-100 text-center">
          <span class="popularity">Best Value</span>
          <h3>Ultimate</h3>
          <ul class="list-unstyled">
            <li>Create up to 20 forms</li>
            <li>Generate 2500 monthly reports</li>
            <li>Manage a team of up to 5 people</li>
          </ul>
          <div class="price-cta">
            <strong class="price">$199.95/month</strong>
            <p><a href="#" class="btn btn-white">Choose Plan</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section border-top border-bottom">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-4">
        <h2 class="section-heading">Review From Our Users</h2>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-md-7">
        <div class="owl-carousel testimonial-carousel">
          <div class="review text-center">
            <p class="stars">
              <span class="icofont-star"></span>
              <span class="icofont-star"></span>
              <span class="icofont-star"></span>
              <span class="icofont-star"></span>
              <span class="icofont-star muted"></span>
            </p>
            <h3>Excellent App!</h3>
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
            </blockquote>

            

            <p class="review-user">
              <img src="img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
              <span class="d-block">
                <span class="text-black">Jean Doe</span>, &mdash; App User
              </span>
            </p>

          </div>

          <div class="review text-center">
            <p class="stars">
              <span class="icofont-star"></span>
              <span class="icofont-star"></span>
              <span class="icofont-star"></span>
              <span class="icofont-star"></span>
              <span class="icofont-star muted"></span>
            </p>
            <h3>This App is easy to use!</h3>
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
            </blockquote>

            

            <p class="review-user">
              <img src="img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
              <span class="d-block">
                <span class="text-black">Johan Smith</span>, &mdash; App User
              </span>
            </p>

          </div>


          <div class="review text-center">
            <p class="stars">
              <span class="icofont-star"></span>
              <span class="icofont-star"></span>
              <span class="icofont-star"></span>
              <span class="icofont-star"></span>
              <span class="icofont-star muted"></span>
            </p>
            <h3>Awesome functionality!</h3>
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
            </blockquote>

            

            <p class="review-user">
              <img src="img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
              <span class="d-block">
                <span class="text-black">Jean Thunberg</span>, &mdash; App User
              </span>
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
