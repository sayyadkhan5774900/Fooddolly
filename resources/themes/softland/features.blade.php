
@extends('theme::layouts.index')

@section('tittle')
    Fooddolly
@endsection

@section('content')


<div class="site-section pb-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 mr-auto">
        <h2 class="mb-4">Seamlessly Communicate</h2>
        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt dolore mollitia esse natus beatae.</p>
        <p><a href="#">Read More</a></p>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <img src="img/undraw_svg_2.svg" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div> <!-- .site-section -->

<div class="site-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 ml-auto order-2">
        <h2 class="mb-4">Gather Feedback</h2>
        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt dolore mollitia esse natus beatae.</p>
        <p><a href="#">Read More</a></p>
      </div>
      <div class="col-md-6" data-aos="fade-right">
        <img src="img/undraw_svg_3.svg" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div> <!-- .site-section -->

<div class="site-section pb-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 mr-auto">
        <h2 class="mb-4">Present Designs Inspiration</h2>
        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt dolore mollitia esse natus beatae.</p>
        <p><a href="#">Read More</a></p>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <img src="img/undraw_svg_3.svg" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div> <!-- .site-section -->

<div class="site-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 ml-auto order-2">
        <h2 class="mb-4">Powerful App Design </h2>
        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt dolore mollitia esse natus beatae.</p>
        <p><a href="#">Read More</a></p>
      </div>
      <div class="col-md-6" data-aos="fade-right">
        <img src="img/undraw_svg_4.svg" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div> <!-- .site-section -->


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
