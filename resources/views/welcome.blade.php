@extends('layouts.app')

@section('content')
<!-- 
    <nav class="navbar navbar-dark bg-dark d-flex justify-content-between" style="z-index:1;">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('images/logo2.png')}}" alt="" width="50" height="50">
        </a>
        <ul class="nav">
           
            <li class="nav-item">
                <a class="nav-link text-light" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">EN VIVO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">PELICULAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">HORARIOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">VOD</a>
            </li>          
            <li class="nav-item">
                <a class="nav-link text-light" href="#">NOSOTROS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">CONTACTO</a>
            </li>
        </ul>
        <div class="btn-group mr-5" role="group" aria-label="Basic example">
             <a href="" class="m-2 " >
             <img src="{{ asset('images/icons/facebook.png')}}" alt="" width="10" >
             </a>
             <a href="" class="m-2">
             <img src="{{ asset('images/icons/instagram.png')}}" alt="" width="13">
             </a>
             <a href="" class="m-2">
             <img src="{{ asset('images/icons/twitter.png')}}" alt="" width="13">
             </a>
        </div>
    </nav>    
carousel-->

<div id="carouselExampleCaptions" class="carousel slide carousel-fade CarrouselFull" data-ride="carousel" data-interval="false">
  <ol class="carousel-indicators text-right">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active rounded-circle"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1" class="rounded-circle"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2" class="rounded-circle"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item img-h-100  row">
      <img src="{{ asset('images/shows/show-uno.jpg')}}" class="d-block vw-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-left pt-40">
        <div class="row d-flex flex-row ">
          <div class="col-9">
            <h5 class="display-4 font-workSansBlack">
              LOREM IPSUM DOLOR
            </h5>
            <p class="h4 w-75 font-robotoL">Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur..
            </p>
            <button type="button" class="btn btn-slides btn-lg rounded-0 text-white  font-wirkSansSB ">VER CAPITULOS</button>

          </div>
          <div class="btn-group mr-5 col-2 d-flex flex-column text-right  " role="group" aria-label="Basic example">
            <a href="" class="m-3  ">
              <img src="{{ asset('images/icons/face.png')}}" alt="">
            </a>
            <a href="" class="m-3  ">
              <img src="{{ asset('images/icons/insta.png')}}" alt="">
            </a>
            <a href="" class="m-3  ">
              <img src="{{ asset('images/icons/twiter.png')}}" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item img-h-100 row">
      <img src="{{ asset('images/shows/show-dos.jpg')}}" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block text-left pt-40">
        <div class="row d-flex flex-row ">
          <div class="col-9">
            <h5 class="display-4 font-workSansBlack">
              LOREM IPSUM DOLOR
            </h5>
            <p class="h4 w-75 font-robotoL">Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur..
            </p>
            <button type="button" class="btn btn-slides btn-lg rounded-0 text-white  font-wirkSansSB ">VER CAPITULOS</button>

          </div>
          <div class="btn-group mr-5 col-2 d-flex flex-column text-right " role="group" aria-label="Basic example">
            <a href="" class="m-3  ">
              <img src="{{ asset('images/icons/face.png')}}" alt="">
            </a>
            <a href="" class="m-3  ">
              <img src="{{ asset('images/icons/insta.png')}}" alt="">
            </a>
            <a href="" class="m-3  ">
              <img src="{{ asset('images/icons/twiter.png')}}" alt="">
            </a>
          </div>
        </div>

      </div>
    </div>
    <div class="carousel-item img-h-100 active row ml-0 ml-md-0">
      <img src="{{ asset('images/shows/show-tres.jpg')}}" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block text-left pt-40">
        <div class="row d-flex flex-row ">
          <div class="col-9">
            <h5 class="display-4 font-workSansBlack">
              LOREM IPSUM DOLOR
            </h5>
            <p class="h4 w-75 font-robotoL">Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur..
            </p>
            <button type="button" class="btn btn-slides btn-lg rounded-0 text-white  font-wirkSansSB ">VER CAPITULOS</button>

          </div>
          <div class="btn-group mr-5 col-2 d-flex flex-column text-right " role="group" aria-label="Basic example">
            <a href="" class="m-3  ">
              <img src="{{ asset('images/icons/face.png')}}" alt="">
            </a>
            <a href="" class="m-3  ">
              <img src="{{ asset('images/icons/insta.png')}}" alt="">
            </a>
            <a href="" class="m-3  ">
              <img src="{{ asset('images/icons/twiter.png')}}" alt="">
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!-- carousel-->

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
            <div class="swiper mySwiper-dos">
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
            <div class="swiper mySwiper-tres">
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
<div class="big-banner mx-auto mt-md-5 px-3">
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