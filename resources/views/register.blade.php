<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../../css/Logreg/style.css">
   
   <!-- Bootstrap -->
   <link rel="stylesheet" href="../../css/bootstrap.css">
    <!-- Bootstrap -->
    <!-- Hover CSS library -->
    <link rel="stylesheet" href="../../css/library/hover.css">
    <!-- Hover CSS library -->
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Permanent+Marker&family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <!-- Google fonts -->
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<!-- Start navbar -->
     <nav class="navbar smart-scroll navbar-expand-lg navbar-light bg-light" dir="auto">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="logo-nav">ONLINE</span>exam</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <!-- use "javascript:void(0)" to make link do nnothing at all -->
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown">
                           {{__('massages.Languages')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
                        @endforeach
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End navbar -->
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">{{__('auth.Register')}}</h2>
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                             {{Session::get('success')}}
                            </div>
                        @endif
                        <br>
                        <form method="POST" class="register-form" id="register-form" action="{{route('store.data')}}">
                        @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="{{__('auth.Name')}}"/>
                                @error('name')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="{{__('auth.Email')}}"/>
                                @error('email')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="{{__('auth.Password')}}"/>
                                @error('pass')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="name"><i class="zmdi zmdi-account-circle material-icons-name"></i></label>
                                <input type="text" name="id" id="name" placeholder="Id"/>
=======
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="id" id="name" placeholder="{{__('auth.Id')}}"/>
>>>>>>> 6e9b484302021f2a69db6bafba85a64c06246180
                                @error('id')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="name"><i class="zmdi zmdi-pin-account material-icons-name"></i></label>
                                <input type="text" name="ssn" id="name" placeholder="SSN"/>
=======
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="ssn" id="name" placeholder="{{__('auth.SSN')}}"/>
>>>>>>> 6e9b484302021f2a69db6bafba85a64c06246180
                                @error('ssn')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="name"><i class="zmdi zmdi-book material-icons-name"></i></label>
                                <input type="text" name="university" id="name" placeholder="University"/>
=======
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="university" id="name" placeholder="{{__('auth.University')}}"/>
>>>>>>> 6e9b484302021f2a69db6bafba85a64c06246180
                                @error('university')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div><div class="form-group">
<<<<<<< HEAD
                                <label for="name"><i class="zmdi zmdi-book material-icons-name"></i></label>
                                <input type="text" name="collage" id="name" placeholder="Collage"/>
=======
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="collage" id="name" placeholder="{{__('auth.Collage')}}"/>
>>>>>>> 6e9b484302021f2a69db6bafba85a64c06246180
                                @error('collage')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="name"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="text" name="phone-num" id="name" placeholder="Phone Number"/>
=======
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="phone-num" id="name" placeholder="{{__('auth.Phone Number')}}"/>
>>>>>>> 6e9b484302021f2a69db6bafba85a64c06246180
                                @error('phone-num')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="{{__('auth.Register')}}"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../../img/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{route('login')}}" class="signup-image-link">{{__('auth.I am already member')}}</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>



    <!-- Scripts -->
        <!-- Bootstrap -->
        <script src="../../JQuery/JQuery.js"></script>
        <script src="../../javascript/bootstrap.js"></script>
        <!-- Bootstrap -->
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- AOS -->
        <script src="../../JQuery/jq.js"></script>
        <script src="../.././javascript/javascript.js"></script>
    <!-- Scripts -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>