<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
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
    <title>Teacher Edit Profile</title>
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
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('teacher.showexams')}}">Add Exam</a>
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
        <div class="profile">
            @if(isset($teacher))
            <form method="POST" action="{{route('teacher.editteacherprofile')}}">
            @csrf
                <table class="person-info">
                    <tr>
                        <td>
                            <label>Name :</label>
                        </td>
                        <td>
                            <input name="teacherName" id="InpTeachName" type="text" value="{{$teacher->name}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>University : </label>
                        </td>
                        <td>
                            <input name="teacherUniversity" id="InpTeachUni" type="text" value="{{$teacher->university_name}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <label>College :</label>
                        </td>
                        <td>

                            <input name="teacherCollage" id="InpTeachColl" type="text" value="{{$teacher->collage_name}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <label>Email :</label>
                        </td>
                        <td>

                            <input name="teacherEmail" id="InpTeachColl" type="text" value="{{$teacher->email}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <label>Password :</label>
                        </td>
                        <td>

                            <input name="teacherPassword" id="InpTeachPass" type="password" value="{{$teacher->password}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <label>Phone :</label>
                        </td>
                        <td>

                            <input name="teacherPhone" id="InpTeachPass" type="phone" value="{{$teacher->phone}}"/>
                        </td>
                    </tr>
                </table>
                <div class="button-submit-edit">
                    <button id="btn14" class="btn btn-primary" type="submit">Save</button>
                </div>
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
