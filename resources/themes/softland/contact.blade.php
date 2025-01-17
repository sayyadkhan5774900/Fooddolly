@extends('theme::layouts.index')

@section('tittle')
    Our Contacts
@endsection


@section('content')

<div class="site-section">
  <div class="container">
    <div class="row mb-5 align-items-end">
      <div class="col-md-6" data-aos="fade-up">
      
        <h2>Contact Form</h2>
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis explicabo inventore.</p>
      </div>
      
    </div>
    
        <div class="row">
          <div class="col-md-4 ml-auto order-2"  data-aos="fade-up">
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1">Address</strong>
                <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Phone</strong>
                <span>+1 232 3235 324</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Email</strong>
                <span>youremail@domain.com</span>
              </li>
            </ul>
          </div>

          <div class="col-md-6 mb-5 mb-md-0"  data-aos="fade-up">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" cols="30" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                  <div class="validate"></div>
                </div>


                <div class="col-md-12 mb-3">
                    <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="col-md-6 form-group">
                  <input type="submit" class="btn btn-primary d-block w-100" value="Send Message">
                </div>
              </div>

            </form>
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
