@extends('layouts.app_ecommerce')

@section('content')
    <!-- Main Container -->
    <div class="container">

        <!-- Section: Product detail -->
        <section id="productDetails" class="pb-5">

        <!-- News card -->
        <div class="card mt-5 hoverable">

            <div class="row mt-5">

            <div class="col-lg-6">

                <!-- Carousel Wrapper -->
                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

                <!-- Slides -->
                <div class="carousel-inner text-center text-md-left" role="listbox">

                    <div class="carousel-item active">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/17.jpg" alt="First slide"
                        class="img-fluid">

                    </div>

                    <div class="carousel-item">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/18.jpg" alt="Second slide"
                        class="img-fluid">

                    </div>

                    <div class="carousel-item">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/19.jpg" alt="Third slide"
                        class="img-fluid">

                    </div>

                </div>
                <!-- Slides -->

                <!-- Thumbnails -->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">

                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                    <span class="sr-only">Previous</span>

                </a>

                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">

                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    <span class="sr-only">Next</span>

                </a>
                <!-- Thumbnails -->

                </div>
                <!-- Carousel Wrapper -->

            </div>

            <div class="col-lg-5 mr-3 text-center text-md-left">

                <h2
                class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">

                <strong>{{ $collection->name }}</strong>

                </h2>

                <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">{{ $collection->category_id }}</span>

                <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">

                <span class="red-text font-weight-bold">

                    <strong>Bs. Gratis</strong>

                </span>
{{--  
                <span class="grey-text">

                    <small>

                    <s>$89</s>

                    </small>

                </span>  --}}

                </h3>

                <!-- Accordion wrapper -->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne1">

                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                        aria-controls="collapseOne1">

                        <h5 class="mb-0">

                        Descriptción

                        <i class="fas fa-angle-down rotate-icon"></i>

                        </h5>

                    </a>

                    </div>

                    <!-- Card body -->
                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                    data-parent="#accordionEx">

                    <div class="card-body">
                        {{ $collection->description }}
                    </div>

                    </div>

                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo2">

                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                        aria-expanded="false" aria-controls="collapseTwo2">

                        <h5 class="mb-0">

                            Negocios o Empresas

                            <i class="fas fa-angle-down rotate-icon"></i>

                        </h5>

                    </a>

                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                    data-parent="#accordionEx">

                    <div class="card-body">

                        {{ $collection->bussine_id }}

                      

                    </div>

                    </div>

                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree3">

                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                        aria-expanded="false" aria-controls="collapseThree3">

                        <h5 class="mb-0">

                        Blockes o Modulos

                        <i class="fas fa-angle-down rotate-icon"></i>

                        </h5>

                    </a>

                    </div>

                    <!-- Card body -->
                    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">

                        <div class="card-body">.
                            {{ $collection->block_id }}
                        </div>

                    </div>

                </div>
                <!-- Accordion card -->

                </div>
                <!-- Accordion wrapper -->

                <!-- Add to Cart -->
                <section class="color">

                <div class="mt-5">

                    {{--  <p class="grey-text">Choose your color</p>

                    <div class="row text-center text-md-left">

                    <div class="col-md-4 col-12 ">

                        <!-- Radio group -->
                        <div class="form-group">

                        <input class="form-check-input" name="group100" type="radio" id="radio100" checked="checked">

                        <label for="radio100" class="form-check-label dark-grey-text">Blue</label>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <!-- Radio group -->
                        <div class="form-group">

                        <input class="form-check-input" name="group100" type="radio" id="radio101">

                        <label for="radio101" class="form-check-label dark-grey-text">Orange</label>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <!-- Radio group -->
                        <div class="form-group">

                        <input class="form-check-input" name="group100" type="radio" id="radio102">

                        <label for="radio102" class="form-check-label dark-grey-text">Red</label>

                        </div>

                    </div>

                    </div>  --}}

                    <div class="row mt-3 mb-4">

                    <div class="col-md-12 text-center text-md-left text-md-right">
                        <a href="/plantillas" class="btn btn-default btn-rounded">
                            Volver al Markerplace
                        </a>

                        <a href="{{ route('template_change', $collection->name_short) }}" class="btn btn-primary btn-rounded">
                            Activar Ahora
                        </a>

                    </div>

                    </div>

                </div>

                </section>
                <!-- Add to Cart -->

            </div>

            </div>

        </div>

        </section>

        <!-- Section: Product detail -->
        <div class="divider-new">

        <h3 class="h3-responsive font-weight-bold blue-text mx-3">Comentarios</h3>

        </div>

        <!-- Product Reviews -->
        <section id="reviews" class="pb-5">

          @comments(['model' => $collection])

        </section>

        <!-- Product Reviews -->
        <div class="divider-new">

        <h3 class="h3-responsive font-weight-bold blue-text mx-3">Plantillas Recomendadas</h3>

        </div>

        <!-- Section: Products v.5 -->
        <section id="products" class="pb-5">

        <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi,

            veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <!-- Carousel Wrapper -->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!-- Controls -->
            <div class="controls-top">

            <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">

                <i class="fas fa-chevron-left"></i>

            </a>

            <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">

                <i class="fas fa-chevron-right"></i>

            </a>

            </div>
            <!-- Controls -->

            <!-- Indicators -->
            <ol class="carousel-indicators">

            <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>

            <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>

            <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>

            </ol>
            <!-- Indicators -->

            <!-- Slides -->
            <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active">

                <div class="col-md-4 mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid"
                        alt="">

                    <a>

                        <div class="mask rgba-white-slight"></div>

                    </a>

                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                        <strong>

                        <a href="" class="dark-grey-text">Sony TV-675i</a>

                        </strong>

                    </h5>

                    <span class="badge badge-danger mb-2">bestseller</span>

                    <!-- Rating -->
                    <ul class="rating">

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star grey-text"></i>

                        </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                        <div class="row mb-0">

                        <span class="float-left">

                            <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                            <i class="fas fa-shopping-cart ml-3"></i>

                            </a>

                        </span>

                        </div>

                    </div>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

                </div>

                <div class="col-md-4 clearfix d-none d-md-block mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid"
                        alt="">

                    <a>

                        <div class="mask rgba-white-slight"></div>

                    </a>

                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                        <strong>

                        <a href="" class="dark-grey-text">Samsung 786i</a>

                        </strong>

                    </h5>

                    <span class="badge badge-info mb-2">new</span>

                    <!-- Rating -->
                    <ul class="rating">

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star grey-text"></i>

                        </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                        <div class="row mb-0">

                        <span class="float-left">

                            <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                            <i class="fas fa-shopping-cart ml-3"></i>

                            </a>

                        </span>

                        </div>

                    </div>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

                </div>

                <div class="col-md-4 clearfix d-none d-md-block mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid"
                        alt="">

                    <a>

                        <div class="mask rgba-white-slight"></div>

                    </a>

                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                        <strong>

                        <a href="" class="dark-grey-text">Canon 675-D</a>

                        </strong>

                    </h5>

                    <span class="badge badge-danger mb-2">bestseller</span>

                    <!-- Rating -->
                    <ul class="rating">

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                        <div class="row mb-0">

                        <span class="float-left">

                            <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                            <i class="fas fa-shopping-cart ml-3"></i>

                            </a>

                        </span>

                        </div>

                    </div>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

                </div>

            </div>
            <!-- First slide -->

            <!-- Second slide -->
            <div class="carousel-item">

                <div class="col-md-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid"
                        alt="">

                    <a>

                        <div class="mask rgba-white-slight"></div>

                    </a>

                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                        <strong>

                        <a href="" class="dark-grey-text">Samsung V54</a>

                        </strong>

                    </h5>

                    <span class="badge grey mb-2">best rated</span>

                    <!-- Rating -->
                    <ul class="rating">

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                        <div class="row mb-0">

                        <span class="float-left">

                            <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                            <i class="fas fa-shopping-cart ml-3"></i>

                            </a>

                        </span>

                        </div>

                    </div>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

                </div>

                <div class="col-md-4 clearfix d-none d-md-block mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" class="img-fluid"
                        alt="">

                    <a>

                        <div class="mask rgba-white-slight"></div>

                    </a>

                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                        <strong>

                        <a href="" class="dark-grey-text">Dell V-964i</a>

                        </strong>

                    </h5>

                    <span class="badge badge-info mb-2">new</span>

                    <!-- Rating -->
                    <ul class="rating">

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                        <div class="row mb-0">

                        <span class="float-left">

                            <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                            <i class="fas fa-shopping-cart ml-3"></i>

                            </a>

                        </span>

                        </div>

                    </div>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

                </div>

                <div class="col-md-4 clearfix d-none d-md-block mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" class="img-fluid"
                        alt="">

                    <a>

                        <div class="mask rgba-white-slight"></div>

                    </a>

                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                        <strong>

                        <a href="" class="dark-grey-text">iPad PRO</a>

                        </strong>

                    </h5>

                    <span class="badge badge-danger mb-2">bestseller</span>

                    <!-- Rating -->
                    <ul class="rating">

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star grey-text"></i>

                        </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                        <div class="row mb-0">

                        <span class="float-left">

                            <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                            <i class="fas fa-shopping-cart ml-3"></i>

                            </a>

                        </span>

                        </div>

                    </div>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

                </div>

            </div>
            <!-- Second slide -->

            <!-- Third slide -->
            <div class="carousel-item">

                <div class="col-md-4 mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                        alt="">

                    <a>

                        <div class="mask rgba-white-slight"></div>

                    </a>

                    </div>

                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                        <strong>

                        <a href="" class="dark-grey-text">Asus CT-567</a>

                        </strong>

                    </h5>

                    <span class="badge grey mb-2">best rated</span>

                    <!-- Rating -->
                    <ul class="rating">

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                        <div class="row mb-0">

                        <span class="float-left">

                            <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                            <i class="fas fa-shopping-cart ml-3"></i>

                            </a>

                        </span>

                        </div>

                    </div>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

                </div>

                <div class="col-md-4 clearfix d-none d-md-block mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid"
                        alt="">

                    <a>

                        <div class="mask rgba-white-slight"></div>

                    </a>

                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                        <strong>

                        <a href="" class="dark-grey-text">Dell 786i</a>

                        </strong>

                    </h5>

                    <span class="badge badge-info mb-2">new</span>

                    <!-- Rating -->
                    <ul class="rating">

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star grey-text"></i>

                        </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                        <div class="row mb-0">

                        <span class="float-left">

                            <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                            <i class="fas fa-shopping-cart ml-3"></i>

                            </a>

                        </span>

                        </div>

                    </div>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

                </div>

                <div class="col-md-4 clearfix d-none d-md-block mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" class="img-fluid"
                        alt="">

                    <a>

                        <div class="mask rgba-white-slight"></div>

                    </a>

                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                        <strong>

                        <a href="" class="dark-grey-text">Headphones</a>

                        </strong>

                    </h5>

                    <span class="badge badge-info mb-2">new</span>

                    <!-- Rating -->
                    <ul class="rating">

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                        <i class="fas fa-star blue-text"></i>

                        </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                        <div class="row mb-0">

                        <span class="float-left">

                            <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                            <i class="fas fa-shopping-cart ml-3"></i>

                            </a>

                        </span>

                        </div>

                    </div>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

                </div>

            </div>
            <!-- Third slide -->

            </div>
            <!-- Slides -->

        </div>
        <!-- Carousel Wrapper -->

        </section>
        <!-- Section: Products v.5 -->

    </div>
    <!-- Main Container -->
@stop