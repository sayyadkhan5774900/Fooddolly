<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-lg-2">
          <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">SoftLand</a></h1>
        </div>

        <div class="col-12 col-md-10 d-none d-lg-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="{{ active('home') }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
              <li class="{{ active('features') }}"><a href="{{ route('features') }}" class="nav-link">Features</a></li>
              <li class="{{ active('pricing') }}"><a href="{{ route('pricing') }}" class="nav-link">Pricing</a></li>

              <li class="has-children {{ active('blog.*') }}">
                <a href="blog.html" class="nav-link">Blog</a>
                <ul class="dropdown">
                  <li {{ active('blog.index') }}><a href="{{ route('blog.index') }}" class="nav-link">Blog</a></li>
                  {{-- <li><a href="{{ route('blog.show') }}" class="nav-link">Blog Sigle</a></li> --}}
                </ul>
              </li>
              <li class="{{ active('contact') }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>

              @guest
              <li class="{{ active('login') }}">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="{{ active('register') }}">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
              @else
                  <li class="has-children {{ active('logout') }}">
                    <a href="blog.html" class="nav-link">{{ Auth::user()->name }}</a>
                    <ul class="dropdown">
                      <div>
                        <a class="nav-link" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    </ul>
                  </li>
              @endguest
            </ul>

            
          </nav>
        </div>


        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

          <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
            data-target="#main-navbar">
            <span></span>
          </a>
        </div>

      </div>
    </div>

  </header>
