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
    <title>{{__('massages.Exam')}}</title>
</head>
<body>

    <!-- Start navbar -->
    <div class="container">
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
                        <a class="nav-link" href="{{route('student.exam')}}">{{__('massages.Exam')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                            <!-- use "javascript:void(0)" to make link do nothing at all -->
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown">
                            {{__('massages.Courses')}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('student.courses')}}">Show Courses</a>
                                <a class="dropdown-item" href="{{route('student.requstedcourses')}}">Courses Requested</a>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.result')}}">{{__('massages.Results')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{__('massages.Profile')}}</a>
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

                        <a class="nav-link" href="{{route('logout')}}" tabindex="-1" aria-disabled="true">{{__('massages.sing out')}}</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End navbar -->

    <!-- Start Exam Section -->
    <section class="exam-main">
        <div class="container">
            <div class="row last">
                <h4 class="exam-header col-12">Schedule of exams dates</h4>
                @if(isset($studendCourses) && $studendCourses -> count() > 0)
                    @foreach($studendCourses as $course)
                        @if($course->pivot->course_status == !(True && now()->greaterThan((Carbon\Carbon::parse($course->date_of_exam))->addHours($course->duration))))
                            <a class="exam-info text-md-center col-8" href="{{route('student.getexam',$course->id)}}">
                                <span class="subject-name">{{$course -> name}}</span>
                                <span class="subject-date">{{$course -> date_of_exam}}</span>
                                <span class="subject-time">{{$course -> duration}} H</span>
                                <span class="subject-duration">{{$course -> course_degree}}</span>
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End Exam Section -->

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