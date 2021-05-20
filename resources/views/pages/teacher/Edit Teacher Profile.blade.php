<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Edit Profile</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, intial-scale=1" />
    <link rel="stylesheet" href="../../css/bootstrap11.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Permanent+Marker&family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/Mark Essay question English and Arabic.css" />
    <script src="../../Javascript/html5shiv.min.js"></script>
    <script src="../../Javascript/respond.min.js"></script>
    <script type="text/javascript"></script>
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
                                <a class="dropdown-item" href="./student-requests.html">Student Requests</a>
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
        <div class="row" id="EnglishRow" style="display:block" ;>
            <div class="img33">
                <img src="../../img/Teach.jpg" width="200" height="150" />
            </div>
            <div class="EdtteachName">
                <table>
                    <tr>
                        <td style="padding:10px;text-align:right;">
                            <label style="font-weight:700">Name :</label>
                        </td>
                        <td>
                            <input id="InpTeachName" type="text" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;text-align:right;">
                            <label style="font-weight:700">SSN :</label>
                        </td>
                        <td>
                            <input id="InpTeachSsr" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;text-align:right;">
                            <label style="font-weight:700">University : </label>
                        </td>
                        <td>
                            <input id="InpTeachUni" type="text" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;text-align:right;">

                            <label style="font-weight:700">College :</label>
                        </td>
                        <td>

                            <input id="InpTeachColl" type="text" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;text-align:right;">

                            <label style="font-weight:700">Email :</label>
                        </td>
                        <td>

                            <input id="InpTeachColl" type="text" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;text-align:right;">

                            <label style="font-weight:700">Password :</label>
                        </td>
                        <td>

                            <input id="InpTeachPass" type="password" />
                        </td>
                    </tr>
                    

                </table>
                
                
            </div>
            <div class="btnsvTeach">
                <button id="btn14" class="btn btn-primary" type="submit">Save</button>
            </div>


            <!--<div class="EdtteachSsR">
                
                
            </div>
            <div class="EdtteachUni">
                
                
            </div>
            <div class="Edtteachcoll">
            </div>
            <div class="EdtteachEmail">
                
                
            </div>
            <div class="EdtteachPass">
               
                
            </div>-->
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