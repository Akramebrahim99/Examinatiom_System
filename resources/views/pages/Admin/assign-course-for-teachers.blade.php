<?php use App\Models\Teacher; ?>
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
    <title>Assign Course For Teachers</title>
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
                        <a class="nav-link" href="{{route('admin.index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('show.teachers')}}">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('show.courses')}}">Courses</a>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- use "javascript:void(0)" to make link do nothing at all -->
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('show.course.teacher')}}">Assign Course To Teacher</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-switch" href="#">
                            <span class="language" id="ar">EG</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <span  class="language" id="eg">AR</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}" tabindex="-1" aria-disabled="true">sing out</a>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Add course to doctor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span><!--the 'X' shape-->
                    </button>
                </div>

                <div class="modal-body"><!--contain only the input fileds-->
                    <form action="{{route('add.course.teacher')}}" method="post" class="assign-course">
                            @csrf
                        <label for="doctor-name">Doctor Name
                            <select class="doctor-name" id="doctor-name" name = "teacher_id">
                                <option value = "" selected></option>
                                @if(isset($teachers) && $teachers -> count() > 0)
                                    @foreach($teachers as $teacher)
                                        <option value = "{{$teacher -> id}}">{{$teacher -> name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </label>
                        <label for="course-name">Course Name
                            <select class="course-name" id="course-name" name = "course_id">
                                <option value = "" selected></option>
                                @if(isset($courses) && $courses -> count() > 0)
                                    @foreach($courses as $course)
                                        @if($course->teacher_id == NULL)
                                            <option name="course_name" value = "{{$course -> id}}">{{$course -> name}}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                        </label>
                        <div class="modal-footer">
                            <button type="submit" class="add-button">Add</button>
                            <button type="button" class="close-button" data-dismiss="modal">Close</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Model Form Add Courses -->

    <!-- Start Student Courses Section -->

    <section class="teacher-main-info">
        <div class="container">
            <div class="row content" id="page-body">
                <div  class="col-12">
                    <h4 class="teacher-courses-header">Yor courses</h4>
                    <button class="add-course"  data-toggle="modal" data-target="#staticBackdrop">Add courses</button>
                </div>
                @if(isset($courses) && $courses -> count() > 0)
                    @foreach($courses as $course)
                        @if($course->teacher_id != NULL)
                        <?php
                        $teacher1 = Teacher::find($course->teacher_id);
                        ?>
                            <span class="teacher-info teacher-link text-md-center col-8">
                                <span class="subject-doctor-name">{{$teacher1->name}}</span>
                                <pan class="subject-name">{{$course->name}}</pan><!-- Name of Course will print from database -->
                                <a href="{{route('delete.course.teacher',$course->id)}}"><i class="fa fa-times remove" value="remove"></i></a>
                            </span>
                        @endif    
                    @endforeach
                @endif


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