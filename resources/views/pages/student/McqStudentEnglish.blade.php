<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, intial-scale=1" />
    <link rel="stylesheet" href="../../css/bootstrap11.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Permanent+Marker&family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/mcqstudent.css" />
    <script src="../../Javascript/html5shiv.min.js"></script>
    <script src="../../Javascript/respond.min.js"></script>
    <script type="text/javascript">


        var countDownDate = new Date("May 24, 2021 00:08:25").getTime();
        var x = setInterval(function () {

            var now = new Date().getTime();
            var distance = countDownDate - now;



            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);


            document.getElementById("minute").innerHTML = minutes;
            document.getElementById("second").innerHTML = seconds;
        });
    </script>
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
                                <a class="dropdown-item" href="{{route('student.requstedcourses')}}">Student Requests</a>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.result')}}">{{__('massages.Results')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.profile')}}">{{__('massages.Profile')}}</a>
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
        <div class="row" id="EnglishRow" style="display:block" ;>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="t1">
                    <input type="text" readonly="readonly" size="55" />
                    <div class="a1en">
                        <div class="form-check">
                            <input class="form-check-input"
                                   type="radio"
                                   name="flexRadioDefault"
                                   id="flexRadioDefault9" />
                            <input type="text" readonly="readonly" size="45" />
                        </div>
                        <div class="form-check">
                            <input class="form-check-input"
                                   type="radio"
                                   name="flexRadioDefault"
                                   id="flexRadioDefault10" />
                            <input type="text" readonly="readonly" size="45" />
                        </div>
                        <div class="form-check">
                            <input class="form-check-input"
                                   type="radio"
                                   name="flexRadioDefault"
                                   id="flexRadioDefault11" />
                            <input type="text" readonly="readonly" size="45" />
                        </div>
                        <div class="form-check">
                            <input class="form-check-input"
                                   type="radio"
                                   name="flexRadioDefault"
                                   id="flexRadioDefault12" />
                            <input type="text" readonly="readonly" size="45" />
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                <div class="raen">
                    <img class="img-responive" src="ra.png" />
                    <p class="nen">Next</p>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                <div class="laen">
                    <img class="img-responive" src="la.png" />
                    <p class="pen">Pervious</p>
                </div>
            </div>-->
            <div class="c1">
                <div class="timer">
                    <p id="minute"></p>
                    <h6>minutes</h6>
                </div>
                <div class="timer">
                    <p id="second"></p>
                    <h6>seconds</h6>
                </div>
            </div>
            <div class="pag1">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <ul class="pagination pagination-sm">
                            <li>
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </ul>
                </nav>
            </div>
            <!--<div class="ll1">
                <label id="100">1</label>
                from
                <label id="101">50</label>
            </div>-->
            <!--<script>

                var countDownDate = new Date("May 24, 2021 00:08:25").getTime();
                var x = setInterval(function) () {

                    var now = new Date().getTime();
                    var distance = countDownDate - now;



                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);


                    document.getElementById("minute").innerHTML = minutes;
                    document.getElementById("second").innerHTML = seconds;
                });

            </script>-->
        </div>
    </div>

    <script src="../../jquery/query.js"></script>
    <script src="../../Javascript/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../../jquery/jqq.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>