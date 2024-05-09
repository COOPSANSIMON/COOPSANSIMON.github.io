<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/general.css') }}">
    <script src="{{ asset('js/Formulario.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>
  {{-- <div class="menu">
    <img src="{{ asset('img/arbolito.png') }}" alt="Imagen 1" >
  </div>  --}}

<main class="container ">
  <section class="form_wrap">
    <section class="cantact_info">
      <section class="disabled step-wrapper mb-4 "  style="margin-right: 100px;" data-metatip="true">
        <img src="https://coopsansimon.com/assets/media/banner-2022.png"  alt="Imagen 1"  style="width: 380px; height: auto;">
      </section>

      <section class="disabled step-wrapper" data-label-id="0" data-metatip="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
        </svg>
          <article class="description-wrapper">
              <h3 class="bold"> 01 </h3>
                <p> Ingresa tus datos personales </p>
          </article>
      </section>
      

      <section class="disabled step-wrapper" data-label-id="0" data-metatip="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
          <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a2 2 0 0 1-1-.268M1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1"/>
        </svg>
        <article class="description-wrapper">
          <h3 class="bold"> 02 </h3>
          <p> Ingresa los datos de tu actividad económica </p>
        </article>
      </section>

      <section class="disabled step-wrapper" data-label-id="0" data-metatip="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
            <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
            <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z"/>
        </svg>
        <article class="description-wrapper">
          <h3 class="bold"> 03 </h3>
          <p > Ingresa tus datos financieros </p>
        </article>
      </section>

    </section>
    @yield('content')
  </section> 
</main> 



</body>
</html>