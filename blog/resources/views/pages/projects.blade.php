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
  <li><a href="/cv">CV</a></li>
  <li><a href="https://github.com/peterpark77">Github</a></li>
  <li><a href="/interests">Interests</a></li>
  <li><a class="active" href="/projects">Projects</a></li>
  <li><a href="https://www.hackerrank.com/peterpark1995">Hackerrank</a></li>
</ul>


<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p>
</footer>









</body>
</html>