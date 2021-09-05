@extends('layouts.app')

@section('content')

<div class="content-horario w-100 mb-5">

    <div class="tab mt-7 text-center bg-transparent border-0 regionsSelect">
        <button class="tablinks text-white mx-4" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
        <button class="tablinks text-white mx-4" onclick="openCity(event, 'Paris')">Paris</button>
        <button class="tablinks text-white mx-4" onclick="openCity(event, 'Tokyo')">Tokyo</button>
    </div>
    <div class="d-flex align-items-center bd-highlight  text-white px-4 mt-4 SocialBG">
        <div class="p-2 bd-highlight h5 p-0 m-0 TitleShare">Comparte en tus redes :</div>
        <div class="p-2 bd-highlight SocialImage">
            <div class="btn-group mr-5 " role="group" aria-label="Basic example">
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
        <div class="ml-auto p-2 bd-highlight RegionSelect">
            <div class="dropdown mr-5">
                <button type="button" class="btn btn-secondary dropdown-toggle bg-transparent border-0" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                    Lunes, 25 de Enero
                </button>
                <div class="dropdown-menu mr-5 bg-dark text-white" aria-labelledby="dropdownMenuOffset">
                    <a class="dropdown-item py-2 text-white" href="#">Martes, 26 de Enero</a>
                    <a class="dropdown-item py-2 text-white" href="#">Miercoles, 27 de Enero</a>
                    <a class="dropdown-item py-2 text-white" href="#">Jueves, 28 de Enero</a>
                    <a class="dropdown-item py-2 text-white" href="#">Viernes, 29 de Enero</a>
                    <a class="dropdown-item py-2 text-white" href="#">Sabado, 30 de Enero</a>
                    <a class="dropdown-item py-2 text-white" href="#">Domingo, 31 de Enero</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content-tabs w-100">

        <div id="London" class="tabcontent border-0 mt-1 ">

            <div class="card-group">
                <div class="card mb-3 mx-auto mt-md-3" style="max-width: 640px;">
                    <div class="row no-gutters">
                        <div class="col-md-2">
                            <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                        </div>
                        <div class="col-6 col-md-5">
                            <img src="{{ asset('images/shows/show-uno.jpg')}}" alt="..." width="auto" height="180px" class="w-100">
                        </div>
                        <div class="col-6 col-md-5 p-2 p-md-2">
                            <div class="card-body pb-0 p-0 p-md-0">
                                <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                                <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                                <button type="button" class="btn btn-outline-secondary">Ver show</button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr size="2px" color="#707070" width="80%" />

                <div class="card mb-3 mx-auto mt-md-3" style="max-width: 640px;">
                    <div class="row no-gutters">
                        <div class="col-md-2">
                            <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                        </div>
                        <div class="col-6 col-md-5">
                            <img src="{{ asset('images/shows/show-uno.jpg')}}" alt="..." width="auto" height="180px" class="w-100">
                        </div>
                        <div class="col-6 col-md-5 p-2 p-md-2">
                            <div class="card-body pb-0 p-0 p-md-0">
                                <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                                <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                                <button type="button" class="btn btn-outline-secondary">Ver show</button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr size="2px" color="#707070" width="80%" />

                <div class="card mb-3 mx-auto mt-md-3" style="max-width: 640px;">
                    <div class="row no-gutters">
                        <div class="col-md-2">
                            <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                        </div>
                        <div class="col-6 col-md-5">
                            <img src="{{ asset('images/shows/show-uno.jpg')}}" alt="..." width="auto" height="180px" class="w-100">
                        </div>
                        <div class="col-6 col-md-5 p-2 p-md-2">
                            <div class="card-body pb-0 p-0 p-md-0">
                                <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                                <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                                <button type="button" class="btn btn-outline-secondary">Ver show</button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr size="2px" color="#707070" width="80%" />

                <div class="card mb-3 mx-auto mt-md-3" style="max-width: 640px;">
                    <div class="row no-gutters">
                        <div class="col-md-2">
                            <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                        </div>
                        <div class="col-6 col-md-5">
                            <img src="{{ asset('images/shows/show-uno.jpg')}}" alt="..." width="auto" height="180px" class="w-100">
                        </div>
                        <div class="col-6 col-md-5 p-2 p-md-2">
                            <div class="card-body pb-0 p-0 p-md-0">
                                <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                                <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                                <button type="button" class="btn btn-outline-secondary">Ver show</button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr size="2px" color="#707070" width="80%" />

                <div class="card mb-3 mx-auto mt-md-3" style="max-width: 640px;">
                    <div class="row no-gutters">
                        <div class="col-md-2">
                            <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                        </div>
                        <div class="col-6 col-md-5">
                            <img src="{{ asset('images/shows/show-uno.jpg')}}" alt="..." width="auto" height="180px" class="w-100">
                        </div>
                        <div class="col-6 col-md-5 p-2 p-md-2">
                            <div class="card-body pb-0 p-0 p-md-0">
                                <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                                <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                                <button type="button" class="btn btn-outline-secondary">Ver show</button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr size="2px" color="#707070" width="80%" />

            </div>

        </div>

        <div id="Paris" class="tabcontent border-0 mt-1 ">
            <div class="card mb-3 mx-auto mt-3" style="max-width: 640px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                    </div>
                    <div class="col-6 col-md-5">
                        <img src="{{ asset('images/shows/show-tres.jpg')}}" alt="..." width="auto" height="180px" class="w-100">

                    </div>
                    <div class="col-6 col-md-5 p-2 p-md-2">
                        <div class="card-body pb-0 p-0 p-md-0">
                            <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                            <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                            <button type="button" class="btn btn-outline-secondary">Ver show</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr size="2px" color="#707070" width="80%" />

            <div class="card mb-3 mx-auto mt-3" style="max-width: 640px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                    </div>
                    <div class="col-6 col-md-5">
                        <img src="{{ asset('images/shows/show-tres.jpg')}}" alt="..." width="auto" height="180px" class="w-100">

                    </div>
                    <div class="col-6 col-md-5 p-2 p-md-2">
                        <div class="card-body pb-0 p-0 p-md-0">
                            <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                            <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                            <button type="button" class="btn btn-outline-secondary">Ver show</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr size="2px" color="#707070" width="80%" />

            <div class="card mb-3 mx-auto mt-3" style="max-width: 640px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                    </div>
                    <div class="col-6 col-md-5">
                        <img src="{{ asset('images/shows/show-tres.jpg')}}" alt="..." width="auto" height="180px" class="w-100">

                    </div>
                    <div class="col-6 col-md-5 p-2 p-md-2">
                        <div class="card-body pb-0 p-0 p-md-0">
                            <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                            <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                            <button type="button" class="btn btn-outline-secondary">Ver show</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr size="2px" color="#707070" width="80%" />

            <div class="card mb-3 mx-auto mt-3" style="max-width: 640px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                    </div>
                    <div class="col-6 col-md-5">
                        <img src="{{ asset('images/shows/show-tres.jpg')}}" alt="..." width="auto" height="180px" class="w-100">

                    </div>
                    <div class="col-6 col-md-5 p-2 p-md-2">
                        <div class="card-body pb-0 p-0 p-md-0">
                            <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                            <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                            <button type="button" class="btn btn-outline-secondary">Ver show</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr size="2px" color="#707070" width="80%" />

            <div class="card mb-3 mx-auto mt-3" style="max-width: 640px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                    </div>
                    <div class="col-6 col-md-5">
                        <img src="{{ asset('images/shows/show-tres.jpg')}}" alt="..." width="auto" height="180px" class="w-100">

                    </div>
                    <div class="col-6 col-md-5 p-2 p-md-2">
                        <div class="card-body pb-0 p-0 p-md-0">
                            <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                            <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                            <button type="button" class="btn btn-outline-secondary">Ver show</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr size="2px" color="#707070" width="80%" />

        </div>

        <div id="Tokyo" class="tabcontent border-0 mt-1 ">
            <div class="card mb-3 mx-auto mt-3" style="max-width: 640px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                    </div>
                    <div class="col-6 col-md-5">
                        <img src="{{ asset('images/shows/show-dos.jpg')}}" alt="..." width="auto" height="180px" class="w-100">


                    </div>
                    <div class="col-6 col-md-5 p-2 p-md-2">
                        <div class="card-body pb-0 p-0 p-md-0">
                            <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                            <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                            <button type="button" class="btn btn-outline-secondary">Ver show</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr size="2px" color="#707070" width="80%" />

            <div class="card mb-3 mx-auto mt-3" style="max-width: 640px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                    </div>
                    <div class="col-6 col-md-5">
                        <img src="{{ asset('images/shows/show-dos.jpg')}}" alt="..." width="auto" height="180px" class="w-100">


                    </div>
                    <div class="col-6 col-md-5 p-2 p-md-2">
                        <div class="card-body pb-0 p-0 p-md-0">
                            <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                            <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                            <button type="button" class="btn btn-outline-secondary">Ver show</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr size="2px" color="#707070" width="80%" />

            <div class="card mb-3 mx-auto mt-3" style="max-width: 640px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                    </div>
                    <div class="col-6 col-md-5">
                        <img src="{{ asset('images/shows/show-dos.jpg')}}" alt="..." width="auto" height="180px" class="w-100">


                    </div>
                    <div class="col-6 col-md-5 p-2 p-md-2">
                        <div class="card-body pb-0 p-0 p-md-0">
                            <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                            <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                            <button type="button" class="btn btn-outline-secondary">Ver show</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr size="2px" color="#707070" width="80%" />

            <div class="card mb-3 mx-auto mt-3" style="max-width: 640px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                    </div>
                    <div class="col-6 col-md-5">
                        <img src="{{ asset('images/shows/show-dos.jpg')}}" alt="..." width="auto" height="180px" class="w-100">


                    </div>
                    <div class="col-6 col-md-5 p-2 p-md-2">
                        <div class="card-body pb-0 p-0 p-md-0">
                            <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                            <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                            <button type="button" class="btn btn-outline-secondary">Ver show</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr size="2px" color="#707070" width="80%" />

            <div class="card mb-3 mx-auto mt-3" style="max-width: 640px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <p class="font-weight-bold h2 mt-4 text-white text-center">16:20</p>
                    </div>
                    <div class="col-6 col-md-5">
                        <img src="{{ asset('images/shows/show-dos.jpg')}}" alt="..." width="auto" height="180px" class="w-100">


                    </div>
                    <div class="col-6 col-md-5 p-2 p-md-2">
                        <div class="card-body pb-0 p-0 p-md-0">
                            <h5 class="card-title text-white font-weight-bold">NOMBRE DEL SHOW</h5>
                            <p class="card-text text-white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                            <button type="button" class="btn btn-outline-secondary">Ver show</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr size="2px" color="#707070" width="80%" />

        </div>
        
    </div>

</div>

@endsection