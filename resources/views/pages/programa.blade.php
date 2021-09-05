@extends('layouts.app')

@section('content')

<div class=" video-styles m-0 p-0 mb-5">
    <video src="{{ asset('videos/background.mp4')}}" width="auto" height="auto" controls>
        Este video no lo soporta tu navegador :'c
    </video>

    <div class="data-programa position-absolute mx-3 mb-4">
        <p class="font-weight-bold display-4 text-white">Nombre de la pagina</p>
        <div class="d-flex flex-row justify-content-between bd-highlight mb-3 ">

            <div class="p-2 bd-highlight d-flex">
                <div class=" d-flex align-items-center data-day">
                    <img src="{{ asset('images/icons/calendar.png')}}" alt="" class="">
                    <p class="text-left text-white ml-3" class="mb-0 mt-0 ">Lunes.</p>
                </div>

                <div class="ml-5 d-flex align-items-center data-day">
                    <img src="{{ asset('images/icons/watch.png')}}" alt="" class="">
                    <p class="text-left text-white ml-3" class="mb-0 ">22:00 horas.</p>
                </div>
            </div>

            <div class="p-2 bd-highlight d-flex ">
                <p class="text-left h5 text-white mx-2">Comparte en tus redes :</p>
                <div class="icons-program">
                    <img src="{{ asset('images/icons/instagram.png')}}" alt="" class="mx-2">
                    <img src="{{ asset('images/icons/twitter.png')}}" alt="" class="mx-2">
                    <img src="{{ asset('images/icons/facebook.png')}}" alt="" class="mx-2">
                </div>
            </div>
        </div>

        <hr color="white" size="1">

        <div class="sinopsis-programa">
            <p class="text-light m-0 p-0">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>

    </div>
    <!--fin section principal -->

    <div class="big-banner mx-auto mt-5 mb-5">
        <img src="{{ asset('images/banner/banner-full.png')}}" alt="" width="950px" height="120px" class="">
    </div>

    <div class="content-capitulos w-100 mx-auto pt-4 ">
        
       <div class="control-semanal mb-4">
            <div class="d-flex">
                <div class="dropdown mr-1">
                    <button type="button" class="btn dropdown-toggle text-light" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                        LOREM IPSUM
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-5">
            
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body px-0">
                        <h6 class="card-subtitle mb-2 text-muted">fecha episodio</h6>
                        <h5 class="card-title text-white">TITULO DEL CAPITULO</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card h-100">
                    <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body px-0">
                        <h6 class="card-subtitle mb-2 text-muted">fecha episodio</h6>
                        <h5 class="card-title text-white">TITULO DEL CAPITULO</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card h-100">
                    <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body px-0">
                        <h6 class="card-subtitle mb-2 text-muted">fecha episodio</h6>
                        <h5 class="card-title text-white">TITULO DEL CAPITULO</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card h-100">
                    <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body px-0">
                        <h6 class="card-subtitle mb-2 text-muted">fecha episodio</h6>
                        <h5 class="card-title text-white">TITULO DEL CAPITULO</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card h-100">
                    <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body px-0">
                        <h6 class="card-subtitle mb-2 text-muted">fecha episodio</h6>
                        <h5 class="card-title text-white">TITULO DEL CAPITULO</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card h-100">
                    <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body px-0">
                        <h6 class="card-subtitle mb-2 text-muted">fecha episodio</h6>
                        <h5 class="card-title text-white">TITULO DEL CAPITULO</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card h-100">
                    <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body px-0">
                        <h6 class="card-subtitle mb-2 text-muted">fecha episodio</h6>
                        <h5 class="card-title text-white">TITULO DEL CAPITULO</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card h-100">
                    <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body px-0">
                        <h6 class="card-subtitle mb-2 text-muted">fecha episodio</h6>
                        <h5 class="card-title text-white">TITULO DEL CAPITULO</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card h-100">
                    <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body px-0">
                        <h6 class="card-subtitle mb-2 text-muted">fecha episodio</h6>
                        <h5 class="card-title text-white">TITULO DEL CAPITULO</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card h-100">
                    <img src="{{ asset('images/shows/img-card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body px-0">
                        <h6 class="card-subtitle mb-2 text-muted">fecha episodio</h6>
                        <h5 class="card-title text-white">TITULO DEL CAPITULO</h5>
                    </div>
                </div>
            </div>            
        </div>

        <div class=" w-100 text-center mb-4">
          <button type="button" class="btn btn-outline-secondary font-weight-bold">MOSTRAR MAS</button>
        </div>
    </div>

      <!-- inicio slider peliculas-->
        <div class="swiper-container peliculas-slider  ">
            <div class="row d-flex align-items-center">
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


    @endsection