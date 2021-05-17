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
    <title>Student Page</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.courses')}}">{{__('massages.Courses')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.result')}}">{{__('massages.Results')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{__('massages.Profile')}}</a>
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
                        <a class="nav-link" href="{{route('login')}}" tabindex="-1" aria-disabled="true">{{__('massages.sing out')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End navbar -->

    <!-- Start First Section -->

    <section class="first-section">
        <div class="container">
            <div class="row">
                <div class="f-info col-sm-5 order-lg-1 order-md-1 order-sm-1 order-2">
                    <div class="inner-info">
                        <h2>{{__('massages.Provide To You')}}<br />{{__('massages.Best Service')}}</h2>
                        <p>{{__('massages.Now You Can Get Your Exam Easy From any Place, Save Your Time And Be Save')}}</p>
                        <button class="hvr-float">{{__('massages.Get Started')}}</button>
                    </div>
                </div>
                <!-- <div class="clearfix"></div> -->
                <div class="f-img col-sm-7 order-lg-2 order-md-2 order-sm-2 order-1">
                    <img src="../../img/Student.svg" alt="Student" />
                </div>
            </div>
        </div>
    </section>

    <!-- End First Section -->

    <!-- Start services Section -->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="services-text text-center col-12">
                    <p class="services-par">OUR SERVICES</p>
                    <h2 class="services-header">We Provide The Best Exam Attempt </h2>
                    <p class="services-info">An explanatory explanation of what the exam site contains, and some details that may need clarification.</p>
                </div>
                <div class="services-cards text-center">
                    <div class="row justify-content-center align-items-center">
                        <div class="card card-height col-md-4 col-lg-3 col-sm-5 m-2 hvr-glow" data-aos="flip-left" data-aos-duration="2000">
                            <svg class="card-img" viewBox="0 0 511.998 511"xmlns="http://www.w3.org/2000/svg">
                                <path d="M58.96 187.047a7.472 7.472 0 0 0 5.298 2.195 7.495 7.495 0 0 0 5.3-12.793l-18.195-18.195 18.196-18.191a7.495 7.495 0 0 0-10.598-10.598l-23.492 23.492a7.493 7.493 0 0 0 0 10.598zm0 0M133.32 158.254l-18.195 18.195a7.491 7.491 0 0 0 .004 10.598c1.46 1.46 3.379 2.195 5.297 2.195s3.836-.734 5.297-2.195l23.496-23.496a7.49 7.49 0 0 0 0-10.594l-23.496-23.496a7.49 7.49 0 0 0-10.594 0 7.488 7.488 0 0 0 0 10.598zm0 0M81.172 188.723c.898.351 1.828.52 2.738.52a7.498 7.498 0 0 0 6.977-4.755l18.457-46.988a7.492 7.492 0 1 0-13.945-5.48l-18.462 46.988c-1.511 3.851.383 8.203 4.235 9.715zm0 0M45.008 233.203h50.48a7.494 7.494 0 0 0 0-14.988h-50.48a7.491 7.491 0 0 0-7.492 7.492 7.492 7.492 0 0 0 7.492 7.496zm0 0M211.754 218.215h-88.75a7.494 7.494 0 0 0 0 14.988h88.75a7.495 7.495 0 1 0 0-14.988zm0 0M45.008 264.809h21.504a7.494 7.494 0 0 0 0-14.989H45.008a7.491 7.491 0 0 0-7.492 7.493 7.492 7.492 0 0 0 7.492 7.496zm0 0M184.34 249.82a7.491 7.491 0 0 0-7.492 7.493 7.492 7.492 0 0 0 7.492 7.496h13.094a7.495 7.495 0 1 0 0-14.989zm0 0M164.617 257.313a7.494 7.494 0 0 0-7.492-7.493h-64.32a7.491 7.491 0 0 0-7.493 7.493 7.492 7.492 0 0 0 7.493 7.496h64.32a7.494 7.494 0 0 0 7.492-7.496zm0 0M213.703 257.313a7.494 7.494 0 0 0 7.492 7.496h24.528a7.495 7.495 0 1 0 0-14.989h-24.528a7.494 7.494 0 0 0-7.492 7.493zm0 0M172.895 164.266h25.87a7.495 7.495 0 1 0 0-14.989h-25.87a7.494 7.494 0 1 0 0 14.989zm0 0M227.742 164.266h157.856a7.492 7.492 0 0 0 7.492-7.496 7.491 7.491 0 0 0-7.492-7.493H227.742a7.494 7.494 0 1 0 0 14.989zm0 0M361.621 182.246h-63.945a7.494 7.494 0 0 0 0 14.988h63.945a7.494 7.494 0 0 0 0-14.988zm0 0M273.7 182.246h-21.981a7.492 7.492 0 0 0-7.492 7.496 7.491 7.491 0 0 0 7.492 7.492h21.98a7.491 7.491 0 0 0 7.492-7.492 7.492 7.492 0 0 0-7.492-7.496zm0 0M172.895 197.234h53.847a7.494 7.494 0 0 0 0-14.988h-53.847a7.495 7.495 0 1 0 0 14.988zm0 0M157.219 281.16h-50.477a7.494 7.494 0 0 0-7.496 7.492 7.494 7.494 0 0 0 7.496 7.493h50.477a7.494 7.494 0 0 0 7.492-7.493 7.494 7.494 0 0 0-7.492-7.492zm0 0M83.79 281.16H45.007a7.491 7.491 0 0 0-7.492 7.492 7.491 7.491 0 0 0 7.492 7.493h38.781a7.491 7.491 0 0 0 7.492-7.493 7.491 7.491 0 0 0-7.492-7.492zm0 0M248.723 281.16H182.78a7.491 7.491 0 0 0-7.492 7.492 7.491 7.491 0 0 0 7.492 7.493h65.942a7.494 7.494 0 0 0 7.492-7.493 7.494 7.494 0 0 0-7.492-7.492zm0 0M337.898 242.668H301.84a7.494 7.494 0 0 0 0 14.988h36.058a7.492 7.492 0 0 0 7.493-7.496 7.491 7.491 0 0 0-7.493-7.492zm0 0M400.469 257.656h50.902a7.495 7.495 0 1 0 0-14.988H400.47a7.491 7.491 0 0 0-7.492 7.492 7.494 7.494 0 0 0 7.492 7.496zm0 0M375.016 242.668h-11.664a7.494 7.494 0 1 0 0 14.988h11.664a7.492 7.492 0 0 0 7.492-7.496 7.491 7.491 0 0 0-7.492-7.492zm0 0M301.84 339.313h36.058a7.489 7.489 0 0 0 7.493-7.493 7.491 7.491 0 0 0-7.493-7.492H301.84a7.494 7.494 0 0 0-7.492 7.492 7.491 7.491 0 0 0 7.492 7.493zm0 0M400.469 339.313h50.902a7.492 7.492 0 1 0 0-14.985H400.47a7.491 7.491 0 0 0-7.492 7.492 7.491 7.491 0 0 0 7.492 7.493zm0 0M363.352 339.313h11.664a7.492 7.492 0 1 0 0-14.985h-11.664a7.491 7.491 0 0 0-7.493 7.492 7.489 7.489 0 0 0 7.493 7.493zm0 0M337.898 405.988H301.84c-4.137 0-7.492 3.356-7.492 7.492s3.355 7.493 7.492 7.493h36.058c4.141 0 7.493-3.356 7.493-7.493s-3.352-7.492-7.493-7.492zm0 0M451.371 405.988H400.47c-4.14 0-7.492 3.356-7.492 7.492s3.351 7.493 7.492 7.493h50.902c4.14 0 7.496-3.356 7.496-7.493s-3.355-7.492-7.496-7.492zm0 0M375.016 405.988h-11.664c-4.141 0-7.497 3.356-7.497 7.492s3.356 7.493 7.497 7.493h11.664c4.14 0 7.492-3.356 7.492-7.493s-3.352-7.492-7.492-7.492zm0 0"/>
                                <path d="M479.023.5H32.98C14.797.5 0 15.293 0 33.48v362.567c0 18.183 14.797 32.976 32.98 32.976h28.2a7.491 7.491 0 0 0 7.492-7.492 7.494 7.494 0 0 0-7.492-7.492h-28.2c-9.921 0-17.992-8.07-17.992-17.992V367.62h272.996v12.914h-5.941c-8.129 0-14.738 6.61-14.738 14.738v18.766H106.738a7.494 7.494 0 0 0-7.492 7.492 7.491 7.491 0 0 0 7.492 7.492h72.047v26.875H156.16c-15.094 0-27.37 12.282-27.37 27.372v16.187c0 6.887 5.6 12.488 12.487 12.488h228.875c6.887 0 12.489-5.601 12.489-12.488V483.27c0-15.09-12.278-27.372-27.371-27.372h-22.625v-9.472h138.527c8.125 0 14.734-6.61 14.734-14.739v-3.527c14.606-3.39 25.524-16.496 25.524-32.113l.566-362.57C512 15.293 497.207.5 479.023.5zm-196.73 349.281v-35.918h188.629v35.918zm20.676-50.906v-15.766h147.273v15.766zm147.273 65.89v15.77H302.97v-15.77zM193.77 429.024h73.535v2.668c0 8.125 6.61 14.735 14.738 14.735h35.617v9.472H193.77zm161.503 41.864c6.829 0 12.383 5.554 12.383 12.383v13.69H143.773v-13.69c0-6.829 5.559-12.383 12.387-12.383zm115.649-39.45H282.293v-35.914h188.629zm25.523-35.39c0 7.258-4.328 13.512-10.535 16.351V395.27c0-8.125-6.613-14.735-14.738-14.735h-5.942v-12.914h31.215zm0-43.41h-10.78c.151-.848.245-39.024.245-39.024 0-8.129-6.613-14.738-14.738-14.738h-5.942v-15.766h5.942c8.125 0 14.738-6.613 14.738-14.738v-36.418c0-8.125-6.613-14.738-14.738-14.738h-42.324a7.492 7.492 0 0 0-7.493 7.496 7.491 7.491 0 0 0 7.493 7.492h42.074v35.918H282.293v-35.918h99.93a7.491 7.491 0 0 0 7.492-7.492 7.492 7.492 0 0 0-7.492-7.496h-100.18c-8.129 0-14.738 6.613-14.738 14.738v36.418c0 8.125 6.61 14.738 14.738 14.738h5.941v15.766h-5.941c-8.129 0-14.738 6.613-14.738 14.738 0 0 .093 38.176.246 39.024H14.988V102.43h481.457zm0-265.196H15.54V33.477c0-9.918 8.07-17.989 17.992-17.989h444.922c9.922 0 17.992 8.07 17.992 17.992zm0 0"/>
                                <path d="M55.262 29.262c-12.125 0-21.989 9.863-21.989 21.988s9.864 21.992 21.989 21.992 21.992-9.867 21.992-21.992-9.867-21.988-21.992-21.988zm0 28.992c-3.86 0-7.004-3.14-7.004-7.004 0-3.86 3.144-7.004 7.004-7.004 3.863 0 7.004 3.145 7.004 7.004a7.01 7.01 0 0 1-7.004 7.004zm0 0M111.25 29.262c-12.125 0-21.992 9.863-21.992 21.988s9.867 21.992 21.992 21.992 21.988-9.867 21.988-21.992-9.867-21.988-21.988-21.988zm0 28.992a7.01 7.01 0 0 1-7.004-7.004c0-3.86 3.14-7.004 7.004-7.004 3.86 0 7.004 3.145 7.004 7.004 0 3.863-3.145 7.004-7.004 7.004zm0 0M167.234 29.262c-12.125 0-21.988 9.863-21.988 21.988s9.863 21.992 21.988 21.992 21.993-9.867 21.993-21.992-9.868-21.988-21.993-21.988zm0 28.992c-3.859 0-7.004-3.14-7.004-7.004 0-3.86 3.145-7.004 7.004-7.004 3.864 0 7.004 3.145 7.004 7.004a7.01 7.01 0 0 1-7.004 7.004zm0 0"/>
                            </svg>
                            <!-- <img class="card-img" src="./img/services/Register Your Courses.svg" alt="Card image cap"> -->
                            <div class="card-body">
                                <h6>Register Your Courses</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card card-height col-md-4 col-lg-3 col-sm-5 m-2 hvr-glow" data-aos="fade-up" data-aos-duration="2000">
                            <svg class="card-img" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                <path d="M55 1H9a1 1 0 0 0-1 1v60a1 1 0 0 0 1 1h36a.994.994 0 0 0 .708-.294l9.998-9.998A.994.994 0 0 0 56 52V2a1 1 0 0 0-1-1zM44 52v9H10V3h44v48h-9a1 1 0 0 0-1 1zm8.586 1L46 59.586V53z"/>
                                <path d="M36.414 30H48v-2H36a.997.997 0 0 0-.707.293l-1.846 1.846A12.927 12.927 0 0 0 25 27c-7.168 0-13 5.832-13 13s5.832 13 13 13 13-5.832 13-13c0-3.225-1.187-6.173-3.139-8.447zM14 40c0-5.728 4.402-10.442 10-10.949V50.95c-5.598-.508-10-5.222-10-10.95zm12 10.949V41h9.949c-.477 5.268-4.681 9.472-9.949 9.949zM35.949 39H26v-9.949a10.954 10.954 0 0 1 6.034 2.501l-2.741 2.741 1.414 1.414 2.741-2.741A10.946 10.946 0 0 1 35.949 39z"/>
                                <path d="M40 32h8v2h-8zM52 23h-3V6a1 1 0 0 0-1-1h-8a1 1 0 0 0-1 1v17h-2V12a1 1 0 0 0-1-1h-8a1 1 0 0 0-1 1v11h-2v-5a1 1 0 0 0-1-1h-8a1 1 0 0 0-1 1v5h-3v2h40zM41 7h6v16h-6zm-12 6h6v10h-6zm-12 6h6v4h-6z"/>
                            </svg>
                            <!-- <img class="card-img" src="./img/services/Take your exam.svg" alt="Card image cap"> -->
                            <div class="card-body">
                                <h6>Take your exam</h6>
                                <p class="card-text">Register for your subjects to take the exam.</p>
                            </div>
                        </div>
                        <div class="card card-height col-md-4 col-lg-3 col-sm-5 m-2 hvr-glow" data-aos="flip-right" data-aos-duration="2000">
                            <svg class="card-img" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve">
                                <path d="M421 271a44.773 44.773 0 0 0-16.579 3.164C399.211 255.075 381.718 241 361 241c-5.258 0-10.305.913-15 2.578V45c0-24.813-20.187-45-45-45H91C66.187 0 46 20.187 46 45v392c0 24.813 20.187 45 45 45h66.341a265.509 265.509 0 0 0 7.076 15.374l3.167 6.334A14.998 14.998 0 0 0 181 512h240c5.682 0 10.875-3.21 13.416-8.292l3.168-6.335C456.174 460.194 466 418.569 466 377v-61c0-24.813-20.187-45-45-45zM76 45c0-8.271 6.729-15 15-15h210c8.271 0 15 6.729 15 15v15H76V45zm15 407c-8.271 0-15-6.729-15-15v-15h63.828a272.075 272.075 0 0 0 6.875 30H91zm45-106v31c0 5.002.146 10.004.429 15H76V90h240v123.575A44.783 44.783 0 0 0 301 211c-5.257 0-10.307.906-15 2.57V165c0-24.813-20.187-45-45-45s-45 20.187-45 45v107.507c-34.191 6.969-60 37.275-60 73.493zm300 31c0 36.208-8.391 72.464-24.282 105H190.282C174.391 449.463 166 413.208 166 377v-31c0-19.556 12.539-36.239 30-42.43V377c0 8.284 6.716 15 15 15s15-6.716 15-15V165c0-8.271 6.729-15 15-15s15 6.729 15 15v151c0 8.284 6.716 15 15 15s15-6.716 15-15v-60c0-8.271 6.729-15 15-15s15 6.729 15 15v60c0 8.284 6.716 15 15 15s15-6.716 15-15v-30c0-8.271 6.729-15 15-15s15 6.729 15 15v60c0 8.284 6.716 15 15 15s15-6.716 15-15v-30c0-8.271 6.729-15 15-15s15 6.729 15 15v61z"/>
                            </svg>
                            <!-- <img class="card-img" src="./img/services/Highly Interactive Interface.svg" alt="Card image cap"> -->
                            <div class="card-body">
                                <h6>Highly Interactive Interface</h6>
                                <p class="card-text">Simple registration, login, concurrent processing, the security of information, and more.</p>
                            </div>
                        </div>
                        <!-- second row -->
                        <div class="card card-height col-md-4 col-lg-3 col-sm-5 m-2 hvr-glow" data-aos="zoom-out-down" data-aos-duration="2000">
                            <svg class="card-img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 20c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6zm0-10.5c-2.481 0-4.5 2.019-4.5 4.5s2.019 4.5 4.5 4.5 4.5-2.019 4.5-4.5-2.019-4.5-4.5-4.5z"/>
                                <path d="M11.387 16.5a.746.746 0 0 1-.507-.197l-1.637-1.5a.75.75 0 1 1 1.014-1.106l1.095 1.003 2.355-2.468a.75.75 0 1 1 1.086 1.035l-2.863 3a.748.748 0 0 1-.543.233z"/>
                                <path d="M21.25 23H2.75A2.752 2.752 0 0 1 0 20.25V3.75A2.752 2.752 0 0 1 2.75 1h18.5A2.752 2.752 0 0 1 24 3.75v16.5A2.752 2.752 0 0 1 21.25 23zM2.75 2.5c-.689 0-1.25.561-1.25 1.25v16.5c0 .689.561 1.25 1.25 1.25h18.5c.689 0 1.25-.561 1.25-1.25V3.75c0-.689-.561-1.25-1.25-1.25z"/>
                                <path d="M23.25 6H.75a.75.75 0 0 1 0-1.5h22.5a.75.75 0 0 1 0 1.5z"/>
                            </svg>
                            <!-- <img class="card-img" src="./img/services/Get the result.svg" alt="Card image cap"> -->
                            <div class="card-body">
                                <h6>Get the result</h6>
                                <p class="card-text">The doctor publishes the result after according to the total score.</p>
                            </div>
                        </div>
                        <div class="card card-height col-md-4 col-lg-3 col-sm-5 m-2 hvr-glow" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <svg class="card-img" id="Capa_1" enable-background="new 0 0 512.018 512.018" viewBox="0 0 512.018 512.018" xmlns="http://www.w3.org/2000/svg">
                                <g><g><g>
                                <path d="m504.518 306.342c4.142.0 7.5-3.357 7.5-7.5v-274.18c0-9.194-7.48-16.675-16.675-16.675h-427.685c-9.195.0-16.675 7.48-16.675 16.675v65.329h-33.85-.44c-9.205.0-16.693 7.488-16.693 16.693V483.71c0 11.205 9.116 20.32 20.321 20.32h421.686c11.205.0 20.321-9.115 20.321-20.32v-62.793h29.405c11.185.0 20.284-9.1 20.284-20.284v-67.124c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v67.124c0 2.914-2.371 5.284-5.284 5.284h-29.405v-299.233c0-9.204-7.488-16.692-16.692-16.692h-302.875c-4.142.0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h302.875c.933.0 1.692.759 1.692 1.692v28.337h-381.346v-30.029h42.174c4.142.0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-42.174v-22.049h431.035v230.898c.001 4.143 3.358 7.501 7.501 7.501zm-489.078-199.658c0-.934.759-1.692 1.692-1.692h33.85v30.029h-35.542zm431.889 43.349v333.677c0 2.934-2.387 5.32-5.321 5.32h-421.687c-2.934.0-5.321-2.387-5.321-5.32v-333.677zm-345.512-97.102H65.982v-28.235c0-.918.748-1.665 1.666-1.665h34.169zm15 0v-29.944h378.525c.923.0 1.675.751 1.675 1.675v28.269z"/>
                                <path d="m290.165 239.579h89.483c4.142.0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-89.483c-4.142.0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5z"/>
                                <path d="m255.645 298.438h158.523c4.142.0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5H255.645c-4.142.0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5z"/>
                                <path d="m255.645 337.115h158.523c4.142.0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5H255.645c-4.142.0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5z"/>
                                <path d="m255.645 375.794h158.523c4.142.0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5H255.645c-4.142.0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5z"/>
                                <path d="m255.645 414.473h158.523c4.142.0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5H255.645c-4.142.0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5z"/>
                                <path d="m135.44 414.306c52.262.0 94.78-42.519 94.78-94.78s-42.518-94.779-94.78-94.779-94.78 42.518-94.78 94.779 42.519 94.78 94.78 94.78zm0-174.56c43.991.0 79.78 35.789 79.78 79.779.0 43.991-35.789 79.78-79.78 79.78s-79.78-35.789-79.78-79.78c.001-43.99 35.79-79.779 79.78-79.779z"/>
                                <path d="m110.19 363.708c3.052 3.052 7.06 4.578 11.069 4.577 4.008.0 8.018-1.526 11.069-4.577l54.681-54.68c4.235-4.234 6.567-9.863 6.567-15.852s-2.332-11.618-6.566-15.852-9.864-6.566-15.852-6.566-11.618 2.331-15.852 6.565l-34.045 34.046-5.687-5.687c-8.741-8.74-22.963-8.739-31.704.001-8.74 8.74-8.74 22.963.0 31.704zm-15.713-47.417c1.446-1.446 3.346-2.169 5.246-2.169 1.899.0 3.799.723 5.245 2.168l10.381 10.383c1.579 1.579 3.678 2.448 5.911 2.448s4.333-.869 5.912-2.448l38.741-38.741c1.401-1.401 3.264-2.173 5.246-2.173 1.981.0 3.844.771 5.245 2.173 1.401 1.4 2.173 3.264 2.173 5.245s-.771 3.844-2.173 5.244l-54.681 54.68c-.255.256-.671.256-.926.0l-26.319-26.318c-2.893-2.893-2.893-7.6-.001-10.492z"/>
                                </g></g></g>
                            </svg>
                            <!-- <img class="card-img" src="./img/services/Exam system.svg" alt="Card image cap"> -->
                            <div class="card-body">
                                <h6>Exam system</h6>
                                <p class="card-text">The exam date is predefined and each question has a specific time.</p>
                            </div>
                        </div>
                        <div class="card card-height col-md-4 col-lg-3 col-sm-5 m-2 hvr-glow" data-aos="zoom-out-down" data-aos-duration="2000">
                            <svg class="card-img"  version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 31.694 31.694" xml:space="preserve">
                                <path d="M23.112 9.35c-4.473 2.742-7.697 6.205-9.006 7.744l-3.361-2.633c-.089-.064-1.934 1.574-1.885 1.625l6.121 6.223a.225.225 0 0 0 .174.074c.012 0 .031 0 .047-.004a.244.244 0 0 0 .178-.152c.986-2.521 4.242-7.799 8.4-11.627.074-.07.1-.18.059-.275-.001-.001-.665-1.013-.727-.975z"/>
                                <path d="M27.126 3.842c-9.268 0-10.836-3.518-10.85-3.551A.466.466 0 0 0 15.85 0h-.008a.475.475 0 0 0-.428.283c-.011.037-1.613 3.559-10.846 3.559a.461.461 0 0 0-.462.461v15.764c0 6.453 11.084 11.383 11.553 11.59a.45.45 0 0 0 .188.037c.061 0 .127-.01.186-.037.473-.207 11.555-5.137 11.555-11.59V4.303a.465.465 0 0 0-.462-.461zM25.038 19.15c0 5.049-8.678 8.912-9.047 9.072a.324.324 0 0 1-.145.031.325.325 0 0 1-.146-.031c-.365-.16-9.046-4.023-9.046-9.072V6.811c0-.199.161-.363.362-.363 7.229 0 8.482-2.756 8.494-2.783a.367.367 0 0 1 .334-.223h.006a.36.36 0 0 1 .332.229c.012.025 1.24 2.777 8.494 2.777.201 0 .361.164.361.363l.001 12.339z"/>
                            </svg>
                            <!-- <img class="card-img" src="./img/services/Security.svg" alt="Card image cap"> -->
                            <div class="card-body">
                                <h6>Security</h6>
                                <p class="card-text">The site takes security measures to prevent attempts to cheat during exams.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End services Section -->

    <!-- Start Features Section -->
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="text-center col-12">
                    <h2>Online Exam Software to Deliver Online Proctored Exams</h2>
                    <p class="features-p">Security procedures for exams.</p>
                </div>
                <div class="text-center justify-content-center align-items-center">
                    <div class="card col-md-4 col-lg-3 col-sm-5 m-2 hvr-glow"  data-aos="flip-left" data-aos-duration="2000">
                        <svg class="card-img" enable-background="new 0 0 120 120" viewBox="0 0 120 120" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <style type="text/css">
                                .icon-18-0{fill:none;stroke:#BDC5D1;}
                                .icon-18-1{fill:none;stroke:#FFFFFF;}
                                .icon-18-2{fill:none;stroke:#377DFF;}
                                .icon-18-3{fill:none;stroke:#BDC5D1;}
                                .icon-18-4{fill:#BDC5D1;}
                                .icon-18-5{fill:#377DFF;}
                            </style>
                            <polygon class="icon-18-0 fill-none stroke-gray-400" points="71.3 78.1 97.6 78.1 100.6 85.3 68.2 85.3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <g opacity=".5">
                                <path class="icon-18-0 fill-none stroke-gray-400" d="m92 18.4h12.1c3.1 0 5.5 2.5 5.5 5.5v64.2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                <path class="icon-18-0 fill-none stroke-gray-400" d="M50.4,96.7H7.1c-3.1,0-5.5-2.5-5.5-5.5V23.9c0-3.1,2.5-5.5,5.5-5.5h38.3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                <path class="icon-18-0 fill-none stroke-gray-400" d="m109.6 91.2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                <path class="icon-18-0 fill-none stroke-gray-400" d="m99.1 79.8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                <line class="icon-18-0 fill-none stroke-gray-400" x1="1.5" x2="66.2" y1="79.8" y2="79.8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                <line class="icon-18-0 fill-none stroke-gray-400" x1="102" x2="109" y1="79.8" y2="79.8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                <path class="icon-18-0 fill-none stroke-gray-400" d="m9 79.8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                    <line class="icon-18-0 fill-none stroke-gray-400" x1="42" x2="38.8" y1="96.7" y2="111.9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                <line class="icon-18-0 fill-none stroke-gray-400" x1="50.4" x2="27.8" y1="111.9" y2="111.9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            </g>
                            <g stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3">
                                <path class="icon-18-0 fill-none stroke-gray-400" d="m42.5 45.3c0.4-1.3 0.6-2.7 0.6-4.2 0-6.9-5-12-11.1-12s-11 5.2-11 12.1c0 1.5 0.2 2.9 0.6 4.2-0.9 0.6-1.4 1.6-1.4 2.7 0 1.5 1 2.7 2.3 3.1 1.6 4.7 5.3 8.1 9.6 8.1s8-3.3 9.6-8.1c1.3-0.5 2.3-1.7 2.3-3.2 0-1.1-0.6-2.1-1.5-2.7z"/>
                                <path class="icon-18-0 fill-none stroke-gray-400" d="m39.8 40.6c-0.3-1.3-1.2-1.3-2.3-1.3-0.4 0-0.6-2.9-0.6-2.9s-1.2 0-3.2 1.8c-4.2 3.7-8.8 0.8-8.8 0.8"/>
                                    <path class="icon-18-0 fill-none stroke-gray-400" d="m21.7 41.9"/>
                                    <path class="icon-18-0 fill-none stroke-gray-400" d="m41.7 64.1 10.5 4.4c1.9 1 2.7 2.9 2.7 4.9v6"/>
                                    <polyline class="icon-18-2 fill-none stroke-primary" points="32.2 65.6 36.3 70.2 41.8 64.3 39.4 60.2"/>
                                    <path class="icon-18-0 fill-none stroke-gray-400" d="m22.7 64.1-10.3 4.2c-0.7 0.4-1.2 0.9-1.6 1.5-0.7 1-1.1 2.1-1.1 3.4v6.2"/>
                                    <path class="icon-18-0 fill-none stroke-gray-400" d="m22.1 47.8"/>
                                    <polyline class="icon-18-2 fill-none stroke-primary" points="32.2 65.6 28.2 70.2 22.7 64.3 25 60.2"/>
                                    <line class="icon-18-2 fill-none stroke-primary" x1="39.4" x2="32.2" y1="60.2" y2="65.6"/>
                                    <line class="icon-18-2 fill-none stroke-primary" x1="25" x2="32.2" y1="60.2" y2="65.6"/>
                            </g>
                            <line class="icon-18-0 fill-none stroke-gray-400" x1="63.1" x2="63.1" y1="109.8" y2="118" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-18-0 fill-none stroke-gray-400" x1="106.7" x2="106.7" y1="109.8" y2="118" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <g stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3">
                                <path class="icon-18-0 fill-none stroke-gray-400" d="m90.3 78.1v-2.1c3.7-2 6.6-5.8 8.2-10.5 2-0.6 3.5-2.4 3.5-4.7 0-1.7-0.9-3.2-2.1-4.1 0.6-2 1-4.1 1-6.2 0-10.4-7.5-18.1-16.7-18.1s-16.7 7.8-16.7 18.1c0 2.2 0.3 4.3 1 6.2-1.3 0.9-2.1 2.4-2.1 4.1 0 2.2 1.5 4.1 3.5 4.7 1.6 4.7 4.5 8.5 8.2 10.5v2.1"/>
                                <path class="icon-18-0 fill-none stroke-gray-400" d="m118.5 118v-20.4c0-3-1.2-5.9-4.1-7.4l-13.7-5v0.1"/>
                                <path class="icon-18-0 fill-none stroke-gray-400" d="m68.4 84.9-13.9 5c-1 0.6-1.8 1.4-2.5 2.3-1 1.5-1.6 3.2-1.6 5.1v20.7"/>
                            </g>
                            <line class="icon-18-3 fill-none stroke-gray-400" x1="97.3" x2="85.9" y1="100.2" y2="111.6" opacity=".5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-18-3 fill-none stroke-gray-400" x1="96" x2="92.2" y1="108.5" y2="112.3" opacity=".5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <path class="icon-18-0 fill-none stroke-gray-400" d="m99.9 56.8c-1.2 3.5-4.8 6.7-7 8.4-0.3 0.2-2.4-2.5-2.4-2.5s-1.3 4.8-2 5c-6.4 2.4-14.3-0.6-20.1-11" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                    <path class="icon-18-4 fill-gray-400" d="m87.2 7.5h-38c-2.4 0-4.3 1.9-4.3 4.3v14.3c0 2.4 1.9 4.3 4.3 4.3h3.6v7l11.1-7h23.3c2.4 0 4.3-1.9 4.3-4.3v-14.3c0-2.4-1.9-4.3-4.3-4.3z" opacity=".5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                    <path class="icon-18-5 fill-primary" d="m81.4 2h-38c-2.4 0-4.3 1.9-4.3 4.3v14.3c0 2.4 1.9 4.3 4.3 4.3h3.6v7l11.1-7h23.3c2.4 0 4.3-1.9 4.3-4.3v-14.3c0-2.4-1.9-4.3-4.3-4.3z"/>
                                    <g stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3">
                                        <line class="icon-18-1 fill-none stroke-white" x1="73.9" x2="50.9" y1="10.3" y2="10.3"/>
                                        <line class="icon-18-1 fill-none stroke-white" x1="56.2" x2="50.9" y1="16.5" y2="16.5"/>
                                    </g>
                        </svg>
                        <!-- <img class="card-img" src="./img/features/Share Screen.svg" alt="Card image cap"> -->
                        <div class="card-body">
                            <h6>Remote Exams with Webcam Video & Screen Recording</h6>
                            <p class="card-text">Webcam video can be recorded during the exam.</p>
                        </div>
                    </div>
                    <div class="card col-md-4 col-lg-3 col-sm-5 m-2 hvr-glow" data-aos="fade-up" data-aos-duration="2000">
                        <svg class="card-img" enable-background="new 0 0 120 120" viewBox="0 0 120 120" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <style type="text/css">
                                .icon-9-0{fill:none;stroke:#FFFFFF;}
                                .icon-9-1{fill:#BDC5D1;}
                                .icon-9-2{fill:#377DFF;}
                                .icon-9-3{fill:none;stroke:#BDC5D1;}
                                .icon-9-5{fill:none;stroke:#377DFF;}
                            </style>
                            <path class="icon-9-1 fill-gray-400" d="m35.7 120h-31.7c-2.2 0-4-1.8-4-4v-61.9c0-2.2 1.8-4 4-4h31.7c2.2 0 4 1.8 4 4v61.9c0 2.2-1.8 4-4 4z" opacity=".5"/>
                            <path class="icon-9-2 fill-primary" d="m48.4 116.4h-31.7c-2.2 0-4-1.8-4-4v-63.9c0-2.2 1.8-4 4-4h31.7c2.2 0 4 1.8 4 4v63.9c0 2.2-1.8 4-4 4z"/>
                            <path class="icon-9-3 fill-none stroke-gray-400" d="m80.3 106.9c0 1.4-1.1 2.6-2.6 2.6-1.4 0-2.6-1.1-2.6-2.6 0-1.4 1.1-2.6 2.6-2.6s2.6 1.2 2.6 2.6z" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <circle class="icon-9-0 fill-none stroke-white" cx="33.2" cy="109.9" r="2.6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-9-0 fill-none stroke-white" x1="17.3" x2="47.6" y1="52.1" y2="52.1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-9-0 fill-none stroke-white" x1="47.6" x2="17.3" y1="101.7" y2="101.7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <path class="icon-9-3 fill-none stroke-gray-400" d="M36.9,35.3V5.6c0-2.1,1.7-3.8,3.8-3.8h73.9c2.1,0,3.8,1.7,3.8,3.8v104.9c0,2.1-1.7,3.8-3.8,3.8H61.3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-9-5 fill-none stroke-primary" x1="94" x2="61.5" y1="28.8" y2="71.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-9-5 fill-none stroke-primary" x1="71.6" x2="82.1" y1="68.8" y2="55.1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-9-5 fill-none stroke-primary" x1="85.4" x2="90.2" y1="50.8" y2="44.7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-9-0 fill-none stroke-white" x1="43.1" x2="20.8" y1="62.3" y2="91.5" opacity=".5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-9-0 fill-none stroke-white" x1="27.7" x2="34.9" y1="89.7" y2="80.3" opacity=".5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-9-0 fill-none stroke-white" x1="37.2" x2="40.5" y1="77.3" y2="73.2" opacity=".5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-9-0 fill-none stroke-white" x1="72.5" x2="82.7" y1="6.8" y2="6.8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <polyline class="icon-9-3 fill-none stroke-gray-400" points="45.6 34.8 45.6 11.7 109.9 11.7 109.9 66.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <polyline class="icon-9-3 fill-none stroke-gray-400" points="109.9 81.7 109.9 96.9 59.3 96.9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                        </svg>
                        <!-- <img class="card-img" src="./img/features/Tablet&phone.svg" alt="Card image cap"> -->
                        <div class="card-body">
                            <h6>Safe Exam Browser that Locks Down the Screen</h6>
                            <p class="card-text">Enforce full screen to prevent participants from opening new windows, tabs, apps, etc.</p>
                        </div>
                    </div>
                    <div class="card col-md-4 col-lg-3 col-sm-5 m-2 hvr-glow"  data-aos="flip-right" data-aos-duration="2000">
                        <svg class="card-img" enable-background="new 0 0 120 120" viewBox="0 0 120 120" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <style type="text/css">
                                .icon-40-0{fill:#BDC5D1;}
                                .icon-40-1{fill:#FFFFFF;stroke:#BDC5D1;}
                                .icon-40-2{fill:none;stroke:#BDC5D1;}
                                .icon-40-3{fill:none;stroke:#377DFF;}
                                .icon-40-4{fill:#377DFF;}
                                .icon-40-5{fill:#FFFFFF;}
                            </style>
                            <path class="icon-40-0 fill-gray-400" d="m97 28.8h17.5c3.1 0 5.6 2.5 5.6 5.6v67.5c0 3.1-2.5 5.6-5.6 5.6h-97.4c-3.1 0-5.6-2.5-5.6-5.6v-67.6c0-3.1 2.5-5.6 5.6-5.6h17.5" opacity=".4"/>
                            <path class="icon-40-1 fill-white stroke-gray-400" d="M86.7,21.3h17.5c3.1,0,5.6,2.5,5.6,5.6v67.5c0,3.1-2.5,5.6-5.6,5.6H6.8c-3.1,0-5.6-2.5-5.6-5.6V26.9  c0-3.1,2.5-5.6,5.6-5.6h17.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-40-2 fill-none stroke-gray-400" x1="55.6" x2="78.4" y1="35.7" y2="35.7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-40-3 fill-none stroke-primary" x1="55.6" x2="78.4" y1="29.4" y2="29.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <polygon class="icon-40-2 fill-none stroke-gray-400" points="73.6 18 86.7 18 73.6 4.8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <polyline class="icon-40-2 fill-none stroke-gray-400" points="24.3 73.3 24.3 4.8 73.6 4.8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-40-2 fill-none stroke-gray-400" x1="86.7" x2="86.7" y1="18" y2="73.3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <path class="icon-40-0 fill-gray-400" d="m43.5 28.8 1.9 3.8c0.1 0.1 0.2 0.2 0.3 0.2l4.1 0.6c0.4 0.1 0.5 0.5 0.2 0.8l-3 2.9v0.4l0.7 4.1c0.1 0.4-0.3 0.6-0.7 0.5l-3.7-2c-0.1-0.1-0.3-0.1-0.4 0l-3.7 2c-0.3 0.2-0.7-0.1-0.7-0.5l0.7-4.1c0-0.1 0-0.3-0.1-0.4l-3-2.9c-0.3-0.3-0.1-0.7 0.2-0.8l4.1-0.6c0.1 0 0.3-0.1 0.3-0.2l1.9-3.8c0.3-0.3 0.8-0.3 0.9 0z" opacity=".5"/>
                            <path class="icon-40-4 fill-primary" d="m40.2 25.5 1.9 3.8c0.1 0.1 0.2 0.2 0.3 0.2l4.1 0.6c0.4 0.1 0.5 0.5 0.2 0.8l-3 2.9c-0.1 0.1-0.2 0.3-0.1 0.4l0.7 4.1c0.1 0.4-0.3 0.6-0.7 0.5l-3.7-2c-0.1-0.1-0.3-0.1-0.4 0l-3.7 2c-0.3 0.2-0.7-0.1-0.7-0.5l0.7-4.1c0-0.1 0-0.3-0.1-0.4l-3-2.9c-0.3-0.3-0.1-0.7 0.2-0.8l4.1-0.6c0.1 0 0.3-0.1 0.3-0.2l1.9-3.8c0.4-0.3 0.9-0.3 1 0z"/>
                            <path class="icon-40-5 fill-white" d="m39.9 30.2 0.5 1.1 0.1 0.1 1.2 0.2c0.1 0 0.1 0.1 0.1 0.2l-0.8 0.8v0.1l0.2 1.2c0 0.1-0.1 0.2-0.2 0.1l-1.1-0.6h-0.1l-1.1 0.6c-0.1 0-0.2 0-0.2-0.1l0.2-1.2v-0.1l-0.9-0.8c-0.1-0.1 0-0.2 0.1-0.2l1.2-0.2s0.1 0 0.1-0.1l0.5-1.1c0.1-0.1 0.2-0.1 0.2 0z"/>
                            <line class="icon-40-3 fill-none stroke-primary" x1="55.6" x2="78.4" y1="51" y2="51" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-40-2 fill-none stroke-gray-400" x1="55.6" x2="78.4" y1="57.4" y2="57.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <path class="icon-40-0 fill-gray-400" d="m43.5 50.5 1.9 3.8c0.1 0.1 0.2 0.2 0.3 0.2l4.1 0.6c0.4 0.1 0.5 0.5 0.2 0.8l-3 2.9v0.4l0.7 4.1c0.1 0.4-0.3 0.6-0.7 0.5l-3.7-2c-0.1-0.1-0.3-0.1-0.4 0l-3.7 2c-0.3 0.2-0.7-0.1-0.7-0.5l0.7-4.1c0-0.1 0-0.3-0.1-0.4l-3-2.9c-0.3-0.3-0.1-0.7 0.2-0.8l4.1-0.6c0.1 0 0.3-0.1 0.3-0.2l1.9-3.8c0.3-0.4 0.8-0.4 0.9 0z" opacity=".5"/>
                            <path class="icon-40-4 fill-primary" d="m40.2 47.2 1.9 3.8c0.1 0.1 0.2 0.2 0.3 0.2l4.1 0.6c0.4 0.1 0.5 0.5 0.2 0.8l-3 2.9c-0.1 0.1-0.2 0.3-0.1 0.4l0.7 4.1c0.1 0.4-0.3 0.6-0.7 0.5l-3.7-2c-0.1-0.1-0.3-0.1-0.4 0l-3.7 2c-0.3 0.2-0.7-0.1-0.7-0.5l0.7-4.1c0-0.1 0-0.3-0.1-0.4l-3-2.9c-0.3-0.3-0.1-0.7 0.2-0.8l4.1-0.6c0.1 0 0.3-0.1 0.3-0.2l1.9-3.8c0.4-0.4 0.9-0.4 1 0z"/>
                            <line class="icon-40-2 fill-none stroke-gray-400" x1="95.3" x2="15.7" y1="73.3" y2="73.3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <path class="icon-40-2 fill-none stroke-gray-400" d="m109.8 94.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <path class="icon-40-5 fill-white" d="m39.9 51.8 0.5 1.1 0.1 0.1 1.2 0.2c0.1 0 0.1 0.1 0.1 0.2l-0.8 0.8v0.1l0.2 1.2c0 0.1-0.1 0.2-0.2 0.1l-1.1-0.6h-0.1l-1.1 0.6c-0.1 0-0.2 0-0.2-0.1l0.2-1.2v-0.1l-0.9-0.8c-0.1-0.1 0-0.2 0.1-0.2l1.2-0.2s0.1 0 0.1-0.1l0.5-1.1h0.2z"/>
                            <path class="icon-40-2 fill-none stroke-gray-400" d="m99.2 83" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-40-2 fill-none stroke-gray-400" x1="1.2" x2="109.8" y1="83" y2="83" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <path class="icon-40-3 fill-none stroke-primary" d="m58.5 91.8c0 1.7-1.4 3-3 3-1.7 0-3-1.4-3-3 0-1.7 1.4-3 3-3 1.7-0.1 3 1.3 3 3z" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <path class="icon-40-2 fill-none stroke-gray-400" d="m8.7 83" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="icon-40-3 fill-none stroke-primary" x1="83.5" x2="27.6" y1="115.2" y2="115.2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                            <polygon class="icon-40-4 fill-primary" points="41.9 99.1 38.7 114.3 72.4 114.3 69.1 99.1"/>
                        </svg>
                        <!-- <img class="card-img" src="./img/features/Monitor.svg" alt="Card image cap"> -->
                        <div class="card-body">
                            <h6>Remote Assessment Monitoring and Proctoring</h6>
                            <p class="card-text">Monitor the on-going exams in real-time. Watch proctoring video streams in one screen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section -->

    <!-- Start Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-logo col-md-6 col-lg-3 col-sm-6">
                    <h3 class="footer-text-logo"><span class="online-text">ONLINE</span>exam</h3>
                    <p class="">A website for the Faculty of Computers and Information, Helwan University</p>
                    <a class="svg-link-f" href="http://">
                        <svg enable-background="new 0 0 112.196 112.196" version="1.1" viewBox="0 0 112.2 112.2" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <circle class="facebook-svg" cx="56.098" cy="56.098" r="56.098" fill="#3B5998"/>
                            <path d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34   c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z" fill="#fff"/>
                        </svg>
                    </a>
                    <a class="svg-link-g" href="http://">
                        <svg enable-background="new 0 0 112.196 112.196" version="1.1" viewBox="0 0 112.2 112.2" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <circle class="google-svg" cx="56.098" cy="56.097" r="56.098" fill="#DC4E41"/>
                            <path d="m19.531 58.608c-0.199 9.652 6.449 18.863 15.594 21.867 8.614 2.894 19.205 0.729 24.937-6.648 4.185-5.169 5.136-12.06 4.683-18.498-7.377-0.066-14.754-0.044-22.12-0.033-0.012 2.628 0 5.246 0.011 7.874 4.417 0.122 8.835 0.066 13.252 0.155-1.115 3.821-3.655 7.377-7.51 8.757-7.443 3.28-16.94-1.005-19.282-8.813-2.827-7.477 1.801-16.5 9.442-18.675 4.738-1.667 9.619 0.21 13.673 2.673 2.054-1.922 3.976-3.976 5.864-6.052-4.606-3.854-10.525-6.217-16.61-5.698-11.939 0.142-22.387 11.164-21.934 23.091z" fill="#DC4E41"/>
                            <path d="m79.102 48.668c-0.022 2.198-0.045 4.407-0.056 6.604-2.209 0.022-4.406 0.033-6.604 0.044v6.582c2.198 0.011 4.407 0.022 6.604 0.045 0.022 2.198 0.022 4.395 0.044 6.604 2.187 0 4.385-0.011 6.582 0 0.012-2.209 0.022-4.406 0.045-6.615 2.197-0.011 4.406-0.022 6.604-0.033v-6.582c-2.197-0.011-4.406-0.022-6.604-0.044-0.012-2.198-0.033-4.407-0.045-6.604-2.197-1e-3 -4.384-1e-3 -6.57-1e-3z" fill="#DC4E41"/>
                            <g fill="#fff">
                                <path class="google-path" d="m19.531 58.608c-0.453-11.927 9.994-22.949 21.933-23.092 6.085-0.519 12.005 1.844 16.61 5.698-1.889 2.077-3.811 4.13-5.864 6.052-4.054-2.463-8.935-4.34-13.673-2.673-7.642 2.176-12.27 11.199-9.442 18.675 2.342 7.808 11.839 12.093 19.282 8.813 3.854-1.38 6.395-4.936 7.51-8.757-4.417-0.088-8.835-0.033-13.252-0.155-0.011-2.628-0.022-5.246-0.011-7.874 7.366-0.011 14.743-0.033 22.12 0.033 0.453 6.439-0.497 13.33-4.683 18.498-5.732 7.377-16.322 9.542-24.937 6.648-9.143-3.003-15.792-12.214-15.593-21.866z"/>
                                <path class="google-path" d="m79.102 48.668h6.57c0.012 2.198 0.033 4.407 0.045 6.604 2.197 0.022 4.406 0.033 6.604 0.044v6.582c-2.197 0.011-4.406 0.022-6.604 0.033-0.022 2.209-0.033 4.406-0.045 6.615-2.197-0.011-4.396 0-6.582 0-0.021-2.209-0.021-4.406-0.044-6.604-2.197-0.023-4.406-0.033-6.604-0.045v-6.582c2.198-0.011 4.396-0.022 6.604-0.044 0.011-2.196 0.033-4.405 0.056-6.603z"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="footer-about mb-3 col-md-6 col-lg-3 col-sm-6">
                    <h4>About Us</h4>
                    <a class="footer-par" href="">Our Customer</a>
                    <a class="footer-par" href="">Help & Support</a>
                </div>
                <div class="footer-community mb-3 col-md-6 col-lg-3 col-sm-6">
                    <h4>Community</h4>
                    <a class="footer-par" href="http://safcai.helwan.edu.eg/index.php/ar/login">College site</a>
                    <a class="footer-par" href="">Teachers</a>
                </div>
                <div class="footer-contact mb-3 col-md-6 col-lg-3 col-sm-6">
                    <h4>Contact</h4>
                    <a class="footer-par" href="mailto:ahmedradi743@gmail.com">FCAI-H@gmail.com</a>
                    <p class="">Location: Helwan University</p>
                </div>
                <div class="copy-right col-12">
                    FCAI - H &copy; 2021
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

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
        <script src="../.././javascript/javascript.js"></script>
    <!-- Scripts -->
</body>
</html>