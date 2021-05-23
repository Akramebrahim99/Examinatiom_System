﻿<!DOCTYPE html>
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
    <!-- fonts Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- fonts Awesome -->
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/create_question.css">
    <title>Create Exam</title>
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
                            <a class="dropdown-item" href="{{route('teacher.showexams')}}">Add Exam</a>
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

    <!-- Model Form Add Questions -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"><!--"modal-dialog" -> make model take small size "modal-dialog-centered" -> Make model center in the page-->
            <div class="modal-content" id="box-body"><!--contain the model contact-->
                <div class="modal-header"><!--contain only X button to close the model-->
                    <h5 class="modal-title" id="staticBackdropLabel">Add New Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span><!--the 'X' shape-->
                    </button>
                </div>
                <div class="modal-body"><!--contain only the input fields-->
                <form method="POST" action="{{route('teacher.addquestion',[$course->id])}}" class="add-teacher-model">
                        @csrf
                       <div class="row">
                       <div class="col-sm-12">
                      <div class="form-group">
                       <label>Enter Question</label>
                       <input type="text" required="required" name="question" placeholder="Enter Question" class="form-control">
                       </div>
                       </div>

                         <div class="col-sm-6">
                         <div class="form-group">
                        <label>Enter Option 1</label>
                        <input type="text" name="option1" placeholder="Enter Option 1" class="form-control">
                        </div>
                        </div>

                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>Enter Option 2</label>
                        <input type="text" name="option2" placeholder="Enter Option 2" class="form-control">
                        </div>
                        </div>


                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>Enter Option 3</label>
                        <input type="text" name="option3" placeholder="Enter Option 3" class="form-control">
                        </div>
                        </div>


                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>Enter Option 4</label>
                        <input type="text" name="option4" placeholder="Enter Option 4" class="form-control">
                        </div>
                        </div>

                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>Enter Right Answer</label>
                        <select  name = "RightAns">
                            <option name="option1" value = "option1">Option 1</option>
                            <option name="option2" value = "option2">Option 2</option>
                            <option name="option3" value = "option3">Option 3</option>
                            <option name="option4" value = "option4">Option 4</option>
                            <option name="Essay Question" value = "Essay Question">Essay Question</option>
                        </select>
                        </div>
                        </div>

                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>Enter Question Degree</label>
                        <input type="text" required="required" name="degree" placeholder="Enter Question Degree" class="form-control">
                        </div>
                        </div>
                    
                        <div class="modal-footer">
                        <button type="submit" class="add-button">Add</button>
                        </div>
                        </div>
                 </form>
              </div>
            </div>
        </div>
    </div>
    <!-- Model Form Add Questions -->
      
    <!-- Start Student Courses Section -->

    <section class="add-courses">

            <div class="row content" id="page-body">
                <div class="container">
                    <div  class="col-12">
                        <h4 class="page-header">{{$course->name}}</h4>
                        <button class="add-course-button"  data-toggle="modal" data-target="#staticBackdrop">Add Question</button>
                    </div>
                </div>
            </div>
            @if(isset($questions) && $questions -> count() > 0)
                    @foreach($questions as $question)
                        <div class="teacher-courses-info text-md-center col-20" style="background-color: #ddd;border-radius: 10px;font-family: 'Montserrat', sans-serif;">
                            <div class="container mt-sm-5 my-1">
                                <div class="question ml-sm-5 pl-sm-5 pt-2">
                                    <div class="py-2 h5">
                                        <b>Q. {{$question->description}}</b>
                                    </div>
                                    <div class="ml-md-10 ml-sm-10 pl-md-12 pt-sm-0 pt-3" id="options"> 
                                        <label class="options">{{$question->answer1}}  </label>
                                        <label class="options">{{$question->answer2}}  </label>
                                        <label class="options">{{$question->answer3}}  </label>
                                        <label class="options">{{$question->answer4}}  </label> 
                                        <label class="options" style="color: green">Correct Answer Is: <span style="color: red">{{$question->correct_answer}}</span> </label>
                                        <label class="options" style="color: green">Degree Is: <span style="color: red">{{$question->degree}}</span> </label>  
                                    </div>
                                </div>
                                <div class="d-flex align-items-center pt-3">
                                    <div id="prev"> <button class="btn btn-success">Edit</button> </div>
                                    <div class="ml-auto mr-sm-5"> <button class="btn btn-danger">Delete</button> </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            @endif


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