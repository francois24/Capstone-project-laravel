<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="../src/media/justineLogoImg1.png" />

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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
    <div style="justify-content: end; display: flex; padding: 5px;" class="text-bg-dark">
        @if (Route::has('login'))
          @auth
            <a href="{{ url('/redirects') }}" class="nav-link " href="#">{{ Auth::user()->name }}</a>
            @else
            <button type="button" class="btn me-3" style="background:#bf0404"><a class=" text-white"  href="{{ route('login') }}">Log in </a></button>
            @if (Route::has('register'))
            <button type="button" class="btn me-3"  style="background:#bf0404"><a class=" text-white"  href="{{ route('register') }}">Register </a></button>
            @endif
          @endauth
        @endif
      </div>
    <div style="position: sticky; top: 0; z-index: 3;" id="navb"></div>
    <div class='listcarbg'>
        <div class='listoverlay'>
            <h1>Rent Now</h1>
        </div>
    </div>
    
    <div class="container-fluid mt-5 ">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
            <div style="position: relative;" class="col-sm-10 m-auto">
                <div class="contactflex">
                    <div class="col-md-6 mb-5 contactform1">
                        <form action="" method="post" action="{{ route('contact.store') }}"class="contactform1">
                            @csrf

                            <div class="form-group">
                                <label>Date Pickup</label>
                                <input type="date" class="form-control {{ $errors->has('date_pickup') ? 'error' : '' }}" name="date_pickup" id="name">
                                <!-- Error -->
                                @if ($errors->has('date_pickup'))
                                <div class="error">
                                    {{ $errors->first('date_pickup') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Drop Off Date</label>
                                <input type="date" class="form-control {{ $errors->has('drop_off_date') ? 'error' : '' }}" name="drop_off_date" id="name">
                                <!-- Error -->
                                @if ($errors->has('drop_off_date'))
                                <div class="error">
                                    {{ $errors->first('drop_off_date') }}
                                </div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control {{ $errors->has('first_name') ? 'error' : '' }}" name="first_name" id="name">
                                <!-- Error -->
                                @if ($errors->has('first_name'))
                                <div class="error">
                                    {{ $errors->first('first_name') }}
                                </div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control {{ $errors->has('last_name') ? 'error' : '' }}" name="last_name" id="name">
                                <!-- Error -->
                                @if ($errors->has('last_name'))
                                <div class="error">
                                    {{ $errors->first('last_name') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="name">
                                <!-- Error -->
                                @if ($errors->has('phone'))
                                <div class="error">
                                    {{ $errors->first('phone') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
                                @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control {{ $errors->has('address') ? 'error' : '' }}" name="address" id="name">
                                <!-- Error -->
                                @if ($errors->has('address'))
                                <div class="error">
                                    {{ $errors->first('address') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>License number</label>
                                <input type="text" class="form-control {{ $errors->has('license_no') ? 'error' : '' }}" name="license_no" id="phone">
                                @if ($errors->has('license_no'))
                                <div class="error">
                                    {{ $errors->first('license_no') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Car Brand</label>
                                <select name="car_brand" id="name">
                                    <option value="Forester Subaru">Forester Subaru</option>
                                    <option value="Mirage Range">Mirage Range</option>
                                    <option value="Mitsubishi Lancer">Mitsubishi Lancer</option>
                                    <option value="Pajero Range">Pajero Range</option>
                                    <option value="Subaru Liberty">Subaru Liberty</option>
                                    <option value="Subaru Liberty">Subaru Liberty</option>
                                    
                                </select>
                                {{-- <input type="text" class="form-control {{ $errors->has('license_no') ? 'error' : '' }}" name="license_no" id="phone"> --}}
                                @if ($errors->has('car_brand'))
                                <div class="error">
                                    {{ $errors->first('car_brand') }}
                                </div>
                                @endif
                            </div>

                            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                        </form>
                    </div>
                    <div class="col-md-6 mb-5 contactimg1">
                        <img style="width: 100%; height: 100%;" src="{{ asset('images/Contact.png') }}" alt='' />
                    </div>
                </div>
            </div>
    </div>
    <div id="footr"></div>
</body>
</html>









