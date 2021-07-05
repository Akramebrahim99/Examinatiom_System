<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('massages.Sign In')}}</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/Logreg/style.css">


    <!-- Bootstrap -->
   <link rel="stylesheet" href="../../../css/bootstrap.css">
    <!-- Bootstrap -->
    <!-- Hover CSS library -->
    <link rel="stylesheet" href="../../../css/library/hover.css">
    <!-- Hover CSS library -->
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Permanent+Marker&family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <!-- Google fonts -->
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="../../../css/style.css">
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

<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure>
                    <img src="img/signin-image.jpg" class="d-none d-lg-block d-xl-none d-xl-block" alt="sing up image">
                </figure>
                <a href="{{route('register')}}" class="signup-image-link">{{__('auth.Create an account')}}</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">{{__('massages.Sign In')}}</h2>
                <form method="POST" action="{{route('auth.login')}}" class="register-form" id="login-form">
                @csrf
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="{{__('auth.Your Email')}}"/>
                    </div>
                    @error('email')
                        <p style="color: red">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="your_pass" placeholder="{{__('auth.Password')}}"/>
                    </div>
                    @error('password')
                        <p style="color: red">{{$message}}</p>
                    @enderror
                    <!-- <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>{{__('auth.Remember me')}}</label>
                    </div> -->
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="{{__('auth.Log in')}}"/>
                    </div>
                </form>

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
