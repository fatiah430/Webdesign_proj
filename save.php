<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SAVE</title>
   <style>
    body{
        background-image: url("images/simp.jpeg");
    }
    .result-heading {
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
    }
   
    .result-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 3rem;
    }
    .result-title {
        position: absolute;
        top: 5px;
        left: 10px;
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
    }
    .result-title:hover {
        background-color: #3e8e41;
        cursor: pointer;
    }

    .result-character {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 2rem;
    }

    .result-image {
        width: 100%;
        max-width: 20rem;
        height: auto;
        object-fit: contain;
        margin-bottom: 2rem;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    img{
        height: 600px;
        width:580px;
    }
    .take-again-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        text-decoration: none;
    }

    .take-again-btn:hover {
        background-color: #3e8e41;
        cursor: pointer;
    }
   </style>
</head>
<body>
<?php
   if (empty($_POST['color']) || empty($_POST['dessert']) || empty($_POST['hobby']) || empty($_POST['fear'])) {
      header("Location: quiz.php?error=missed_question");
       exit();
   }
   // diagnose which character the user is
   $color = $_POST['color'];
   if ($color == 'y') {
       $char = "Homer";
   }
   else if ($color == 'g') {
       $char = "Marge";
   }
   else if (($color == 'b')) {
       $char = "Lisa";
   } else{
      $char = "Bart";
   }

   $dessert = $_POST['dessert'];
   // diagnose which character the user is
   if ($dessert == 'icecream') {
       $char = "Marge";
   }
   else if ($dessert == 'donuts') {
       $char = "Homer";
   }
   else if (($dessert == 'cookies')) {
       $char = "Lisa";
   } else{
      $char = "Bart";
   }
   $hobby = $_POST['hobby'];
   if ($hobby == 'knitting') {
       $char = "Marge";
   }
   else if ($hobby == 'binge') {
       $char = "Homer";
   }
   else if (($hobby == 'reading')) {
       $char = "Lisa";
   } else{
      $char = "Bart";
   }
   $fear = $_POST['fear'];
   // diagnose which character the user is
   if ($fear == 'heights') {
       $char = "Marge";
   }
   else if ($fear == 'flying') {
       $char = "Homer";
   }
   else if (($fear == 'spiders')) {
       $char = "Lisa";
   } else{
      $char = "Bart";
   }

   // save the data to a file on the server
   $filename = getcwd() . '/data/results.txt';
   file_put_contents($filename, $char . "\n", FILE_APPEND);
   

    // set cookie
   // setcookie('character', $char);
   echo "<h2 class='result-heading'>Your Quiz Results:</h2>";
   echo "<a class='result-title' href='results.php'>See aggerate results:</a>";
   echo "<div class='result-container'>";
   echo "<p class='result-character'>You are more like $char</p>";
   echo "<img src='images/$char.png'>";
   echo "<a class='take-again-btn' href='quiz.php'>Take Again </a>";
   echo "</div>";
   exit();
?>
   
</body>
</html>















