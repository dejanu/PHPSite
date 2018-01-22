<?php

//var_dump($_POST);


function validateRadio(){
    /* function which validates the questions using the value of the array
    */
    $grade=0;
    //global vars cannot be declared and initialized on the same line
    global $corect_answers;
    $corect_answers="";
    //if key[value] == 1 the answer is correct
    foreach ($_POST as $answer => $value) {
        //echo ($answer.":".$value."<br>");
        if ($value == 1 && isset($_POST[$answer])) {
            $grade+=1;
            }
            else {
              $corect_answers.= "Answer for question number <strong> ".$answer."</strong> was wrong "."<br>";
            }
                          }
      return $grade;
                  }
function unlockBot($grade,$thd) {
  ///if grade > $ thd unlock the bot
    echo($_SERVER["REMOTE_ADDR"].":".$_SERVER["REMOTE_PORT"]);
}
 ?>

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

     <div class="container">
     <?php

     $final_grade = validateRadio();

       $output = "Your grade is: ".$final_grade."<br>"."And here are your answers:"."<br>".$corect_answers."<br>";

      //validate the grade
      if ($final_grade < 3){
        echo("Your are a noob !! <br>".$output);

      }
      else {
          echo("Your did pretty well !! <br>".$output);
      }

      ?>
     </div>

 </body>
</html>
