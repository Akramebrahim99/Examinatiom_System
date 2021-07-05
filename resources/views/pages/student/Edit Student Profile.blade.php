<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    <!-- fonts Awesome -->
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="../../css/style.css">
    <title>Student Edit profile</title>
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
                                <a class="dropdown-item" href="{{route('student.courses')}}">{{__('massages.Show Courses')}}</a>
                                <a class="dropdown-item" href="{{route('student.requstedcourses')}}">{{__('massages.Courses Requested')}}</a>
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

        <div class="profile">
            @if(isset($student))
            <form method="POST" action="{{route('student.editstudentprofile')}}">
            @csrf
                <table class="person-info">
                    <tr>
<<<<<<< HEAD
                        <td style="padding:10px;text-align:right;">
                            <label style="font-weight:700">{{__('massages.Name')}} :</label>
=======
                        <td>
                            <label>Name :</label>
>>>>>>> 8cfa1ecb78786cfbab92cc992a29e6ab54073f1a
                        </td>
                        <td>
                            <input name="name" id="InpStdName" type="text" value="{{$student->name}}"/>
                        </td>
                    </tr>
                    <tr>
<<<<<<< HEAD
                        <td style="padding:10px;text-align:right;">
                            <label style="font-weight:700">{{__('massages.SSN')}} :</label>
=======
                        <td>
                            <label>SSN :</label>
>>>>>>> 8cfa1ecb78786cfbab92cc992a29e6ab54073f1a
                        </td>
                        <td>
                            <input name="ssn" id="InpStdSsr" type="number" value="{{$student->ssn}}"/>
                        </td>
                    </tr>
                    <tr>
<<<<<<< HEAD
                        <td style="padding:10px;text-align:right;">
                            <label style="font-weight:700">{{__('massages.University')}} : </label>
=======
                        <td>
                            <label>University : </label>
>>>>>>> 8cfa1ecb78786cfbab92cc992a29e6ab54073f1a
                        </td>
                        <td>
                            <input name="university" id="InpStdUni" type="text" value="{{$student->university_name}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>

<<<<<<< HEAD
                            <label style="font-weight:700">{{__('massages.College')}} :</label>
=======
                            <label>College :</label>
>>>>>>> 8cfa1ecb78786cfbab92cc992a29e6ab54073f1a
                        </td>
                        <td>

                            <input name="collage" id="InpStdColl" type="text" value="{{$student->collage_name}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>

<<<<<<< HEAD
                            <label style="font-weight:700">{{__('massages.Email')}} :</label>
=======
                            <label>Email :</label>
>>>>>>> 8cfa1ecb78786cfbab92cc992a29e6ab54073f1a
                        </td>
                        <td>

                            <input name="email" id="InpStdColl" type="text" value="{{$student->email}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>

<<<<<<< HEAD
                            <label style="font-weight:700">{{__('massages.Password')}} :</label>
=======
                            <label>Password :</label>
>>>>>>> 8cfa1ecb78786cfbab92cc992a29e6ab54073f1a
                        </td>
                        <td>

                            <input name="pass" id="InpStdPass" type="password" value="{{$student->password}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>

<<<<<<< HEAD
                            <label style="font-weight:700">{{__('massages.Id')}} :</label>
=======
                            <label>Id :</label>
>>>>>>> 8cfa1ecb78786cfbab92cc992a29e6ab54073f1a
                        </td>
                        <td>

                            <input name="id" id="InpStdPass" type="number" value="{{$student->id}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>

<<<<<<< HEAD
                            <label style="font-weight:700">{{__('massages.Phone')}} :</label>
=======
                            <label>Phone :</label>
>>>>>>> 8cfa1ecb78786cfbab92cc992a29e6ab54073f1a
                        </td>
                        <td>

                            <input name="phone-num" id="InpStdPass" type="number" value="{{$student->phone}}"/>
                        </td>
                    </tr>

                </table>
<<<<<<< HEAD


            </div>
            <div class="btnsvStd">
                <button id="btn13" class="btn btn-primary" type="submit">{{__('massages.Save')}} </button>
            </div>
=======
                <div class="button-submit-edit">
                    <button id="btn13" class="btn btn-primary" type="submit">Save</button>
                </div>
>>>>>>> 8cfa1ecb78786cfbab92cc992a29e6ab54073f1a
            </form>
            @endif
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
