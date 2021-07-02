<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>{{__('massages.Mark Essay Question')}}</title>
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
                                {{__('massages.Services')}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('teacher.showexams')}}">{{__('massages.Add Exam')}}</a>
                                <a class="dropdown-item" href="{{route('teacher.studentreq')}}">{{__('massages.Student Requests')}}</a>
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

    <!-- Start Student Courses Section -->
    <section class="teacher-courses-main">
       <div class="row content" id="page-body">
                <div class="container">
                    <div  class="col-12">
                        <h4 style="text-align: center;">{{__('massages.Mark Essay Question')}}</h4>
                    </div>
                </div>
        </div>
        <form method="POST" action="{{route('teacher.addmarkessayquestion',[$question->id])}}"> 
        @csrf
        <?php
            $array1 = [];
            $buttonStatue = FALSE;
        ?>
            @if(isset($students) &&   count($students) > 0)
                @foreach($students as $student)
                    @if($student->pivot->question_degree == NULL)
                        <div class="teacher-courses-info text-md-center col-20" style="background-color: #ddd;border-radius: 10px;font-family: 'Montserrat', sans-serif;">
                            <div class="container mt-sm-5 my-1">
                                <div class="question ml-sm-9 pl-sm-5 pt-2">
                                    <div class="py-2 h4">
                                        <b>Q. {{$question->description}}</b>
                                    </div>
                                    <div class="ml-md-10 ml-sm-10 pl-md-12 pt-sm-0 pt-3" id="options"> 
                                        <label class="options">{{__('massages.Student Answer Is')}}: <span style="color:red">{{$student->pivot->student_answer}}</span>  </label>
                                    </div>
                                </div>
                                <br>
                                <span>{{__('massages.Question Degree')}}: </span><input type="range" value="0" min="0" name="degree{{$count}}" max="{{$question->degree}}" oninput="this.nextElementSibling.value = this.value">
                                <output>0</output>
                            </div>
                            <br>
                        </div>
                        <?php
                        $array1[$count]= $student->id;
                        $count++; 
                        ?>
                    @else
                    <?php $buttonStatue = TRUE; ?>
                    @endif
                @endforeach
            
            <?php
                if($array1)
                {
                    session(['studentsid'=>$array1]);
                }
                ?>
            <br>
            @if(!$buttonStatue)
            <div style="text-align: center;"> <button style="font-size: 20px" type="submit" class="btn btn-success">{{__('massages.OK')}}</button></div>
            @endif
            <br>  
        </form>
        @endif
        <br><br>
    </section>
    <!-- End Student Courses Section -->

    <!-- Scripts -->
        <!-- Bootstrap -->
        <script src="../../../JQuery/JQuery.js"></script>
        <script src="../../../javascript/bootstrap.js"></script>
        <!-- Bootstrap -->
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- AOS -->
        <script src="../../../JQuery/jq.js"></script>
        <script src="../../../javascript/javascript.js" defer></script>
    <!-- Scripts -->
</body>
</html>