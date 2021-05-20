<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Create the Exam</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, intial-scale=1" />
    <link rel="stylesheet" href="../../css/bootstrap11.css" />
    <link rel="stylesheet" href="../../css/CreateExam English and Arabic.css" />
    <link rel="stylesheet" href="../../css/CreateExam English and Arabic7.css" />
    
    <script src="../../Javascript/html5shiv.min.js"></script>
    <script src="../../Javascript/respond.min.js"></script>
    
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
                        <a class="nav-link" href="{{route('teacher.index')}}">{{__('massages.Home')}}</a>
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
                                <a class="dropdown-item" href="{{route('teacher.studentreq')}}">Student Requests</a>
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
    <script type="text/javascript">

        function EnglshQuestionType() {
            var optionsType = document.getElementById('EnglishSelectType');
            var typeSelected = optionsType.value;
            if (typeSelected == "1") {
                document.getElementById('MCQEnglish').style.display = "block";

                document.getElementById('TrueOrFalseEnglish').style.display = "none";
                document.getElementById('EssayEnglish').style.display = "none";
                document.getElementById('btnEndEng').style.display = "none";

                


            }
            else if (typeSelected == "2") {
                document.getElementById('MCQEnglish').style.display = "none";

                document.getElementById('TrueOrFalseEnglish').style.display = "block";
                document.getElementById('EssayEnglish').style.display = "none";
                document.getElementById('btnEndEng').style.display = "none";
            }
            else if (typeSelected == "3") {
                document.getElementById('MCQEnglish').style.display = "none";

                document.getElementById('TrueOrFalseEnglish').style.display = "none";
                document.getElementById('EssayEnglish').style.display = "block";

                document.getElementById('btnEndEng').style.display = "none";
            }
            else {
                document.getElementById('MCQEnglish').style.display = "none";

                document.getElementById('TrueOrFalseEnglish').style.display = "none";
                document.getElementById('EssayEnglish').style.display = "none";

                document.getElementById('btnEndEng').style.display = "block";
            }


        }


        function addrow() {
            var itm = document.getElementById("chk");

            var cln = itm.cloneNode(true);


            document.getElementById("chkeng").append(cln);


        }
        function removerow() {
            var prnt = document.getElementById("chkeng");

            if (prnt.getElementsByTagName('div').length == 1) {
                alert('Cannot empty questions list');
            }
            else {

                var itm = document.getElementById("rmv").parentElement;
                //console.log(itm);


                document.getElementById("chkeng").removeChild(itm);
            }

        }
    </script>
        <div class="row" id="EnglishRow" style="display:block;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="h22">
                    <p class="text-primary">Create the Exam</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="s2">
                    <label>Choose type of the question</label>
                    <select id="EnglishSelectType" onchange="EnglshQuestionType()">
                        <option value="4">Choose Type</option>
                        <option value="1">Mcq question</option>
                        <option value="2">True and False question</option>
                        <option value="3">Essay question</option>
                    </select>
                </div>

                <div class="endeng" id="btnEndEng">
                    <button id="btn1" class="btn btn-primary" type="submit">End</button>
                </div>
            </div>
            <div class="QuestionRowEng" id="TrueOrFalseEnglish" style="display:none;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="t1Eng">
                        <textarea id="txt3" name="question" cols="55" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="a1Eng">
                        <div class="form-check">
                            <input class="form-check-input"
                                   type="radio"
                                   name="flexRadioDefault"
                                   id="flexRadioDefault13" />
                            <label for="1">True</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input"
                                   type="radio"
                                   name="flexRadioDefault"
                                   id="flexRadioDefault14" />
                            <label for="2">False</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="s1Eng">
                        <label for="minutes">Enter the mark for the question</label>
                        <input id="lbl1" type="number" name="mark" />
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="b1Eng">
                        <button id="btn2" class="btn btn-primary" type="submit">Add</button>
                    </div>
                </div>
            </div>
            <div class="QuestionRowEng" id="EssayEnglish" style="display:none;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="t1Eng">
                        <textarea id="txt4" name="question" cols="55" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="t2Eng">
                        <textarea id="txt5" name="question" cols="55" rows="6"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="s1Eng">
                        <label for="minutes">Enter the mark for the question</label>
                        <input id="lbl2" type="number" name="mark" />
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="b1Eng">
                        <button id="btn3" class="btn btn-primary" type="submit">Add</button>
                    </div>
                </div>
            </div>
            <div class="QuestionRowEng" id="MCQEnglish" style="display:none">
                <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                <div class="t1Eng">
                    <textarea id="txt6" name="question" cols="55" rows="2"></textarea>
                </div>
                <!-- </div> -->
                <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                <div id="chkeng" class="a1Eng">
                    <div id="chk" class="form-check">
                        <input class="form-check-input"
                               type="radio"
                               name="flexRadioDefault"
                               id="flexRadioDefault15" />
                        <textarea id="txt7" name="question" cols="50" rows="1"></textarea>
                        <input type="button" title="Add Option" value="+" onclick="addrow()" />
                        <input type="button" title="Remove Option" id="rmv" value="-" onclick="removerow()" />
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="s1Eng">
                        <label for="minutes">Enter the mark for the question</label>
                        <input id="lbl3" type="number" name="mark" />
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="b1Eng">
                        <button id="btn4" class="btn btn-primary" type="submit">Add</button>
                    </div>
                </div>
            </div>
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