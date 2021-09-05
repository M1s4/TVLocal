@extends('layouts.app')

@section('content')

<div class="contentForm mb-5">
    <div class="content-mapa w-100 mt-7" id="map">
 

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.330676900253!2d-105.23386928542703!3d20.61537400713836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842145452891ba7b%3A0x5fbd4f28a1056701!2sEstacionamiento%20Parque%20Hidalgo!5e0!3m2!1ses!2smx!4v1624827031371!5m2!1ses!2smx" height="530" style="border:0;" allowfullscreen="" loading="lazy" class="w-100" getZoom(zoom)></iframe>
    </div>
    <button type="button" class="btn btn-info rounded-circle position-absolute mx-0 ctl-mapa" id="btnBorrar">
    <img src="{{ asset('images/icons/arrow.png')}}" alt="" width="14px" height="16px" clas="">
    </button>
    <div class="content-formulario" id="form">

        <p class="font-weight-bold text-center mt-4 text-white h3 pt-4  ">¿QUIERES ANUNCIARTE?</p>

        <form class="w-75 mx-auto mt-6">
            <div class="form-group pt-2">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre">
            </div>
            <div class="form-group pt-2">
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Correo">
            </div>
            <div class="form-group pt-2">
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Telefono">
            </div>

            <textarea class="form-control is-invalid mt-6" id="validationTextarea" placeholder="Escribe aqui tu mensaje" required></textarea>

            <button type="button" class="btn btn-primary btn-lg btn-block mt-6 btn-enviar rounded-pill">ENVIAR</button>

        </form>

        <div class="w-100 text-center pt-4" role="group" aria-label="Basic example">
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
</div>


@endsection