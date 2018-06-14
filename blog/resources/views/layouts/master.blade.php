<!DOCTYPE html>
<html>
<head>
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
            background-color: #333;
        }
        .deactive{
            background-color: #333;
        }

    </style>
</head>
<body>

<ul>
    <li><a class="deactive" href="#home">HOME</a></li>
    <li><a href="#about me">About Me</a></li>
    <li><a href="#news">CV</a></li>
    <li><a href="#contact">Github</a></li>
    <li><a href="#">Interests</a></li>
    <li><a href="#">Projects</a></li>
    <li><a href="#">Hackerrank</a></li>
</ul>

</body>
</html>