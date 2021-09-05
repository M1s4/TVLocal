@extends('layouts.app')

@section('content')
<div class="row sobreNosotros">
  <div class="col-12 order-2 order-sm-1 col-sm-6 dataNosotros ">
    <div class="d-flex align-items-end flex-column bd-highlight mb-3">
      <div class="p-2 bd-highlight display-4 font-weight-bolder d-flex flex-column textTitulo">
        <p class="text-right text-white">SOBRE</p>
        <p class="text-right text-white">NOSOTROS</p>
      </div>
      <div class="p-2 bd-highlight iconContentNosotros">
        <img src="{{ asset('images/icons/arrow-share.png')}}" alt="" width="20px" height="20px" clas="">

      </div>
      <div class="p-2 bd-highlight dataHistory w-75 text-right mt-5 bg-transparent contentTextNosotros">
        <p class=" text-white h5 ">
          Lorem Ipsum is simply dummy text of the printing and
          typesetting industry. Lorem Ipsum has been the industry's
          standard dummy text ever since the 1500s, when an unknown
          printer took a galley of type and scrambled it to make a
          type specimen book
        </p>

      </div>
      <div class="text-center my-sm-5 my-1 w-100 pt-sm-5 pt-4">
        <img src="{{ asset('images/icons/arrow@2x.png')}}" alt="" width="35px" height="35px" clas="" style="transform: rotate(180deg);">
      </div>
    </div>
  </div>
  <div class="col-12 order-1 order-sm-2 col-sm-6 imgNosotros">
    <img src="{{ asset('images/icons/arrow-share.png')}}" alt="" width="auto" height="auto" class="imagenNosotros">
  </div>
</div>

<div class="contentHistory d-flex flex-row justify-content-center bd-highlight mb-5 mt-5 mb-5" style="background-color:#FFFFFF;">
  <div class="historyImg bd-highlight w-25" style="background-color:crimson;">
    <img src="{{ asset('images/imgHistory.png')}}" alt="">
  </div>

  <div class=" p-2 bd-highlight w-50 content-data-Hisory">
    <div class="titulo-section bg-dark w-25 m-2 py-3 pr-3 ">
      <p class="text-right text-white m-0 h5 font-weight-bold">HISTORIA</p>

    </div>
    <p class="text-justify w-75 m-3 mt-5 h5 textDataHistory">
      Some placeholder text to demonstrate justified text alignment.
      Will you do the same for me? It's time to face the music I'm no
      longer your muse. Heard it's beautiful, be the judge and my girls
      gonna take a vote.
      <br><br>
      Contrary to popular belief, Lorem Ipsum is not simply random text.
      It has roots in a piece of classical Latin literature from 45 BC,
      making it over 2000 years old.
    </p>
    <a href="#" class="imgRowDown">
      <img src="{{asset('images/icons/row-down.jpg')}}" alt="" width="20px" height="20px">
    </a>
  </div>
</div>

<div class="contentMision d-flex flex-nowrap justify-content-end bd-highlight mb-5 ml-7 mt-7" style="background-color:#F0F2F2;">
  <div class="dataMision order-2 bd-highlight" style="background-color:crimson;">
    <img src="{{ asset('images/sectionHistory.png')}}" alt="" width="100%" height="120%">
  </div>
  <div class="imgMision order-1 p-2 bd-highlight ">
    <div class="d-flex justify-content-end ">
      <p class="title-section text-left bg-dark w-25 text-white h3 p-3 mt-4">Mision</p>
    </div>
    <div class=" d-flex justify-content-end content-data-Mision">
      <P class="text-right w-75 h4 pt-4 pr-2 text-lowercase">
        <small>
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y
          archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar
          de las industrias desde el año 1500, cuando un impresor (N. del T.
          persona que se dedica a la imprenta) desconocido usó una galería de
          textos y los mezcló de tal manera que logró hacer un libro de textos especimen
        </small>

      </P>
    </div>
  </div>
</div>

<div class="contentVision d-flex flex-row-reverse flex-nowrap justify-content-end bd-highlight mb-7 mr-5 mt-7" style="background-color:#F0F2F2;">
  <div class="dataMision order-2 bd-highlight" style="background-color:crimson;">
    <img src="{{ asset('images/sectionVision.png')}}" alt="" width="100%" height="120%">
  </div>

  <div class="imgVision order-1 p-2 bd-highlight ">
    <div class="d-flex justify-content-star ">
      <p class="title-sectionVision text-right bg-dark w-25 text-white h3 p-3 mt-4">Vision</p>
    </div>
    <div class=" d-flex justify-content-star dataVision">
      <P class="text-left w-75 h4 pt-4 pl-2 text-lowercase">
        <small>
          Lorem Ipsum es simplemente el texto de relleno de las imprentas y
          archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar
          de las industrias desde el año 1500, cuando un impresor (N. del T.
          persona que se dedica a la imprenta) desconocido usó una galería de
          textos y los mezcló de tal manera que logró hacer un libro de textos especimen
        </small>
      </P>
    </div>
  </div>
</div>
@endsection