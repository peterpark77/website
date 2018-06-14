<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href="{{ asset('css/tooltip.css') }}" rel="stylesheet" type="text/css" >


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>

        body {margin:0;}

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;

            position: fixed;
            top: 0;
            width: 100%;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active):not(.deactive) {
            background-color: #111;
        }

        .active {
            background-color: #111;
        }
        .deactive{
            background-color: #4CAF50;
        }
        .bg-1 {
            background-color: #1abc9c; /* Green */
            color: #ffffff;
        }
        .bg-2 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }
        .bg-3 {
            background-color: #ffffff; /* White */
            color: #555555;
        }
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
        .container-fluid {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .container-top {
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .slide{
            float: none;
        }
        .h1, .h2, .h3, h1, h2, h3 {
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .montreal {
            z-index:-3;
        }
        .img-circle{
            box-shadow: 10px 10px 5px #000;
            border-radius: 30%;
        }

        .container-picture{
            position : relative;
        }
        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%)
        }

        .container-picture:hover .image {
            opacity: 0.3;
        }

        .container-picture:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }
    </style>
</head>
<body>

<div class="container-top">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="slide" data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li class="slide" data-target="#myCarousel" data-slide-to="1"></li>
            <li class="slide" data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active" style="height: 390px; ">
                <div class="container-top bg-1 text-center">
                    <h3 class="margin">HI! I am Peter Park</h3>
                    <img src="bear.jpg" class="img-responsive img-circle margin" style="display:inline" alt="bear" width="200" height="200">
                    <h3>I am a mere undergraduate student </h3>
                </div>
            </div>

            <div class="item" style="background-image: url(/montreal.jpg); height: 390px; width: 100%">
                <div class="container text-center" style="padding-top: 80px">
                    <h3 class="margin">Currently in my final year at </h3>
                    <a href="https://www.mcgill.ca">
                        <img src="mcgill.jpg"  width="400 px" height="100 px">
                    </a>
                    <h3>studying statistics and computer science </h3>
                </div>
            </div>
            <div class="item" style="background-image: url(/adventure.jpg); height: 390px; ">
                <div class="container text-center" style="padding-top: 80px">
                    <h3>I am passionate</h3>
                    <p> about learning new things</p>
                    <h1>Look around to know more</h1>
                        <h1>about me!</h1>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>







<div class="container-fluid bg-3 text-center">
    <h3>Here are some of my interests</h3><br>
    <div class="row">
        <div class="col-sm-3">
            <p>Machine Learning</p>
            <div class="container-picture">
                <img src="machinelearning.jpeg" class="image" style="width:100%" alt="Image">
                <a href="#">
                    <div class="middle">
                        <div class="text"> More info</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <p>Data Science</p>
            <div class="container-picture">
                <img src="datascience.jpeg" class="image" style="width:100%" alt="Image">
                <a href="#">
                    <div class="middle">
                        <div class="text"> More info</div>
                    </div>
                </a>
            </div>        </div>
        <div class="col-sm-3">
            <p>Computer Security</p>
            <div class="container-picture">
                <img src="computersecurity.jpg" class="image" style="width:100%" alt="Image">
                <a href="#">
                    <div class="middle">
                        <div class="text"> More info</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <p>Physics</p>
            <div class="container-picture">
                <img src="physics.jpeg" class="image" style="width:100%" alt="Image">
                <a href="#">
                    <div class="middle">
                        <div class="text"> More info</div>
                    </div>
                </a>
            </div>        </div>
    </div>
</div>

<div class="container-fluid bg-3 text-center">
    <h3>Other things I like </h3>

    <div class="row">
        <div class="col-sm-3">
            <p>Travelling</p>
            <img src="travel.jpg" class="img-responsive" style="width:100%;  height:150px" alt="Image">
        </div>
        <div class="col-sm-3">
            <p>Mathematics</p>
            <img src="mathematics.jpeg" class="img-responsive" style="width:100% ; height:150px" alt="Image">
        </div>
        <div class="col-sm-3">
            <p>Weight lifting</p>
            <img src="weight.jpg" class="img-responsive" style="width:100%; height:150px" alt="Image">
        </div>
        <div class="col-sm-3">
            <p>Music</p>
            <img src="music.jpg" class="img-responsive" style="width:100%;  height:150px" alt="Image">
        </div>
    </div>
</div>

<ul>
    <li><a class="deactive" href="..">HOME</a></li>
    <li><a class="active" href="/about">About Me</a></li>
    <li><a href="/cv">CV</a></li>
    <li><a href="https://github.com/peterpark77">Github</a></li>
    <li><a href="/projects">Projects</a></li>
    <li><a href="https://www.hackerrank.com/peterpark1995">Hackerrank</a></li>
</ul>



<footer class="container-fluid bg-4 text-center">
    <p>© 2017 Peter Park. Created with <a href="https://laravel.com"> Laravel </a> PHP Framework for Web Artisans</p>
</footer>

</body>



<script>



</script>


</html>