<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <style>

        body {margin:0;}
        html, body {
            background-color: #ffffff;
            color: black;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        a {
            font-size: 2em;
            text-decoration: none;
            display: inline-block;
            position: relative;
            font-family: 'Dosis', sans-serif;
        }
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

    </style>
</head>
<body>

<ul>
    <li><a class="deactive" href="..">HOME</a></li>
    <li><a href="/about">About Me</a></li>
    <li><a href="/cv" class="active">CV</a></li>
    <li><a href="https://github.com/peterpark77">Github</a></li>
    <li><a href="/interests">Interests</a></li>
    <li><a href="/projects">Projects</a></li>
    <li><a href="https://www.hackerrank.com/peterpark1995">Hackerrank</a></li>
</ul>

</body>
</html>