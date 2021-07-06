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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- fonts Awesome -->
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="../../../css/create_question.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/media.css">
    <title>Exam</title>
</head>

<body>
    <!-- Start Student Courses Section -->
    <div class="container">
        <section class="exam-body">
            <div class="row content" id="page-body">
                <div class="container">
                    <h5 id="demo"></h5>
                    <div class="col-12">
                        <h3 style="text-align: center;color: red" class="mt-sm-4">{{$course->name}} Exam</h3>
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
                    <div class="teacher-courses-info text-md-center col-12">
                        <div class="container question-body mt-sm-5 my-1">
                            <div class="question ml-sm-5 pl-sm-5 pt-2">
                                <div class="py-2 h5">
                                    <p>Q. {{$question->description}} ({{$question->degree}} Mark)</p>
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
                                        <textarea placeholder="Enter Your Answer" rows="5" cols="50" name="radio{{$count}}" rows="5" cols="50"></textarea>
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
                    <div style="text-align: center;">
                        <button class="submit-question-button" type="submit">Submit</button>
                    </div>
                </div>
            </form>
            @endif
            @else
            <form class="form-question" method="POST" action="{{route('student.correectexam')}}">
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
                            <div class="teacher-courses-info text-md-center">
                                <div class="question-body mt-sm-5 my-1">
                                    <div class="question ml-sm-5 pl-sm-5 pt-2">
                                        <div class="py-3 h5">
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
                                                <textarea class="textarea-answer" name="radio{{$count}}"></textarea>
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
                <div style="text-align: center;">
                    <button class="submit-question-button" type="submit">Submit</button>
                </div>
            </form>
            @endif
            @endif
        </section>
    </div>
    <!-- End Student Courses Section -->
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