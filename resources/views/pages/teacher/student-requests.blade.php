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

    <nav class="navbar smart-scroll navbar-expand-lg navbar-light bg-light" dir="auto">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="logo-nav">ONLINE</span>exam</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('teacher.index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('teacher.exam')}}">Exam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('teacher.courses')}}">Courses</a>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- use "javascript:void(0)" to make link do nothing at all -->
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Add Exam</a>
                            <a class="dropdown-item" href="{{route('teacher.studentreq')}}">Student Requests</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-switch" href="#">
                            <span class="language" id="eg">EG</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <span  class="language" id="ar">AR</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">sing out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End navbar -->

    <!-- Start Student Requests Section -->
    <section class="student-request">
        <div class="container">
            <div class="row last" id="page-content">
                <h4 class="courses-header col-12">Yor courses</h4>
                <div class="select-all col-12">
                    <label for="select-all">
                        <input type="checkbox" name="" value="Select All" id="select-all">Select All
                    </label>
                    <input type="submit" name="" value="Accept All" class="accept-all">
                    <input type="submit" name="" value="Remove All" class="remove-all">
                </div>
                <!-- Cards -->

                <div class="student-info text-md-center col-8">
                    <!-- Must add student name in 'for' attribute and 'id' for the input to make it unique and select the target card only -->
                    <!-- <label for="student-card-request" class="label-student-card">
                    </label> -->
                    <input type="checkbox" name="" value="" class="select"/>
                    <span class="student-name">Ahmed Radi Abdelqader</span>
                    <span class="student-id">20170024</span>
                    <span class="request-input">
                        <input type="submit" value="Accept" class="accept">
                    </span>
                    <span class="request-input">
                        <input type="submit" value="Remove" class="remove">
                    </span>
                </div>
                <div class="student-info text-md-center col-8">
                    <!-- Must add student name in 'for' attribute and 'id' for the input to make it unique and select the target card only -->
                    <!-- <label for="student-card" class="label-student-card">
                    </label> -->
                    <input type="checkbox" name="" value="" class="select"/>
                    <span class="student-name">Ahmed Radi Abdelqader</span>
                    <span class="student-id">20170024</span>
                    <span class="request-input">
                        <input type="submit" value="Accept" class="accept">
                    </span>
                    <span class="request-input">
                        <input type="submit" value="Remove" class="remove">
                    </span>
                </div>
                <div class="student-info text-md-center col-8">
                    <!-- Must add student name in 'for' attribute and 'id' for the input to make it unique and select the target card only -->
                    <!-- <label for="student-card" class="label-student-card">
                    </label> -->
                    <input type="checkbox" name="" value="" class="select"/>
                    <span class="student-name">Ahmed Radi Abdelqader</span>
                    <span class="student-id">20170024</span>
                    <span class="request-input">
                        <input type="submit" value="Accept" class="accept">
                    </span>
                    <span class="request-input">
                        <input type="submit" value="Remove" class="remove">
                    </span>
                </div>
                <div class="student-info text-md-center col-8">
                    <!-- Must add student name in 'for' attribute and 'id' for the input to make it unique and select the target card only -->
                    <!-- <label for="student-card" class="label-student-card">
                    </label> -->
                    <input type="checkbox" name="" value="" class="select"/>
                    <span class="student-name">Ahmed Radi Abdelqader</span>
                    <span class="student-id">20170024</span>
                    <span class="request-input">
                        <input type="submit" value="Accept" class="accept">
                    </span>
                    <span class="request-input">
                        <input type="submit" value="Remove" class="remove">
                    </span>
                </div>

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