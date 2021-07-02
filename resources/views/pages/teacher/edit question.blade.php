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
    <!-- fonts Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    <!-- fonts Awesome -->
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="../../../css/style.css">
    <title>{{__('massages.Edit Question')}}</title>
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


    <!-- Start Exam Section -->
    <section class="add-courses">
        <div class="container">
            <!-- Model Form Add Questions -->
            <div class="modal-content" id="box-body"><!--contain the model contact-->
                <div class="modal-header"><!--contain only X button to close the model-->
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('massages.Edit Question')}}</h5>
                </div>
                <div class="modal-body"><!--contain only the input fields-->
                @if(isset($question))
                <form method="POST" action="{{route('teacher.editquestioninfo',[$question->id])}}" class="add-teacher-model">
                        @csrf
                       <div class="row"> 
                       <div class="col-sm-12">
                      <div class="form-group">
                       <label>{{__('massages.Enter Question')}}</label>
                       <input style="width: 100%" type="text" required="required" name="question" placeholder="Enter Question" class="form-control" value="{{$question->description}}">
                       </div>
                       </div>

                         <div class="col-sm-6">
                         <div class="form-group">
                        <label>{{__('massages.Enter Option 1')}}</label>
                        <input style="width: 100%;" type="text" name="option1" placeholder="Enter Option 1" class="form-control" value="{{$question->answer1}}">
                        </div>
                        </div>

                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>{{__('massages.Enter Option 2')}}</label>
                        <input style="width: 100%;" type="text" name="option2" placeholder="Enter Option 2" class="form-control" value="{{$question->answer2}}">
                        </div>
                        </div>


                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>{{__('massages.Enter Option 3')}}</label>
                        <input style="width: 100%;" type="text" name="option3" placeholder="Enter Option 3" class="form-control" value="{{$question->answer3}}">
                        </div>
                        </div>


                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>{{__('massages.Enter Option 4')}}</label>
                        <input style="width: 100%;" type="text" name="option4" placeholder="Enter Option 4" class="form-control" value="{{$question->answer4}}">
                        </div>
                        </div>

                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>{{__('massages.Enter Right Answer')}}</label>
                        <select style="width: 50%;"  name = "RightAns">
                            <option name="option1" value = "option1">{{__('massages.Option 1')}}</option>
                            <option name="option2" value = "option2">{{__('massages.Option 2')}}</option>
                            <option name="option3" value = "option3">{{__('massages.Option 3')}}</option>
                            <option name="option4" value = "option4">{{__('massages.Option 4')}}</option>
                            <option name="Essay Question" value = "Essay Question">{{__('massages.Essay Question')}}</option>
                        </select>
                        </div>
                        </div>

                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>{{__('massages.Enter Question Degree')}}</label>
                        <input type="text" required="required" name="degree" placeholder="Enter Question Degree" class="form-control" value="{{$question->degree}}">
                        </div>
                        </div>
                    
                        <div class="modal-footer">
                        <button type="submit" class="add-button">{{__('massages.Edit')}}</button>
                        </div>
                        </div>
                 </form>
                 @endif
              </div>
            </div>
    <!-- Model Form Add Questions -->
        </div>
    </section>
    <br><br><br>
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
        <script src="../../../JQuery/jq.js"></script>
        <script src="../../.././javascript/javascript.js"></script>
    <!-- Scripts -->
</body>
</html>