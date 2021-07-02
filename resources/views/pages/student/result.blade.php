<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title> {{__('massages.Result')}}</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.index')}}">{{__('massages.Home')}} <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.exam')}}">{{__('massages.Exam')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.courses')}}">{{__('massages.Courses')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.result')}}">{{__('massages.Results')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{__('massages.Profile')}} </a>
                    </li>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}" tabindex="-1" aria-disabled="true">{{__('massages.sing out')}} </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End navbar -->

    <!-- Start Result Section -->
    <section class="result-main">
        <div class="container">
            <div class="row last">
                <h4 class="result-header col-12">{{__('massages.Yor result')}} </h4>
                <div class="result-info text-md-center col-8">
                    <span class="subject-name">Computer Science</span>
                    <span class="subject-doctor">100 - 50</span>
                    <span class="subject-date">D</span>
                </div>
                <div class="result-info text-md-center col-8">
                    <span class="subject-name">Computer Science</span>
                    <span class="subject-doctor">100 - 90</span>
                    <span class="subject-date">A</span>
                </div>
                <div class="result-info text-md-center col-8">
                    <span class="subject-name">Computer Science</span>
                    <span class="subject-doctor">100 - 60</span>
                    <span class="subject-date">D</span>
                </div>
                <div class="result-info text-md-center col-8">
                    <span class="subject-name">Computer Science</span>
                    <span class="subject-doctor">100 - 50</span>
                    <span class="subject-date">D</span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Result Section -->

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
        <script src="../../javascript/javascript.js"></script>
    <!-- Scripts -->
</body>
</html>