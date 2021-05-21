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
    <title>Student Requests</title>
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
                        <a class="nav-link" href="{{route('teacher.index')}}">{{__('massages.Home')}} <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('teacher.exam')}}">{{__('massages.Exam')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('teacher.courses')}}">{{__('massages.Courses')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                            <!-- use "javascript:void(0)" to make link do nothing at all -->
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('teacher.addexam')}}">Add Exam</a>
                                <a class="dropdown-item" href="{{route('teacher.studentreq')}}">Student Requests</a>
                            </div>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('teacher.profile')}}">{{__('massages.Profile')}}</a>
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
    <!-- Start Student Requests Section -->
    <section class="student-request">
        <div class="container">
            @if(session('course_name'))
                <h3><center>{{session('course_name')}} Course</center></h3>
            @endif

            <div class="row last" id="page-content">
            <form action="{{route('teacher.studentreq.course')}}" method="get" class="assign-course">
                @csrf
                <h4 class="courses-header col-12">Choos Course: 
                    <select class="course-name" id="course-name" name = "course_id">
                        @if(isset($courses) && $courses -> count() > 0)
                            @foreach($courses as $course)
                            <option name="course_name" value = "{{$course -> id}}">{{$course -> name}}</option>
                            @endforeach
                        @endif
                    </select>
                    <button type="submit" class="add-button">Select</button>
                </h4>
            </form>
                
                <!-- Cards -->
                @if(isset($students) && $students -> count() > 0)
                    @foreach($students as $student)
                        @if($student->pivot->course_status == FALSE)
                            
                            <div class="student-info text-md-center col-8">
                                <!-- Must add student name in 'for' attribute and 'id' for the input to make it unique and select the target card only -->
                                <!-- <label for="student-card-request" class="label-student-card">
                                </label> -->
                               
                                <span class="student-name">{{$student->name}}</span>
                                <span class="student-id">{{$student->id}}</span>
                                <span class="request-input">
                                    <a href="{{route('teacher.studentreq.accept',$student->id)}}" >
                                        <input type="submit" value="Accept" class="accept">
                                    </a>
                                </span>
                                <span class="request-input">
                                    <a href="{{route('teacher.studentreq.reject',$student->id)}}">
                                        <input type="submit" value="Remove" class="remove">
                                    </a>
                                </span>
                            </div>
                        @endif
                    @endforeach
                @endif
                <!-- Cards -->
            </div>
        </div>
    </section>
    <!-- End Student Requests Section -->

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
        <script src="../../javascript/student-requests.js"></script>
    <!-- Scripts -->
</body>
</html>