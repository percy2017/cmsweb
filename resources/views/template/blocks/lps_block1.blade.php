
<!--First container-->
<div class="container">
    <!--Section: Features v.1-->
    <section id="features" class="mb-5">
        <!--Section heading-->
        <h1 class="mb-3 my-5 pt-5 dark-grey-text wow fadeIn text-center" data-wow-delay="0.2s"><strong
            class="font-weight-bold">{{ $data->title_strong }}</strong>{{ $data->title }}</h1>
        <!--Section description-->
        <p class="text-center grey-text w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">
            {{ $data->descripcion }}
        </p>
        <!--First row-->
        <div class="row features wow fadeIn" data-wow-delay="0.2s">
            @foreach ($data->icons as $item)
                <div class="col-lg-4 text-center">
                    <div class="icon-area">
                        <div class="circle-icon">
                        <i class="{{ $item->icon }}"></i>
                        </div>
                        <br>
                        <h5 class="dark-grey-text font-weight-bold mt-2">{{ $item->title }}</h5>
                        <div class="mt-1">
                            <p class="mx-3 grey-text">
                                {{ $item->descripcion }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-4 text-center">
                <div class="icon-area">
                    <div class="circle-icon">
                        <i class="fas fa-cogs blue-text"></i>
                    </div>
                    <br>
                    <h5 class="dark-grey-text font-weight-bold mt-2">Customization</h5>
                    <div class="mt-1">
                        <p class="mx-3 grey-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <div class="icon-area">
                    <div class="circle-icon">
                    <i class="fas fa-book blue-text"></i>
                    </div>
                    <br>
                    <h5 class="dark-grey-text font-weight-bold mt-2">Easy tutorials</h5>
                    <div class="mt-1">
                    <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem
                        ipsum dolor sit
                        amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center mb-4">
                <div class="icon-area">
                    <div class="circle-icon">
                    <i class="fas fa-users blue-text"></i>
                    </div>
                    <br>
                    <h5 class="dark-grey-text font-weight-bold mt-2">Free support</h5>
                    <div class="mt-1">
                    <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem
                        ipsum dolor sit
                        amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>  --}}

        </div>
        <!--/First row-->
    </section>
    <!--/Section: Features v.1-->
</div>
<!--First container--> 