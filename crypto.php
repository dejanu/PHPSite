<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Quiz Results</title>
  </head>
  <body>
    <!-- <a href="javascript:alert('Hello World!');">Execute JavaScript</a> -->
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Retake Test <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chatbot.php">Get info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="crypto.php">Crypto</a>
          </li>
        </ul>
        <hr>
      </div>
    </nav>
</div>
</body>
</html>

<?php

//start session
session_start();

//view all request headers use the function gettallheaders which return array
// foreach (getallheaders() as $name => $value){
//   echo ($name." : ".$value."<br>");
// }

// var_dump(getallheaders());
// echo("<br>");
// var_dump($_SERVER);
// echo("<br>");
//
// //access the cookie
// var_dump($_COOKIE);

$searches=null;
foreach ($_SESSION as $key => $value) {
  $searches.="<li>".$value."</li>";
}
echo("<div class='container'>");
echo("Your IP: ".$_SERVER["REMOTE_ADDR"]." and your port: ".$_SERVER["REMOTE_PORT"]."<br>");
if (isset($searches)){
  echo("<br><ul>".$searches."</ul>");
}
else {
  echo("You did not searched anything...");
}

echo '<script type="text/javascript"> alert("Here are your infos ...")</script>';
echo("</div>");
//destroy session
session_destroy();
?>
