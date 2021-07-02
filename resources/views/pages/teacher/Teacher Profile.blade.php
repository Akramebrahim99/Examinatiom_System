<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>{{__('massages.My Profile')}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, intial-scale=1" />
    <link rel="stylesheet" href="../../css/bootstrap.css" />
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
    <div class="row" id="EnglishRow" style="display:block" ;>
            
            <div class="teachName">
            @if(isset($teacher))
             <table>
                    <tr> 
                        <td style="padding:10px;text-align:right;">
                            <label style="font-weight:700">{{__('massages.Name')}}  :</label>
                        </td>
                        <td>
                            <label id="lblTeachName" style="font-weight:700">{{$teacher->name}}</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;text-align:right;">
                            <label style="font-weight:700">{{__('massages.University')}} : </label>
                        </td>
                        <td>
                            <label id="lblTeachUni" style="font-weight:700">{{$teacher->university_name}}</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;text-align:right;">

                            <label style="font-weight:700">{{__('massages.College')}} :</label>
                        </td>
                        <td>

                            <label id="lblTeachColl" style="font-weight:700">{{$teacher->collage_name}}</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;text-align:right;">

                            <label style="font-weight:700">{{__('massages.Email')}} :</label>
                        </td>
                        <td>

                            <label id="lblTeachEmail" style="font-weight:700">{{$teacher->email}}</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;text-align:right;">

                            <label style="font-weight:700">{{__('massages.Password')}} :</label>
                        </td>
                        <td>

                            <label id="lblTeachPass" style="font-weight:700">{{$teacher->password}}</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;text-align:right;"> 

                            <label style="font-weight:700">{{__('massages.Phone')}} :</label>
                        </td>
                        <td>

                            <label id="InpTeachPhone" style="font-weight:700">{{$teacher->phone}}</label>
                        </td>
                    </tr>

                </table>
        </div>
            
             <div class="btnsvTeach">
                <a href="{{route('teacher.editprofile')}}">
                    <button id="btn14" class="btn btn-primary" type="submit">{{__('massages.Edit')}}</button>
                </a>
              </div>
            @endif
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