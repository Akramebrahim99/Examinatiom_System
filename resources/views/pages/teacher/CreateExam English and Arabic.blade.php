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
    <link rel="stylesheet" href="../../css/bootstrap.css" />
    <link rel="stylesheet" href="../../../css/style.css">

    <title>{{__('massages.Create Exam')}}</title>
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

    <!-- Model Form Add Questions -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"><!--"modal-dialog" -> make model take small size "modal-dialog-centered" -> Make model center in the page-->
            <div class="modal-content" id="box-body"><!--contain the model contact-->
                <div class="modal-header"><!--contain only X button to close the model-->
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('massages.Add New MCQ Question')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span><!--the 'X' shape-->
                    </button>
                </div>
                <div class="modal-body"><!--contain only the input fields-->
                <form method="POST" action="{{route('teacher.addMcqQuestion',[$course->id])}}" class="add-teacher-model">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>{{__('massages.Enter Question')}}</label>
                                    <input type="text" required="required" name="question" placeholder="{{__('massages.Enter Question')}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>{{__('massages.Enter Option 1')}}</label>
                                    <input required="required" type="text" name="option1" placeholder="{{__('massages.Enter Option 1')}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>{{__('massages.Enter Option 2')}}</label>
                                    <input required="required" type="text" name="option2" placeholder="{{__('massages.Enter Option 2')}}" class="form-control">
                                </div>
                            </div>

                            <div id="options" class="col-sm-12"></div>
                                <div class="container-button-add-option col-12">
                                    <input class="add-option-button" value="{{__('massages.Add Option')}}" type="button" onclick="addoption()"/>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{__('massages.Enter Right Answer')}}</label>
                                        <select class="correct-answer-option" id="answers" name ="RightAns">
                                            <option name="option1" value = "option1">Option 1</option>
                                            <option name="option2" value = "option2">Option 2</option>
                                        </select>
                                    </div>
                                </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{__('massages.Enter Question Degree')}}</label>
                                    <input type="number" min="0" required="required" name="degree" placeholder="{{__('massages.Enter Question Degree')}}" class="form-control">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="add-question-button">{{__('massages.Add')}}</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Model Form Add Mcq Questions -->

    <!-- Model Form Add True/False Questions -->
    <div class="modal fade" id="TFmodel" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"><!--"modal-dialog" -> make model take small size "modal-dialog-centered" -> Make model center in the page-->
            <div class="modal-content" id="box-body"><!--contain the model contact-->
                <div class="modal-header"><!--contain only X button to close the model-->
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('massages.Add New True/False Question')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span><!--the 'X' shape-->
                    </button>
                </div>
                <div class="modal-body"><!--contain only the input fields-->
                <form method="POST" action="{{route('teacher.addTFQuestion',[$course->id])}}" class="add-teacher-model">
                        @csrf
                        <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>{{__('massages.Enter Question')}}</label>
                                        <input type="text" required="required" name="question" placeholder="{{__('massages.Enter Question')}}" class="form-control">
                                    </div>
                                </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{__('massages.Enter Right Answer')}}</label>
                                    <select class="correct-answer-option"  name="RightAns">
                                        <option name="option1" value = "option1">{{__('massages.True')}}</option>
                                        <option name="option2" value = "option2">{{__('massages.False')}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{__('massages.Enter Question Degree')}}</label>
                                    <input type="number" min="0" required="required" name="degree" placeholder="{{__('massages.Enter Question Degree')}}" class="form-control">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="add-question-button">{{__('massages.Add')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Model Form Add True/False Questions -->

    <!-- Model Form Add Essay Questions -->
    <div class="modal fade" id="Essaymodel" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"><!--"modal-dialog" -> make model take small size "modal-dialog-centered" -> Make model center in the page-->
            <div class="modal-content" id="box-body"><!--contain the model contact-->
                <div class="modal-header"><!--contain only X button to close the model-->
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('massages.Add New Essay Question')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span><!--the 'X' shape-->
                    </button>
                </div>
                <div class="modal-body"><!--contain only the input fields-->
                    <form method="POST" action="{{route('teacher.addEssayQuestion',[$course->id])}}" class="add-teacher-model">
                            @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>{{__('massages.Enter Question')}}</label>
                                    <input type="text" required="required" name="question" placeholder="{{__('massages.Enter Question')}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{__('massages.Enter Question Degree')}}</label>
                                    <input type="number" min="0" required="required" name="degree" placeholder="{{__('massages.Enter Question Degree')}}" class="form-control">
                                </div>
                            </div>
                                <br />
                            <div class="modal-footer">
                                <button type="submit" class="add-question-button">{{__('massages.Add')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Model Form Add Questions -->
      
    <!-- Start Student Courses Section -->

    <section class="add-courses questions">

            <div class="row content" id="page-body">
                <div class="container">
                    <div  class="col-12">
                        <h4 class="page-header">{{$course->name}}</h4>
                        <button class="exam-type-button"  data-toggle="modal" data-target="#staticBackdrop">{{__('massages.Add New MCQ Question')}}</button>
                        <button class="exam-type-button"  data-toggle="modal" data-target="#TFmodel">{{__('massages.Add New True/False Question')}}</button>
                        <button class="exam-type-button"  data-toggle="modal" data-target="#Essaymodel">{{__('massages.Add New Essay Question')}}</button>
                    </div>
                </div>
            </div>
            @if(isset($questions) &&   count($questions) > 0)
                @foreach($questions as $question)
                    <div class="teacher-courses-info text-md-center col-12">
                        <div class="container question-body mt-sm-5 my-1">
                            <div class="question ml-sm-5 pl-sm-5 pt-2">
                                <div class="py-2 h5">
                                    <b>Q. {{$question->description}}</b>
                                </div>
                                <div class="ml-md-10 ml-sm-10 pl-md-12 pt-sm-0 pt-3" id="options">
                                    <?php
                                        $answers  = App\Models\Answer::where('question_id',$question->id)->get();
                                    ?>
                                    @if(isset($answers) &&   count($answers) > 0)
                                        @foreach($answers as $answer)
                                        @if($answer->answer == 'True')
                                            <label class="options">{{__('massages.True')}}  </label>
                                        @elseif($answer->answer == 'False')
                                            <label class="options">{{__('massages.False')}}  </label>
                                        @else
                                        <label class="options">{{$answer->answer}}  </label>
                                        @endif
                                        @endforeach
                                    @endif
                                    @if($question->correct_answer == 'True')
                                            <label class="options question-info">{{__('massages.Correct Answer Is:')}} <span>{{__('massages.True')}}</span> </label>
                                        @elseif($question->correct_answer == 'False')
                                            <label class="options question-info">{{__('massages.Correct Answer Is:')}} <span>{{__('massages.False')}}</span> </label>
                                        @else
                                        <label class="options question-info">{{__('massages.Correct Answer Is:')}} <span>{{$question->correct_answer}}</span> </label>
                                        @endif
                                    <label class="options question-info">{{__('massages.Degree Is:')}} <span>{{$question->degree}}</span> </label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">    
                                <div id="prev"> <a href="{{route('teacher.editquestion',[$question->id])}}"><button class="edit-question-button">{{__('massages.Edit')}}</button></a> </div>
                                <div class="ml-auto mr-sm"> <a href="{{route('teacher.deletequestion',[$question->id])}}"><button class="delete-question-button">{{__('massages.Delete')}}</button></a> </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

    </section>




    <!-- End Student Courses Section -->

    <!-- Scripts -->
        <!-- Bootstrap -->
        <script src="../../../JQuery/JQuery.js"></script>
        <script src="../../../javascript/bootstrap.js"></script>
        <!-- Bootstrap -->
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- AOS -->

        <script src="../../Javascript/html5shiv.min.js"></script>
        <script src="../../Javascript/respond.min.js"></script>

        <script src="../../../JQuery/jq.js"></script>
        <script src="../../../javascript/javascript.js" defer></script>
        <script>
            var count = 3;
            function setAttributes(el, attrs) {
                for(var key in attrs) {
                    el.setAttribute(key, attrs[key]);
                }
            }
            function addoption()
            {
                var para = document.createElement("div");
                para.setAttribute("class", "form-group");
                var child1 = document.createElement("label");
                var node = document.createTextNode("{{__('massages.Enter Option')}} " + count);
                child1.appendChild(node);
                var child2 = document.createElement("input");
                setAttributes(child2, {"type":"text","name":"option"+count,"placeholder":"{{__('massages.Enter Option')}} "+count,"class":"form-control","required":"required"});
                para.appendChild(child1);
                para.appendChild(child2);
                var element = document.getElementById("options");
                element.appendChild(para);

                var child3 = document.createElement("option");
                var node2 = document.createTextNode("Option " + count);
                child3.appendChild(node2);
                setAttributes(child3,{"name":"option"+count,"value":"option"+count})
                var element2 = document.getElementById("answers");
                element2.appendChild(child3);
                count++;
            }
        </script>


    <!-- Scripts -->
</body>
</html>
