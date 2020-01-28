<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('template.partials.meta')
    <style>
        html,
        body,
        header,
        .jarallax {
        height: 100%;
        }

        @media (min-width: 560px) and (max-width: 740px) {

        html,
        body,
        header,
        .jarallax {
            height: 500px;
        }
        }

        @media (min-width: 800px) and (max-width: 850px) {

        html,
        body,
        header,
        .jarallax {
            height: 500px;
        }
        }

    </style>
</head>

<body class="intro-page spa-lp">

    <!--Navigation & Intro-->
    <header>

        <!--Navbar-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar deep-purple lighten-2">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>{{ setting('site.title') }}</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--Links-->
            <ul class="navbar-nav mr-auto smooth-scroll">
                {{ menu('primary', 'layouts.partials.primary') }}
            </ul>

            <!--Social Icons-->
            <ul class="navbar-nav nav-flex-icons">
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
        <!--/Navbar-->

        <!-- Intro Section -->
        <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}'
        style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/30.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="mask rgba-purple-slight">
            <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="row smooth-scroll">
                <div class="col-md-12 white-text text-center">
                <div class="wow fadeInDown" data-wow-delay="0.2s">
                    <h3 class="display-3 font-weight-bold mb-2">Spa & Beauty</h3>
                    <hr class="hr-light">
                    <h4 class="subtext-header mt-4 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
                    <p class="mb-5"> Deleniti consequuntur, nihil voluptatem modi nobis veniam.</p>
                </div>
                <a class="btn btn-rounded btn-purple-2 white-text  wow fadeInUp" data-wow-delay="0.2s">Make a
                    reservation</a>
                </div>
            </div>
            </div>
        </div>
        </div>


    </header>
    <!--/Navigation & Intro-->

    <!--Main content-->
    <main>

        <!--First container-->
        <div class="container">

        <!--Section: About-->
        <section id="about" class="about mt-4 mb-3">

            <!--Secion heading-->
            <h2 class="text-center mb-5 my-5 py-4 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">About
            our Spa</h2>

            <!--First row-->
            <div class="row">

            <!--First column-->
            <div class="col-lg-5 col-md-12 mb-5 wow fadeIn" data-wow-delay="0.4s">

                <!--Image-->
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Relax/4-col/img%20%287%29.jpg"
                class="img-fluid z-depth-1 rounded" alt="My photo">

            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-lg-6 ml-lg-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">

                <!--Title-->
                <h4 class="grey-text-2 mb-4">Special Treatments</h4>

                <!--Description-->
                <p class="grey-text-2" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi
                soluta ratione quisquam, dicta
                ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime
                temporibus maiores quibusdam quasi.Rem magnam ad perferendis iusto sint tempora ea voluptatibus
                iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit.
                Beatae maxime temporibus maiores quibusdam quasi</p>

                <a class="btn btn-rounded btn-purple-2 white-text wow fadeIn" data-wow-delay="0.2s"><i
                    class="fas fa-gift fa-2x mr-2"></i>gift voucher</a>

            </div>
            <!--/Second column-->

            </div>
            <!--/First row-->

        </section>
        <!--/Section: About-->

        <hr>

        <!--Projects section v.3-->
        <section id="services" class="mt-4 mb-4">

            <!--Section heading-->
            <h2 class="text-center my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">Our services</h2>
            <!--Section description-->
            <p class="text-center grey-text w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <!--First row-->
            <div class="row">

            <!--First column-->
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.4s">

                <div class="mb-2">

                <!-- Nav tabs -->
                <ul class="nav md-pills pills-secondary flex-center" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel31" role="tab"><i class="far fa-gem fa-2x"></i><br>
                        Therapy</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel32" role="tab"><i
                        class="far fa-sun fa-2x"></i><br> Massage</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel33" role="tab"><i class="fas fa-star fa-2x"></i><br>
                        Cosmetic</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel34" role="tab"><i
                        class="fas fa-coffee fa-2x"></i><br> Harmony</a>
                    </li>
                </ul>

                </div>

                <!--Tab panels-->
                <div class="tab-content">

                <!--Panel 1-->
                <div class="tab-pane fade show in active" id="panel31" role="tabpanel">
                    <br>

                    <!--First row-->
                    <div class="row">

                    <!--First column-->
                    <div class="col-lg-5 col-md-12 mb-5">

                        <!--Featured image-->
                        <div class="view overlay z-depth-1 rounded">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Relax/4-col/img%20%289%29.jpg"
                            class="img-fluid">
                        </div>
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-lg-6 ml-xl-auto col-md-12 text-left">

                        <!--Title-->
                        <h4 class="mb-3">Face and body treatments</h4>

                        <!--Description-->
                        <p class="grey-text-2" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Nemo animi soluta ratione
                        quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                        eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                        perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                        possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                    </div>
                    <!--/Second column-->
                    </div>
                    <!--/First row-->

                </div>
                <!--/.Panel 1-->

                <!--Panel 2-->
                <div class="tab-pane fade" id="panel32" role="tabpanel">
                    <br>

                    <!--First row-->
                    <div class="row">

                    <!--First column-->
                    <div class="col-lg-5 col-md-12 mb-5">

                        <!--Featured image-->
                        <div class="view overlay z-depth-1 rounded">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Relax/4-col/img%20%286%29.jpg"
                            class="img-fluid">
                        </div>
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-lg-6 ml-xl-auto col-md-12 text-left">

                        <!--Title-->
                        <h4 class="mb-3">Massages</h4>

                        <!--Description-->
                        <p class="grey-text-2" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Nemo animi soluta ratione
                        quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                        eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                        perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                        possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                    </div>
                    <!--/Second column-->
                    </div>
                    <!--/First row-->

                </div>
                <!--/.Panel 2-->

                <!--Panel 3-->
                <div class="tab-pane fade" id="panel33" role="tabpanel">
                    <br>

                    <!--First row-->
                    <div class="row">

                    <!--First column-->
                    <div class="col-lg-5 col-md-12 mb-5">

                        <!--Featured image-->
                        <div class="view overlay z-depth-1 rounded">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Relax/4-col/img%20%2810%29.jpg"
                            class="img-fluid">
                        </div>
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-lg-6 ml-xl-auto col-md-12 text-left">

                        <!--Title-->
                        <h4 class="mb-3">Cosmetics</h4>

                        <!--Description-->
                        <p class="grey-text-2" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Nemo animi soluta ratione
                        quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                        eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                        perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                        possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                    </div>
                    <!--/Second column-->
                    </div>
                    <!--/First row-->

                </div>
                <!--/.Panel 3-->

                <!--Panel 4-->
                <div class="tab-pane fade" id="panel34" role="tabpanel">
                    <br>

                    <!--First row-->
                    <div class="row">

                    <!--First column-->
                    <div class="col-lg-5 col-md-12 mb-5">

                        <!--Featured image-->
                        <div class="view overlay z-depth-1 z-depth-1 rounded">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Relax/4-col/img%20%287%29.jpg"
                            class="img-fluid">
                        </div>

                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-lg-6 ml-xl-auto col-md-12 text-left">

                        <!--Title-->
                        <h4 class="mb-3">Harmony</h4>

                        <!--Description-->
                        <p class="grey-text-2" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Nemo animi soluta ratione
                        quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                        eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                        perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                        possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                    </div>
                    <!--/Second column-->
                    </div>
                    <!--/First row-->

                </div>
                <!--/.Panel 4-->

                </div>
                <!--/Tab panels-->

            </div>
            <!--/First column-->

            </div>
            <!--/First row-->

        </section>
        <!--/Projects section v.3-->

        </div>
        <!--/First container-->

        <!--Streak-->
        <div class="streak streak-photo streak-md"
        style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20%281%29.jpg');">
        <div class="flex-center mask rgba-purple-light">
            <div class="text-center white-text">
            <h2 class="h2-responsive my-5 pt-5"><i class="fas fa-quote-left" aria-hidden="true"></i> Find a way to get a
                full-body massage every day.
                <i class="fas fa-quote-right" aria-hidden="true"></i></h2>
            <h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s">~ S. Jay Olshansky</h5>
            </div>
        </div>
        </div>
        <!--/Streak-->

        <!--Second container-->
        <div class="container">

        <!--Section: Features v.1-->
        <section id="attractions" class="mt-4 mb-4">

            <!--Section heading-->
            <h2 class="text-center my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">Attractions</h2>
            <!--Section sescription-->
            <p class="text-center grey-text w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum
            dolores reiciendis
            ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus.</p>

            <!--First row-->
            <div class="row features wow fadeIn" data-wow-delay="0.2s">

            <div class="col-md-6 col-lg-3 text-center">
                <div class="icon-area  white">
                <div class="circle-icon">
                    <i class="fas fa-leaf purple-text-2"></i>
                </div>
                <br>
                <h5 class="dark-grey-text font-weight-bold mt-2">Lorem ipsum</h5>
                <div class="mt-1">
                    <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting let.</p>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 text-center">
                <div class="icon-area">
                <div class="circle-icon">
                    <i class="fas fa-tint purple-text-2"></i>
                </div>
                <br>
                <h5 class="dark-grey-text font-weight-bold mt-2">Lorem ipsum</h5>
                <div class="mt-1">
                    <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting let.</p>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 text-center mb-4">
                <div class="icon-area">
                <div class="circle-icon">
                    <i class="fas fa-gift purple-text-2"></i>
                </div>
                <br>
                <h5 class="dark-grey-text font-weight-bold mt-2">Lorem ipsum</h5>
                <div class="mt-1">
                    <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting let.</p>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 text-center">
                <div class="icon-area  white">
                <div class="circle-icon">
                    <i class="fas fa-bullseye purple-text-2"></i>
                </div>
                <br>
                <h5 class="dark-grey-text font-weight-bold mt-2">Lorem ipsum</h5>
                <div class="mt-1">
                    <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting let.</p>
                </div>
                </div>
            </div>

            </div>
            <!--/First row-->

        </section>
        <!--/Section: Features v.1-->

        </div>

        <div class="container-fluid background-grey">
        <div class="container">

            <!--Section: Pricing v.5-->
            <section id="pricing" class="pb-5">

            <!--Secion heading-->
            <h2 class="text-center mb-5 my-5 py-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">Our
                top offers</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">
                <!--Card-->
                <div class="pricing-card naked-card">

                    <!--Content-->
                    <div class="card-body dark-grey-text">
                    <h5 class="font-weight-bold mt-3">Spa & Beauty</h5>

                    <!-- Price -->
                    <div class="price pt-0">
                        <h2 class="number purple-text-2 mb-0">199</h2>
                    </div>
                    <ul class="striped dark-grey-text darker-striped">
                        <li>
                        <p><strong>3</strong> attraction</p>
                        </li>
                        <li>
                        <p><strong>10</strong> lorem ipsum</p>
                        </li>
                        <li>
                        <p><strong>15</strong> lorem ipsum</p>
                        </li>
                        <li>
                        <p><strong>200</strong> lorem ipsum</p>
                        </li>
                    </ul>
                    <a class="btn btn-purple-2 white-text btn-rounded">Buy now</a>
                    </div>
                </div>
                <!--Card-->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                <!-- Card -->
                <div class="card card-image"
                    style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(7).jpg');">

                    <!-- Content -->
                    <div
                    class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3">

                    <!--Content-->
                    <div class="card-body white-text">
                        <h5 class="font-weight-bold">Relax Day</h5>

                        <!-- Price -->
                        <div class="price pt-0">
                        <h2 class="number mb-0">299</h2>
                        </div>
                        <!--/.Price-->
                        <ul class="striped">
                        <li>
                            <p><strong>5</strong> attractions</p>
                        </li>
                        <li>
                            <p><strong>20</strong> lorem ipsum</p>
                        </li>
                        <li>
                            <p><strong>50</strong> lorem ipsum</p>
                        </li>
                        <li>
                            <p><strong>300</strong> lorem ipsum</p>
                        </li>
                        </ul>
                        <a class="btn btn-outline-white btn-rounded">Buy now</a>
                    </div>
                    </div>
                </div>
                <!--Card-->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">
                <!--Card-->
                <div class="pricing-card naked-card">

                    <!--Content-->
                    <div class="card-body dark-grey-text">
                    <h5 class="font-weight-bold mt-3">Massage</h5>

                    <!-- Price -->
                    <div class="price pt-0">
                        <h2 class="number purple-text-2 mb-0">99</h2>
                    </div>
                    <ul class="striped dark-grey-text darker-striped">
                        <li>
                        <p><strong>2</strong> attrations</p>
                        </li>
                        <li>
                        <p><strong>20</strong> lorem ipsum</p>
                        </li>
                        <li>
                        <p><strong>35</strong> lorem ipsum</p>
                        </li>
                        <li>
                        <p><strong>100</strong> lorem ipsum</p>
                        </li>
                    </ul>
                    <a class="btn btn-purple-2 white-text btn-rounded"> Buy now</a>
                    </div>

                </div>
                <!--Card-->
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            </section>
            <!--/Section: Pricing v.5-->

        </div>
        </div>

        <div class="container">

        <!--Section: Testimonials v.3-->
        <section id="testimonials" class="team-section">

            <!--Section heading-->
            <h2 class="text-center my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">What Clients said
            </h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto my-5 grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Fugit, error amet numquam iure provident voluptate
            esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

            <!--First row-->
            <div class="row text-center">

            <!--First column-->
            <div class="col-md-4 mb-4">

                <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto mb-3">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg"
                    class="rounded-circle img-fluid z-depth-1">
                </div>

                <!--Content-->
                <h5 class="dark-grey-text font-weight-bold">Anna Deynah</h5>
                <p>
                    <div class="grey-text-2"><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.
                    Quod eos id officiis hic tenetur quae quaerat ad velit ab.
                </p>
                </div>

                <!--Review-->
                <div class="pink-text-2">
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star-half-alt"> </i>
                </div>
            </div>
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-md-4 mb-4">
            <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto mb-3">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
                    class="rounded-circle img-fluid z-depth-1">
                </div>

                <!--Content-->
                <h5 class="dark-grey-text font-weight-bold">Kate Doe</h5>
                <p>
                <div class="grey-text-2"><i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam
                    corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.
                </p>
            </div>

            <!--Review-->
            <div class="pink-text-2 mb-5">
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
            </div>
            </div>
        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class="col-md-4 mb-4">
        <div class="testimonial">
            <!--Avatar-->
            <div class="avatar mx-auto mb-3">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(5).jpg"
                class="rounded-circle img-fluid z-depth-1">
            </div>
            <!--Content-->
            <h5 class="dark-grey-text font-weight-bold">Maria Kate</h5>
            <p>
            <div class="grey-text-2"><i class="fas fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos
                ducimus
                qui blanditiis praesentium voluptatum deleniti atque corrupti.
            </p>
        </div>

        <!--Review-->
        <div class="pink-text-2">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="far fa-star"> </i>
        </div>

        </div>
        </div>
        <!--/Third column-->

        </div>
        <!--/First row-->

        </section>

        </div>

        <div class="container-fluid background-grey">
        <div class="container">

            <!--First row-->
            <div class="row pb-4 pt-3 wow fadeIn" data-wow-delay="0.2s">

            <!--First column-->
            <div class="col-md-12 mb-4 text-center">

                <!--Title-->
                <h2 class="text-center mb-5 my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">Sale 30%
                OFF</h2>

                <a class="btn btn-rounded btn-purple-2 white-text  wow fadeIn waves-effect waves-light"
                data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Reservation</a>
                <a class="btn btn-rounded pink white-text lighten-3 wow fadeIn waves-effect waves-light"
                data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">gift
                voucher</a>

            </div>
            <!--/First column-->

            </div>
            <!--/First row-->
        </div>
        </div>

        <div class="container">

        <!--Section: Newsletter-->
        <section id="newsletter" class="mt-5 mb-5 pb-5 wow fadeIn newsletter" data-wow-delay="0.2s">

            <!--Section heading-->
            <h2 class="text-center mb-5 my-5 py-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
            Frequently asked questions</h2>

            <!--Section sescription-->

            <!--First row-->
            <div class="row">

            <!--First column-->
            <div class="col-lg-6 mb-3">

                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header pt-0" role="tab" id="headingOne">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h5 class="mb-0 dark-grey-text"><strong>
                            Lorem ipsum dolor sit amet? </strong><i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                    data-parent="#accordionEx">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt.
                    </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo">
                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <h5 class="mb-0 dark-grey-text"><strong>
                            Ad vegan excepteur butcher vice?</strong> <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                    data-parent="#accordionEx">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                        probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree">
                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        <h5 class="mb-0 dark-grey-text"><strong>
                            Anim pariatur cliche reprehenderit? </strong> <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                    data-parent="#accordionEx">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                        probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>
                <!-- Accordion card -->
                </div>
                <!--/.Accordion wrapper-->

            </div>
            <!--First column-->

            <div class="col-lg-6">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Relax/4-col/img%20%288%29.jpg"
                class="img-fluid z-depth-1 rounded" alt="sample image">

            </div>

            </div>
            <!--/First row-->

        </section>
        <!--/Section: Newsletter-->

        </div>

    </main>
    <!--/Main content-->



    <!--Footer-->
    <footer class="page-footer deep-purple lighten-2 text-center text-md-left pt-0">

        <!--Footer Links-->
        <div class="container">

        <!--Grid row-->
        <div class="row pt-5 mb-3 text-center d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold"><a href="#!">About us</a></h6>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold"><a href="#!">Products</a></h6>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold"><a href="#!">Awards</a></h6>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold"><a href="#!">Help</a></h6>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold"><a href="#!">Contact</a></h6>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="rgba-white-light" style="margin: 0 15%;">

        <!--Grid row-->
        <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

            <!--Grid column-->
            <div class="col-md-8 col-12 mt-5">
            <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur.</p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

        <!--Grid row-->
        <div class="row pb-3">

            <!--Grid column-->
            <div class="col-md-12">

            <div class="footer-socials mb-5 flex-center">
                <!--Facebook-->
                <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f fa-lg white-text mr-md-4"> </i></a>
                <!--Twitter-->
                <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter fa-lg white-text mr-md-4"> </i></a>
                <!--Google +-->
                <a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g fa-lg white-text mr-md-4"> </i></a>
                <!--Linkedin-->
                <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in fa-lg white-text mr-md-4"> </i></a>
                <!--Instagram-->
                <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram fa-lg white-text mr-md-4"> </i></a>
                <!--Pinterest-->
                <a class="p-2 m-2 fa-lg pin-ic"><i class="fab fa-pinterest fa-lg white-text"> </i></a>
            </div>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

        </div>
        <!--/Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
        </div>
        </div>
        <!--/Copyright-->

    </footer>
    <!--/Footer-->
    
    @include('template.partials.script')
    <script>
        //Animation init
        new WOW().init();

        // Material Select Initialization
        $(document).ready(function () {
        $('.mdb-select').material_select();
        });

    </script>

</body>

</html>
