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
    <title>Exam</title>
</head>
<body>
    <!-- Start Student Courses Section -->
    <div class="container">
    <section class="add-courses">

            <div class="row content" id="page-body">
                <div class="container">
                    <div  class="col-12">
                        <h4 style="text-align: center;color: red">{{$course->name}} Exam</h4>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{route('student.correectexam')}}"> 
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
                    <div style="text-align: center;"> <button style="font-size: 20px" type="submit" class="btn btn-success">Submit</button></div>
                    <br>    
                    </form>
                @endif
                

    </section>
</div>
    <!-- End Student Courses Section -->
</body>
</html>