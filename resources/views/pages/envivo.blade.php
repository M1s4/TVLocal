@extends('layouts.app')

@section('content')

<div class="content-VideoOnline w-100">
    <video src="{{ asset('videos/background.mp4')}}" width="100%" height="100%" controls>
        Este video no lo soporta tu navegador :'c
    </video>
</div>

<!-- Swiper horarios-->
<div class="section-horarios p-4 ">

    <div class="d-flex flex-md-row flex-column bd-highlight pl-md-5">
        <div class="p-2 bd-highlight">
            <p class="text-start fs-4 font-weight-bold h4 text-light  ">PROGRAMACION</p>
        </div>
        <div class="p-2 bd-highlight">
            <ul class="nav nav-pills mb-3 pl-md-5" id="pills-tab" role="tablist">
                <li class="nav-item line-right " role="  presentation ">
                    <a href="#" class="stretched-link m-3 text-light ">Puerto Vallarta</a>
                </li>
                <li class="nav-item line-right" role="presentation ">
                    <a href="#" class="stretched-link m-3 text-light ">Nayarit</a>

                </li>
                <li class="nav-item" role="presentation ">
                    <a href="#" class="stretched-link m-3 text-light">Mazatlan</a>

                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <!-- Swiper JS -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination m-0 t-0"></div>
            </div>
            <!-- Swiper JS -->
        </div>
        <div class="tab-pane" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <!-- Swiper JS -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination m-0 t-0"></div>
            </div>
            <!-- Swiper JS -->
        </div>
        <div class="tab-pane" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <!-- Swiper JS -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="..." height="160" width="280">
                            <div class="card-body">
                                <h5 class="card-title m-0 font-wirkSansSB text-white">NOMBRE PELICULA</h5>
                                <p class="card-text"><small class="text-white-50">12:00 PM</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination m-0 t-0"></div>
            </div>
            <!-- Swiper JS -->
        </div>
    </div>
</div>
<!-- fin Swiper -->

<!--big banner -->
<div class="big-banner mx-auto my-md-5 px-3">
    <img src="{{ asset('images/banner/banner-full.png')}}" alt="" width="100%" height="120px" class="">
</div>
<!-- fin big banner-->

<!-- inicio slider peliculas-->
<div class="swiper peliculas-slider  mt-5 mb-5">
    <div class="row d-flex align-items-center mx-4 mx-md-0">
        <div class="col-sm-4 text-left">
            <h4 class="font-weight-bolder text-white">PELICULAS DE LA SEMANA</h4>
        </div>
        <div class="col-sm  m-0 p-0">
            <hr class="my-4 text-white w-100 border">
        </div>
        <div class="col-sm-2 text-center">
            <button type="button" class="btn btn-outline-light btn-lg btn-vermas ">Ver Mas</button>
        </div>
    </div>
    <div class="swiper-wrapper mt-4">
        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="320px" class="img-bg mx-auto">
            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none">NOMBRE DE PELICULA
                <a href="#" class="m-0 p-0">
                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2" width="20px" height="20px">
                </a>
            </p>
        </div>
        <div class="swiper-slide d-flex flex-column img-movie">
            <img src="{{ asset('images/peliculas/movieDos.jpg')}}" alt="" width="245" height="320px" class="img-bg">
            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none">NOMBRE DE PELICULA
                <a href="#" class="m-0 p-0">
                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2" width="20px" height="20px">
                </a>
            </p>
        </div>
        <div class="swiper-slide d-flex flex-column img-movie">
            <img src="{{ asset('images/peliculas/movieTres.jpg')}}" alt="" width="245" height="320px" class="img-bg">
            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none">NOMBRE DE PELICULA
                <a href="#" class="m-0 p-0">
                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2" width="20px" height="20px">
                </a>
            </p>
        </div>
        <div class="swiper-slide d-flex flex-column img-movie">
            <img src="{{ asset('images/peliculas/movieCuatro.jpg')}}" alt="" width="245" height="320px" class="img-bg">
            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none">NOMBRE DE PELICULA
                <a href="#" class="m-0 p-0">
                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2" width="20px" height="20px">
                </a>
            </p>
        </div>
        <div class="swiper-slide d-flex flex-column img-movie">
            <img src="{{ asset('images/peliculas/movieCinco.jpg')}}" alt="" width="245" height="320px" class="img-bg">
            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none">NOMBRE DE PELICULA
                <a href="#" class="m-0 p-0">
                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2" width="20px" height="20px">
                </a>
            </p>
        </div>
        <div class="swiper-slide d-flex flex-column img-movie">
            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="320px" class="img-bg">
            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none">NOMBRE DE PELICULA
                <a href="#" class="m-0 p-0">
                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2" width="20px" height="20px">
                </a>
            </p>
        </div>
        <div class="swiper-slide d-flex flex-column img-movie">
            <img src="{{ asset('images/peliculas/movieDos.jpg')}}" alt="" width="245" height="320px" class="img-bg">
            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none">NOMBRE DE PELICULA
                <a href="#" class="m-0 p-0">
                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2" width="20px" height="20px">
                </a>
            </p>
        </div>
        <div class="swiper-slide d-flex flex-column img-movie">
            <img src="{{ asset('images/peliculas/movieTres.jpg')}}" alt="" width="245" height="320px" class="img-bg">
            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none">NOMBRE DE PELICULA
                <a href="#" class="m-0 p-0">
                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2" width="20px" height="20px">
                </a>
            </p>
        </div>
        <div class="swiper-slide d-flex flex-column img-movie">
            <img src="{{ asset('images/peliculas/movieCuatro.jpg')}}" alt="" width="245" height="320px" class="img-bg">
            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none">NOMBRE DE PELICULA
                <a href="#" class="m-0 p-0">
                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2" width="20px" height="20px">
                </a>
            </p>
        </div>
        <div class="swiper-slide d-flex flex-column img-movie">
            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="320px" class="img-bg">
            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none">NOMBRE DE PELICULA
                <a href="#" class="m-0 p-0">
                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2" width="20px" height="20px">
                </a>
            </p>
        </div>


    </div>
    <div class="swiper-button-next icon-next">
        <!-- fin slider

            <img src="{{ asset('images/icons/prev-icon.png')}}" alt="">
            -->
    </div>
    <div class="swiper-button-prev icon-prev">
        <!-- fin slider
            <img src="{{ asset('images/icons/next-icon.png')}}" alt="">
            -->
    </div>
</div>
<!-- fin slider-->

<!--big banner -->
<div class="big-banner mx-auto my-md-5 px-3">
    <img src="{{ asset('images/banner/banner-full.png')}}" alt="" width="100%" height="120px" class="">
</div>
<!-- fin big banner-->
@endsection