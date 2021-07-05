<!DOCTYPE html>
<html lang="en">
<style>
    .mySlides {
        display: none
    }
<<<<<<< HEAD
=======

>>>>>>> a02ac105e22621b9dc9a2589777d87ae39cb701d
    /* Slideshow container */
    .slideshow-container {
        background-color: #ddd;
        max-width: 1000px;
        position: relative;
        margin: auto;
    }
    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: black;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }
    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }
    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }
    /* Number text (1/3 etc) */
    .numbertext {
        color: black;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .prev,
        .next {
            font-size: 11px
        }
    }
</style>

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
    <title>Exam</title>
</head>

<body>
    <!-- Start Student Courses Section -->
    <div class="container">
        <section class="add-courses">
            <div class="row content" id="page-body">
                <div class="container">
                    <h4 id="demo"></h4>
                    <div class="col-12">
                        <h3 style="text-align: center;color: red">{{$course->name}} Exam</h3>
                    </div>
                </div>
            </div>
            @if($course->one_page)
            <form method="POST" action="{{route('student.correectexam')}}">
                <div data-countdown="2021/01/01"></div>
                @csrf
                <?php
                $array1 = [];
                ?>
                @if(isset($questions) && count($questions) > 0)
                @foreach($questions as $question)
                <div class="teacher-courses-info text-md-center col-20" style="background-color: #ddd;border-radius: 10px;font-family: 'Montserrat', sans-serif;">
                    <div class="container mt-sm-5 my-1">
                        <div class="question ml-sm-5 pl-sm-5 pt-2">
                            <div class="py-2 h5">
                                <b>Q. {{$question->description}} ({{$question->degree}} Mark)</b>
                            </div>
                            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                                <?php
                                $answers = iterator_to_array($question->answers);
                                shuffle($answers);
                                ?>
                                @if(isset($answers) && count($answers) > 0)
                                @foreach($answers as $answer)
                                <label class="options">{{$answer->answer}} <input type="radio" name="radio{{$count}}" value="{{$answer->answer}}"> <span class="checkmark"></span> </label>
                                @endforeach
                                @else
                                <textarea name="radio{{$count}}" rows="5" cols="50">
                                        </textarea>
                                @endif
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $array1[$count] = $question->id;
                $count++;
                ?>
                @endforeach
                <?php
                if ($array1) {
                    session(['questionsid' => $array1]);
                }
                ?>
                <br>
                <div style="text-align: center;"> <button style="font-size: 20px" type="submit" class="btn btn-success">Submit</button></div>
                <br>
            </form>
            @endif
            @else
            <form method="POST" action="{{route('student.correectexam')}}">
                <div data-countdown="2021/01/01"></div>
                @csrf
                <?php
                $array1 = [];
                ?>
                <div class="slideshow-container">
                    @if(isset($questions) && count($questions) > 0)
                    @foreach($questions as $question)
                    <div class="mySlides">
                        <div class="numbertext">{{$count+1}} / {{count($questions)}}</div>
                        <div style="width: 100%;" class="teacher-courses-info text-md-center col-20" style="background-color: #ddd;border-radius: 10px;font-family: 'Montserrat', sans-serif;">
                            <div class="container mt-sm-5 my-1">
                                <div class="question ml-sm-5 pl-sm-5 pt-2">
                                    <div class="py-2 h5">
                                        <b>Q. {{$question->description}} ({{$question->degree}} Mark)</b>
                                    </div>
                                    <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                                        <?php
                                        $answers = iterator_to_array($question->answers);
                                        shuffle($answers);
                                        ?>
                                        @if(isset($answers) && count($answers) > 0)
                                        @foreach($answers as $answer)
                                        <label class="options">{{$answer->answer}} <input type="radio" name="radio{{$count}}" value="{{$answer->answer}}"> <span class="checkmark"></span> </label>
                                        @endforeach
                                        @else
                                        <textarea name="radio{{$count}}" rows="5" cols="50">
                            </textarea>
                                        @endif
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $array1[$count] = $question->id;
                        $count++;
                        ?>
                    </div>
                    @endforeach
                    @if($course->previous)
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    @endif
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <br>
    </div>
    <?php
    if ($array1) {
        session(['questionsid' => $array1]);
    }
    ?>
    <br>
    <div style="text-align: center;"> <button style="font-size: 20px" type="submit" class="btn btn-success">Submit</button></div>
    <br>
    </form>
    @endif
    @endif
    <!-- End Student Courses Section -->
    </section>
    <script type="text/javascript">
        // Set the date we're counting down to
        var countDownDate = new Date("{{(Carbon\Carbon::parse($course->date_of_exam))->addHours($course->duration)}}").getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = /*days + " Day " +*/ hours + " Hour " +
                minutes + " Minutes " + seconds + " Second ";
            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {
                slideIndex = n - 1
            }
            if (n < 1) {
                slideIndex = n + 1
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
    </script>
</body>

</html>