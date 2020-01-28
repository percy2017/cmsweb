@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
          <!-- News jumbotron -->
          <div class="jumbotron text-center hoverable">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-4 offset-md-1 mx-3 my-3">

                <!-- Featured image -->
                <div class="view overlay">
                  <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-7 text-md-left ml-3 mt-3">

                <!-- Excerpt -->
                <a href="#!" class="green-text">
                  <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> Plantillas</h6>
                </a>

                <h4 class="h4 mb-4">{{ setting('site.title') }}</h4>

                <p class="font-weight-normal">
                  Aqui encontras las plantillas que incluye nuestro software, todas son gratuitas pruebalas y disfrutalas.
                </p>
                <p class="font-weight-normal"><a><strong>Actualizado</strong></a>, 15/01/2020</p>

                <a class="btn btn-success" href="/">Volver al Home</a>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- News jumbotron -->    
        </div>
        
        @foreach ($collection as $item)
        
            <div class="col-sm-3 col-md-4" style="padding-bottom: 20px;">
                <!-- Card -->
                <div class="card booking-card">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ asset($item->image) }}" alt="Card image cap">
                        <a href="{{ route('template_change', $item->name_short) }}">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title font-weight-bold"><a>{{ $item->name }}</a></h4>
                        <!-- Data -->
                        <ul class="list-unstyled list-inline rating mb-0">
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                        <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                        </ul>
                        <p class="mb-2">Bs. • Gratis • {{ $item->category_id }}</p>
                        <!-- Text -->
                        <p class="card-text">
                        {{ $item->description }}
                        </p>
                        {{--  <hr class="my-4">  --}}
                        {{--  <p class="lead"><strong>Tags #</strong></p>
                        <ul class="list-unstyled list-inline d-flex justify-content-between mb-0">
                        <li class="list-inline-item mr-0">
                            <div class="chip mr-0">5:30PM</div>
                        </li>
                        <li class="list-inline-item mr-0">
                            <div class="chip mr-0">7:30PM</div>
                        </li>
                        <li class="list-inline-item mr-0">
                            <div class="chip mr-0">8:00PM</div>
                        </li>
                        <li class="list-inline-item mr-0">
                            <div class="chip mr-0">9:00PM</div>
                        </li>
                        </ul>  --}}
                        <!-- Button -->
                        <hr class="my-4"> 
                        <a  @if($item->name_short == setting('site.template'))
                                href="#" role="button" class="btn btn-success">Activado
                            @else
                                href="{{ route('template_change', $item->name_short) }}" role="button" class="btn btn-primary">Activar
                            @endif
                        </a>
                        <a href="{{ route('template_details', $item->slug) }}" class="btn" role="button">Ver Mas</a> 
                    </div>
                </div>
                <!-- Card --> 
            </div>
            
        @endforeach
    </div>
  </div>
@stop