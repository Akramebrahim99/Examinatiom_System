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
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/create_question.css">
    <title>{{__('massages.Exam')}}</title>
</head>
<body>
    <!-- Start Student Courses Section -->
    <div class="container">
    <section class="add-courses">
            <div class="row content" id="page-body">
                <div class="container">
                <h4 id="demo"></h4>
                    <div  class="col-12">
                        <h4 style="text-align: center;color: red">{{$course->name}} {{__('massages.Exam')}}</h4>
                    </div>
                </div>
            </div>
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
                                        @if($question->answer1 != Null || $question->answer2 != Null || $question->answer3 != Null || $question->answer4 != Null)
                                            @if($question->answer1 != Null)
                                            <label class="options">{{$question->answer1}} <input type="radio" name="radio{{$count}}" value="{{$question->answer1}}"> <span class="checkmark"></span> </label>
                                            @endif
                                            @if($question->answer2 != Null)
                                            <label class="options">{{$question->answer2}} <input type="radio" name="radio{{$count}}" value="{{$question->answer2}}"> <span class="checkmark"></span> </label>
                                            @endif
                                            @if($question->answer3 != Null)
                                            <label class="options">{{$question->answer3}} <input type="radio" name="radio{{$count}}" value="{{$question->answer3}}"> <span class="checkmark"></span> </label>
                                            @endif
                                            @if($question->answer4 != Null)
                                            <label class="options">{{$question->answer4}} <input type="radio" name="radio{{$count}}" value="{{$question->answer4}}"> <span class="checkmark"></span> </label>
                                            @endif
                                        @else
                                        <textarea  name="radio{{$count}}" rows="5" cols="50">
                                        </textarea>
                                        @endif
                                        <br>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $array1[$count]= $question->id;
                        $count++; 
                        ?>
                    @endforeach
                    <?php
                    if($array1)
                    {
                        session(['questionsid'=>$array1]);
                    }
                    ?>
                    <br>
                    <div style="text-align: center;"> <button style="font-size: 20px" type="submit" class="btn btn-success">{{__('massages.Submit')}}</button></div>
                    <br>    
                    </form>
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
        document.getElementById("demo").innerHTML = /*days + " Day " +*/ hours + " Hour "
        + minutes + " Minutes " + seconds + " Second ";
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
        }, 1000);
    </script>
</body>
</html>