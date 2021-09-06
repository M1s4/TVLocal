<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TVLOCAL</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset(mix('js/app.js')) }}"></script>

    <!--fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">


    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        html,
        body {
            position: relative;
            height: 100%;
            background-color: #000 !important;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }
    </style>
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-gradient-dark fixed-top menu-principal" class="z-index:99;">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo2.png')}}" alt="" width="50" height="50">
            </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto d-flex ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light m-2  icon-home" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light m-2 icon-envivo" href="{{ url('/en-vivo') }}">EN VIVO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light m-2 icon-pelicula" href="{{ url('/peliculas') }}">PELICULAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light m-2 icon-horario" href="{{ url('/horario') }}">HORARIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light m-2 icon-vod" href="#">VOD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light m-2 icon-nosotros" href="{{ url('/nosotros') }}">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light m-2 icon-contacto" href="{{ url('/contacto') }}">CONTACTO</a>
                    </li>

                </ul>
                <div class="btn-group mr-5 icon-share" role="group" aria-label="Basic example">
                    <a href="" class="m-2 ">
                        <img src="{{ asset('images/icons/facebook.png')}}" alt="" width="10">
                    </a>
                    <a href="" class="m-2">
                        <img src="{{ asset('images/icons/instagram.png')}}" alt="" width="13">
                    </a>
                    <a href="" class="m-2">
                        <img src="{{ asset('images/icons/twitter.png')}}" alt="" width="13">
                    </a>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>



    </div>
    <footer class="w-100">

        <div class="row row-cols-2 row-cols-md-5 mx-auto data-footer">
            <div class="order-1 order-md-1 col-12 mb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title text-white font-weight-bold h4">TV LOCAL</h5>
                        <p class="card-text text-white-50">“La televisión es el espejo donde se refleja la derrota de todo nuestro sistema cultural”. Federico Fellini</p>
                    </div>
                </div>
            </div>
            <div class="order-3 order-md-2 col mb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="text-white font-weight-bold h6">TV LOCAL</h5>
                        <ul class="list-group ">
                            <p class="font-weight-normal text-white text-white-50 m-0">
                                <a href="{{ url('/') }}" class=" badge-dark bg-transparent text-white-50">Home</a>
                            </p>
                            <p class="font-weight-normal text-white text-white-50 m-0 mt-2">
                                <a href="{{ url('/en-vivo') }}" class=" badge-dark bg-transparent text-white-50">En vivo</a>
                            </p>
                            <p class="font-weight-normal text-white text-white-50 m-0 mt-2 ">
                                <a href="{{ url('/peliculas') }}" class=" badge-dark bg-transparent text-white-50">Peliculas</a>
                            </p>
                            <p class="font-weight-normal text-white text-white-50 m-0 mt-2 ">
                                <a href="{{ url('/horario') }}" class=" badge-dark bg-transparent text-white-50">Horarios</a>
                            </p>
                            <p class="font-weight-normal text-white text-white-50 m-0 mt-2 ">
                                <a href="#" class=" badge-dark bg-transparent text-white-50">Vod</a>
                            </p>
                            <p class="font-weight-normal text-white text-white-50 m-0 mt-2 ">
                                <a href="#" class=" badge-dark bg-transparent text-white-50">Nosotros</a>
                            </p>
                            <p class="font-weight-normal text-white text-white-50 m-0 mt-2 ">
                                <a href="{{ url('/contacto') }}" class=" badge-dark bg-transparent text-white-50">Contacto</a>
                            </p>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="order-5 order-md-3 col-6 mb-4 mx-0 px-0">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title text-white font-weight-bold h4">Direccion</h5>
                        <p class="card-text text-white-50">Paseo Díaz Ordaz S/N, Centro, 48300 Puerto Vallarta, Jal. </p>
                    </div>
                </div>
            </div>
            <div class="order-2 order-md-4 col mb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h6 class="card-title text-white font-weight-bold h6">Siguenos</h6>

                        <ul class="list-group ">
                            <p class="font-weight-normal text-white text-white-50 m-0">
                                <a href="#" class=" badge-dark bg-transparent text-white-50 ">Facebook</a>
                            </p>
                            <p class="font-weight-normal text-white text-white-50 m-0 mt-2">
                                <a href="#" class=" badge-dark bg-transparent text-white-50">Instagram</a>
                            </p>
                            <p class="font-weight-normal text-white text-white-50 m-0 mt-2 ">
                                <a href="#" class=" badge-dark bg-transparent text-white-50">Youtube</a>
                            </p>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="order-4 col order-md-5 mb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h6 class="card-title text-white font-weight-bold h6">Legal</h6>
                        <ul class="list-group ">
                            <p class="font-weight-normal text-white text-white-50 m-0">
                                <a href="#" class=" badge-dark bg-transparent text-white-50 ">Terminos</a>
                            </p>
                            <p class="font-weight-normal text-white text-white-50 m-0 mt-2">
                                <a href="#" class=" badge-dark bg-transparent text-white-50">Condiciones</a>
                            </p>
                        </ul>
                    </div>
                </div>
                <div class="Arrow-footer  d-flex flex-column align-items-center">
                    <img src="{{ asset('images/icons/right-arrow-black.png')}}" alt="" width="10px" height="40px" class="text-white-50">

                    <p class="text-left pr-5 font-weight-bolder" style="  transform: rotate(-90deg);color:black;"> <a href="#" class="Non-underlined link " style="color:black;text-decoration:none;">INICIO</a> </p>

                </div>
            </div>

        </div>
        <p class="text-left text-white-50 text-derechos">© 2021 Todos los derechos recervados</p>

    </footer>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".peliculas-slider", {
            slidesPerView: 6,
            spaceBetween: 10,
            breakpoints: {
                '375': {
                    slidesPerView: 1,
                    spaceBetween: 1,
                    slidesPerGroup: 1

                },  
                '990': {
                    slidesPerView: 6,
                    spaceBetween: 10,
                },
            },
            slidesPerGroup: 5,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 7,
            breakpoints: {
                '375': {
                    slidesPerView: 1,
                    spaceBetween: 3,
                    lidesPerGroup: 1,
                },
                '990': {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
            },
            slidesPerGroup: 5,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>


</body>

</html>