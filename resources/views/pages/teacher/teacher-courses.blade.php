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
    <title>Teacher Courses</title>
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
                        <a class="nav-link" href="{{route('login')}}" tabindex="-1" aria-disabled="true">{{__('massages.sing out')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End navbar -->

    <!-- Model Form Add Courses -->

    <!-- Remove -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"><!--"modal-dialog" -> make model take small size "modal-dialog-centered" -> Make model ceneter in the page-->
            <div class="modal-content" id="box-body"><!--contain the model contact-->
                <div class="modal-header"><!--contain only X button to close the model-->
                    <h5 class="modal-title" id="staticBackdropLabel">Add Courses</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span><!--the 'X' shape-->
                    </button>
                </div>
                <div class="modal-body"><!--contain only the input fileds-->
                    <label for="course-name">Course name
                        <input type="text" id="course-name" placeholder="Course name">
                    </label>
                    <!-- <label for="course">Doctor name
                        <input type="text" id="course">
                    </label> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="add-botton">Add</button>
                    <button type="button" class="close-botton" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Remove -->

    <!-- Model Form Add Courses -->

    <!-- Start Student Courses Section -->
    <section class="teacher-courses-main">
        <div class="container">
            <div class="row last" id="page-body">
                <div  class="col-12">
                    <h4 class="teacher-courses-header">Yor courses</h4>
                    <!-- <button class="add-course"  data-toggle="modal" data-target="#staticBackdrop">Add courses</button> -->
                </div>
                <div class="teacher-courses-info text-md-center col-8">
                    <span class="teacher-subject-name">Computer Science</span>
                    <span class="number-student-register-course">525</span>
                    <a class="student-register-course" href="{{route('teacher.studentreg')}}">Students Registered in course</a>
                </div>
                <div class="teacher-courses-info text-md-center col-8">
                    <span class="teacher-subject-name">Computer Science</span>
                    <span class="number-student-register-course">635</span>
                    <a class="student-register-course" href="{{route('teacher.studentreg')}}">Students Registered in course</a>
                </div>
                <div class="teacher-courses-info text-md-center col-8">
                    <span class="teacher-subject-name">Computer Science</span>
                    <span class="number-student-register-course">525</span>
                    <a class="student-register-course" href="{{route('teacher.studentreg')}}">Students Registered in course</a>
                </div>
                <div class="teacher-courses-info text-md-center col-8">
                    <span class="teacher-subject-name">Computer Science</span>
                    <span class="number-student-register-course">322</span>
                    <a class="student-register-course" href="{{route('teacher.studentreg')}}">Students Registered in course</a>
                </div>
                <div class="teacher-courses-info text-md-center col-8">
                    <span class="teacher-subject-name">Computer Science</span>
                    <span class="number-student-register-course">123</span>
                    <a class="student-register-course" href=".{{route('teacher.studentreg')}}">Students Registered in course</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Student Courses Section -->

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
        <script src="../../javascript/javascript.js" defer></script>
    <!-- Scripts -->
</body>
</html>