@extends('layouts.app')

@section('content') 

<div class="content-principal-peliculas pb-4">

    <div class="content mx-auto">
        <div class="title-section d-flex align-items-center p-3">
            <img src="{{ asset('images/icons/movie-icon.png')}}" alt="" width="20px" height="20px" class="mr-3 ">
            <h3 class="text-light m-0 font-weight-bold">PELICULAS DE LA SEMANA</h3>
        </div>

        <div class="redes-sociales p-3 d-flex justify-content-end align-items-center">
            <h5 class="font-weight-bolder text-light mr-4 mb-0">COMPARTE EN TUS REDES :</h5>
            <div class="iconos-redes d-flex ">
                <img src="{{ asset('images/icons/instagram.png')}}" alt="" width="13px" height="15px" class="m-2 m-0 p-0">
                <img src="{{ asset('images/icons/twitter.png')}}" alt="" width="13px" height="15px" class="m-2 m-0 p-0">
                <img src="{{ asset('images/icons/facebook.png')}}" alt="" width="13px" height="15px" class="m-2 m-0 p-0">
            </div>
        </div>

        <div class="content-peliculas w-100">

            <div class="row row-cols-1 row-cols-md-6 w-100 m-0">

                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2 p-1 mb-4 p-0 movie-card">
                    <div class="card border-0">
                        <div class="swiper-slide d-flex flex-column img-movie d-flex flex-column img-movie">
                            <img src="{{ asset('images/peliculas/movieUno.jpg')}}" alt="" width="245" height="250px" class="img-bg w-100">
                            <p class="text-white font-wirkSansSB nombre-movie position-absolute b-25 d-none mt-5">NOMBRE DE PELICULA
                                <a href="#" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/icons/iconPlay.png')}}" alt="" class="text-white iconPlay mt-2 " width="20px" height="20px">
                                </a>
                            </p>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="fw-bolder text-white font-weight-bold">Nombre de la Pelicula</p>
                        </div>
                    </div>
                </div>     

            </div>
        </div>
    </div>

<!--big banner -->
<div class="big-banner mx-auto my-md-5 px-3">
    <img src="{{ asset('images/banner/banner-full.png')}}" alt="" width="100%" height="120px" class="">
</div>
<!-- fin big banner--> 

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg" >
        <div class="modal-content" style="background-color:#151515;">
            <div class="modal-body mx-0 p-0">
                <video src="{{ asset('videos/trailer-video.mp4')}}" controls class="w-100">
                    Este video no lo soporta tu navegador :'c+-
                </video>
                <div class="card-body trailer-data pb-4 pt-4">
                    <h5 class="card-title text-white font-weight-bolder">NOMBRE DE LA PELICULA - Nombre del director</h5>
                    <h6 class="card-subtitle mb-2 text-muted ">00/00/00 108 Minutos</h6>
                    <p class="card-text text-white font-weight-normal">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido
                        el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona
                        que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró
                        hacer un libro de textos especimen.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection