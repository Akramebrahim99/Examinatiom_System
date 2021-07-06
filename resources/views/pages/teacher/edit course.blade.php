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
    <title>{{__('massages.Edit Course')}}</title>
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
            <br>
            <br>    
            @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif
            <div class="modal-content" id="box-body"><!--contain the model contact-->
                <div class="modal-header"><!--contain only X button to close the model-->
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('massages.Edit Course')}}</h5>
                </div>
                <div class="modal-body"><!--contain only the input fields-->
                @if(isset($course))
                <form method="POST" action="{{route('teacher.editcourseinfo',[$course->id])}}" class="add-teacher-model">
                @csrf
                <div class="row">
                       <div class="col-sm-12">
                       <div class="form-group">
                       <label>{{__('massages.Course Name')}}</label>
                       <input style="width: 100%" value="{{$course->name}}" type="text" required="required" name="name" class="form-control" readonly>
                       </div>
                       </div>

                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>{{__('massages.Exam Date')}}</label>
                        <input style="width: 100%;" required="required" value="{{$course->date_of_exam}}" type="datetime-local" name="date_of_exam" class="form-control">
                        </div>
                        </div>

                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>{{__('massages.Course Degree')}}</label>
                        <input style="width: 100%;" type="number" min="1" required="required" value="{{$course->course_degree}}" type="text" name="course_degree" class="form-control">
                        </div>
                        </div>


                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>{{__('massages.Duration time for Exam')}}</label>
                        <input style="width: 100%;" type="number" min="1" required="required" value="{{$course->duration}}" type="text" name="duration" class="form-control">
                        </div>
                        </div>

                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>{{__('massages.Number of Submit')}}</label>
                        <input type="number" min="1" value="{{$course->no_of_submit}}" required="required" name="no_of_submit" class="form-control">
                        </div>
                        </div>

                        <div class="col-sm-6">
                        <div class="form-group">
                        <p>{{__('massages.One Page Exam Or Many Pages')}}</p>
                        @if($course->one_page)
                        <label for="true"><input value="1" id="true" type="radio" name="pages" checked>{{__('massages.All Question In One Page')}}</label>
                        <label for="false"><input value="0" id="false" type="radio" name="pages">{{__('massages.All Question In Many Pages')}}</label>
                        <br>
                        @else
                        <label for="true"><input value="1" id="true" type="radio" name="pages">{{__('massages.All Question In One Page')}}</label>
                        <label for="false"><input value="0" id="false" type="radio" name="pages" checked>{{__('massages.All Question In Many Pages')}}</label>
                        <br>
                        @endif
                        </div>
                        </div>


                        <div class="col-sm-6">
                        <div class="form-group">
                        <p>{{__('massages.Allow Previous Button')}}</p>
                        @if($course->previous)
                        <label for="yes"><input value="1" id="yes" type="radio" name="previous" checked>{{__('massages.Allow')}}</label><br>
                        <label for="no"><input value="0" id="no" type="radio" name="previous">{{__('massages.Not Allow')}}</label>
                        @else
                        <label for="yes"><input value="1" id="yes" type="radio" name="previous">{{__('massages.Allow')}}</label><br>
                        <label for="no"><input value="0" id="no" type="radio" name="previous" checked>{{__('massages.Not Allow')}}</label>
                        @endif
                        </div>
                        </div>

                        <div class="modal-footer">
                        <button type="submit" class="add-button">{{__('massages.Save')}}</button>
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
