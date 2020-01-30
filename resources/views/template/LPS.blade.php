<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('template.partials.meta')
  <style type="text/css">
    html,
    body,
    header,
    .intro-2 {
      height: 100%;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .intro-2 {
        height: 900px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .intro-2 {
        height: 980px;
      }
    }

  </style>
</head>

<body class="software-lp">

  <!--Main Navigation-->
  <header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><strong>{{ setting('site.title') }}</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            {{ menu('primary', 'layouts.partials.primary') }}
          </ul>
          <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                      Ingresar
                    </a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                          Registrarme
                        </a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                      <a class="dropdown-item" href="/home">
                            Perfil
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            Salir
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <!--Intro Section-->
    <section class="view intro-2 rgba-gradient">
      <div class="mask">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row flex-center pt-5 mt-3">
            <div class="col-md-12 col-lg-6 text-center text-md-left margins">
              <div class="white-text">
                <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">{{ $collection->name }}</h1>
                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                <h6 class="wow fadeInLeft" data-wow-delay="0.3s">
                 {{ $collection->description }}
                </h6>
                <br>
                <a href="https://github.com/percy2017/cmsweb" class="btn btn-white btn-rounded blue-text font-weight-bold ml-lg-0 wow fadeInLeft"
                  data-wow-delay="0.3s">GitHub</a>
                <a href="/plantillas" class="btn btn-outline-white btn-rounded font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Ver Plantillas
                </a>
              </div>
            </div>

            <div class="col-md-12 col-lg-6  wow fadeInRight" data-wow-delay="0.3s">
              <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>

  </header>
  <!--Main Navigation-->

  <!--Main content-->
  <main>
    
    @foreach ($blocks as $item)
      @include('template.blocks.'.$item->name)
    @endforeach
  </main>
  <!--Main content-->

  <!--Footer-->
  <footer class="page-footer text-center text-md-left blue-grey lighten-5 pt-0">

    <div style="background-color: #5991fb;">
      <div class="container">
        <!--Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!--Grid column-->
          <div class="col-12 col-md-5 text-left mb-md-0">
            <h6 class="mb-0 white-text text-center text-md-left"><strong>{{ setting('site.description') }}</strong></h6>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-12 col-md-7 text-center text-md-right">
              {{ menu('social', 'layouts.partials.social') }}
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->
      </div>
    </div>

    <!--Footer Links-->
    {{--  <div class="container mt-5 mb-4 text-center text-md-left">
      <div class="row mt-3">

        <!--First column-->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4 dark-grey-text">
          <h6 class="text-uppercase font-weight-bold"><strong>Company name</strong></h6>
          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
        </div>
        <!--/.First column-->

        <!--Second column-->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
          <h6 class="text-uppercase font-weight-bold"><strong>Products</strong></h6>
          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><a href="#!" class="dark-grey-text">MDBootstrap</a></p>
          <p><a href="#!" class="dark-grey-text">MDWordPress</a></p>
          <p><a href="#!" class="dark-grey-text">BrandFlow</a></p>
          <p><a href="#!" class="dark-grey-text">Bootstrap Angular</a></p>
        </div>
        <!--/.Second column-->

        <!--Third column-->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
          <h6 class="text-uppercase font-weight-bold"><strong>Useful links</strong></h6>
          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><a href="#!" class="dark-grey-text">Your Account</a></p>
          <p><a href="#!" class="dark-grey-text">Become an Affiliate</a></p>
          <p><a href="#!" class="dark-grey-text">Shipping Rates</a></p>
          <p><a href="#!" class="dark-grey-text">Help</a></p>
        </div>
        <!--/.Third column-->

        <!--Fourth column-->
        <div class="col-md-4 col-lg-3 col-xl-3 dark-grey-text">
          <h6 class="text-uppercase font-weight-bold"><strong>Contact</strong></h6>
          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!--/.Fourth column-->

      </div>
    </div>  --}}
    <!--/.Footer Links-->

    <!-- Copyright-->
    {{--  <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
      </div>
    </div>  --}}
    <!--/.Copyright -->

  </footer>
  <!--/.Footer-->

  @include('template.partials.script')
  <script>
    //Animation init
    new WOW().init();

    //Modal
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
  </script>
</body>
</html>
