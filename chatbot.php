<?php
//start session
session_start();
function getData(){
  $file_content=file_get_contents('data.csv');
//var_dump($file_content);
//get each row $row_array = explode("\n", $file_content);

//get words
  $words=explode("|",$file_content);

  return $words;
  }
//do not Answer then open a new tab
//<?php header("location: http://google.com");

  function generateAnswer($q){
            $words = getData();
           //convert to lowercase
           $q_lower = strtolower($q);
           //verify if we have a question
              if (strstr($q, "?") && isset($q)) {
                //echo ($q_lower);
                if (strstr($q_lower, "bitcoin") || strstr($q_lower, "bit") ) {
                  //bitcoin definition
                  echo ($words[1]."<br>");
                }
                if (strstr($q_lower, "name") || strstr($q_lower, "hello")|| strstr($q_lower, "hi") ) {
                  //general greeting
                  echo ($words[0]."<br>");
                }

                if (strstr($q_lower, "year") || strstr($q_lower, "appeared")) {
                  //bit coin release year
                  echo ($words[2]."<br>");
                }

                if (strstr($q_lower, "satoshi") || strstr($q_lower, "nakamoto")|| strstr($q_lower, "founder")) {
                  //satoshi
                  echo ($words[5]."<br>");
                }

                if (strstr($q_lower, "ripple") || strstr($q_lower, "xrp")) {
                  //ripple info
                  echo ($words[3]."<br>");
                }

                if (strstr($q_lower, "buy") || strstr($q_lower, "money") || strstr($q_lower, "should")) {
                  //bit coin advice
                  echo ($words[4]."<br>");
                }
                if (strstr($q_lower, "fiat") || strstr($q_lower, "currency") || strstr($q_lower, "money")) {
                  //fiat definition
                  echo ($words[6]."<br>");
                }
                if (strstr($q_lower, "joke") || strstr($q_lower, "fun")) {
                  //small joke
                  echo ($words[7]."<br>");
                }
                if (strstr($q_lower, "mining") || strstr($q_lower, "mine")) {
                  //mining definition
                  echo ($words[8]."<br>");
                }

                //else {
                  //I do no know th answer execute js
                //  echo '<script type="text/javascript"> alert("I do not know th answer...")</script>';

              //  }

                 }

              else {
                echo ("I did not saw any question ?");
              }
}
?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <!-- Bootstrap CDN -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
     <title>Chat Bot</title>
   </head>
   <body>


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
       </div>
     </nav>
    </div>


     <div class="container">
       <p> Here you can search information concerning some notions from the cryptocurrency field...</p>
        <p> e.g: fiat,bit coin,ripple
          <hr>
          <br>
          <form method="post">
         <input type="textarea" name="question" placeholder="Notion ?" required>
         <input type="submit" value="Give answer">
         <hr>

         <?php
if(isset($_POST["question"])){
//var_dump($_POST["question"]);
  $question = strip_tags($_POST["question"]);
 generateAnswer($question);
 //save user searches
 $_SESSION[$question]=$question;

}
         ?>
       </form>


     </div>

    </body>
 </html>
