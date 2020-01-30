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
                            @foreach(json_decode($collection->images) as $file)
                                @php 
                                    $new_image = str_replace('.', '-carusel.', Voyager::Image($file));
                                @endphp
                                @if ($loop->first)
                                    <div class="carousel-item active">
                                        <img src="{{ $new_image }}" alt="First slide" class="img-fluid">
                                    </div>
                                @endif
                                <div class="carousel-item">
                                    <img src="{{ $new_image }}" alt="Second slide" class="img-fluid">
                                </div>
                            @endforeach
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
                        <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                            <strong>{{ $collection->name }}</strong>
                        </h2>
                        <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">{{ $collection->category_id }}</span>
                        <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                            <span class="red-text font-weight-bold">
                                <strong>Bs. Gratis</strong>
                            </span>
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
                                    Descripción
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
                                        <ul>
                                            @foreach(json_decode($collection->bussine_id) as $file)
                                            
                                                <li>{{ $file }}</li>
                                            @endforeach
                                        </ul>
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

                                    <div class="card-body">
                                        <ul>
                                            @foreach(json_decode($collection->block_id) as $file)
                                            
                                                <li>{{ $file }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card -->
                        </div>
                        <!-- Accordion wrapper -->

                        <!-- Add to Cart -->
                        <section class="color">

                            <div class="mt-5">
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
            <h3 class="h3-responsive font-weight-bold blue-text mx-3">Descripcion de la Plantilla</h3>
        </div>
        <!-- Product Reviews -->
        <section id="reviews" class="pb-5">
         {!! $collection->description_lang !!}
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

            <!-- Carousel Wrapper -->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
              
                <!-- Slides -->
                <div class="carousel-inner" role="listbox">

                    <!-- First slide -->
                    <div class="carousel-item active">
                        @foreach (json_decode($collection->template_id) as $file)
                            @php
                                $template = App\Template::where('name_short', $file)->first();
                            @endphp
                            <div class="col-md-4 mb-4">
                                <!-- Card -->
                                <div class="card card-ecommerce">
                                    <!-- Card image -->
                                    <div class="view overlay">
                                    <img src="{{ Voyager::Image($template->image) }}" class="img-fluid"
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
                                                <a href="" class="dark-grey-text">{{  $template->name  }}</a>
                                            </strong>
                                        </h5>
                                        <span class="badge badge-danger mb-2">{{ $template->category_id }}</span>
                                        <!-- Card footer -->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                                <a href="#" class="btn">Ver Mas</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card content -->
                                </div>
                                <!-- Card -->
                            </div>
                        @endforeach

                    </div>
                    <!-- First slide -->


                </div>
                <!-- Slides -->

            </div>
            <!-- Carousel Wrapper -->

        </section>
        <!-- Section: Products v.5 -->

    </div>
    <!-- Main Container -->
@stop