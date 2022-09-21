
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="../src/media/justineLogoImg1.png" />
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" /> -->

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      type="text/css"
      charset="UTF-8"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"/>

    {{-- MDBootstrap --}}
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
    rel="stylesheet"
    />

    <title>Rentcar</title>

       @viteReactRefresh
        @vite(['resources/js/app.jsx'])
    </head>
    <body>
      <div class="container-fluid text-bg-dark">
        {{-- <div class="col-sm">
          <ul class="nav justify-content-end">
            @if (Route::has('login'))
            <li class="nav-item">
                @auth
              <a href="{{ url('/dashboard') }}" class="nav-link" href="#">Dashboard</a>
                @else
            </li>
            <li class="d-block nav-item">
              <a class=" text-dark  nav-link"  href="{{ route('login') }}">Log in </a>
            </li>

                @if (Route::has('register'))
                <a class=" text-dark nav-link"  href="{{ route('register') }}">Register </a>
                @endif
            @endauth
        @endif
          </ul>
        </div> --}}
        <div class="nav justify-content-end" >
          @if (Route::has('login'))
          <li class="nav-item">
              @auth
            <a href="{{ url('/dashboard') }}" class="nav-link " href="#">Dashboard</a>
              @else
              <button type="button" class="btn btn-danger me-3 mt-2 mb-2"><a class=" text-white"  href="{{ route('login') }}">Log in </a></button>
                 @if (Route::has('register'))
          {{-- <button type="button" class="btn btn-primary me-2 mt-2 mb-2" ><a class=" text-white"  href="{{ route('register') }}">Register </a></button> --}}
          <button type="button" class="btn btn-danger me-3 mt-2 mb-2"><a class=" text-white"  href="{{ route('register') }}">Register </a></button>
                @endif
             @endauth
             @endif
      </div>

    </div>
        <div id="navb"></div>
        <div id="forestertab"></div>
        <div id="footr"></div>

        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
        ></script>
    </body>
</html>
