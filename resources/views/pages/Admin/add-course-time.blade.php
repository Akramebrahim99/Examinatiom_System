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
    <!-- fonts Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- fonts Awesome -->
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="../../css/style.css">
    <title> {{__('massages.Add Courses')}}</title>
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
                        <a class="nav-link" href="{{route('admin.index')}}">{{__('massages.Home')}} <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('show.teachers')}}">{{__('massages.Teachers')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('show.courses')}}">{{__('massages.Courses')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                            <!-- use "javascript:void(0)" to make link do nothing at all -->
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown">
                            {{__('massages.Services')}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('show.course.teacher')}}">{{__('massages.Assign Course To Teacher')}}</a>
                            </div>
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
    <!-- Model Form Add Courses -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"><!--"modal-dialog" -> make model take small size "modal-dialog-centered" -> Make model center in the page-->
            <div class="modal-content" id="box-body"><!--contain the model contact-->
                <div class="modal-header"><!--contain only X button to close the model-->
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('massages.Add Courses Time')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span><!--the 'X' shape-->
                    </button>
                </div>
                <div class="modal-body"><!--contain only the input fields-->

                    <form action="{{route('add.course')}}" method="post" class="add-course-time">
                        @csrf
                        <label for="course-name"><span class="span-with-width">{{__('massages.Course Name')}}</span>
                            <input type="text" name="courseName" class="course-name" id="course-name" placeholder="{{__('massages.Course Name')}}" />
                        </label>
                        @error('courseName')
                                <p style="color: red">{{$message}}</p>
                        @enderror
                        <label for="course-date"><span class="span-with-width">{{__('massages.Course Date')}}</span>
                            <input type="datetime-local" name="courseDate" class="course-date" id="course-date" />
                        </label>
                        @error('courseDate')
                                <p style="color: red">{{$message}}</p>
                        @enderror
                        <label for="exam-degree"><span class="span-with-width">{{__('massages.Exam Degree')}}</span>
                            <input type="text" name="courseDegree" class="exam-degree" id="exam-degree" placeholder="{{__('massages.Exam Degree')}}">
                        </label>
                        @error('courseDegree')
                                <p style="color: red">{{$message}}</p>
                        @enderror
                        <label for="duration-time"><span class="span-with-width">{{__('massages.Duration time for Exam')}}</span>
                            <input type="text" name="duration" class="duration-time" id="duration-time" placeholder="{{__('massages.Number of hours')}}" />
                        </label>
                        @error('duration')
                                <p style="color: red">{{$message}}</p>
                        @enderror
                        <div class="modal-footer">
                            <button type="submit" class="add-button">{{__('massages.Add')}}</button>
                            <button type="button" class="close-button" data-dismiss="modal">{{__('massages.Close')}}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Model Form Add Courses -->

    <!-- Start Student Courses Section -->

    <section class="add-courses">
        <div class="container">
            <div class="row content" id="page-body">

                <div  class="col-12">
                    <h4 class="page-header">{{__('massages.Courses')}}</h4>
                    <button class="add-course-button"  data-toggle="modal" data-target="#staticBackdrop">{{__('massages.Add course')}}</button>
                    @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                             {{Session::get('success')}}
                            </div>
                    @elseif (Session::has('faild'))
                            <div class="alert alert-success" role="alert">
                             {{Session::get('faild')}}
                            </div>
                    @endif
                <br>
                </div>
                @if(isset($courses) && $courses -> count() > 0)
                    @foreach($courses as $course)
                        <span class="course-info text-md-center col-8" id="teacher-link">
                            <span class="subject-name">{{$course -> name}}</span><!-- Name of Course will print from database -->
                            <span class="subject subject-date">{{$course -> date_of_exam}}</span>
                            <span class="subject subject-duration">{{$course -> duration}}</span>
                            <span class="subject subject-degree">{{$course -> course_degree}}</span>
                            <a href="{{route('delete.course',$course -> id)}}"><i class="fa fa-times remove" value="remove"></i></a>
                        </span>
                    @endforeach
                @endif

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