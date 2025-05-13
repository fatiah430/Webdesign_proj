<style>
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
   .result-bar {
      height: 50px;
      margin-bottom: 30px;
      background-color: #ADD8E6;
      position: relative;
   }

   .result-bar-name {
      position: absolute;
      left: 5px;
      top: 5px;
      font-weight: bold;
   }

   .result-bar-percentage {
      position: absolute;
      right: 5px;
      top: 5px;
   }
</style>


<?php
   $filename = getcwd() . '/data/results.txt';

      // Read the file into an array of lines
      // Each line contains new line character at their end as default, 
      // but we can enforce trimming by FILE_IGNORE_NEW_LINES flag.
      $lines = file($filename, FILE_IGNORE_NEW_LINES);

      // Count the occurrences of each character name
      $counts = array_count_values($lines);

      $total = count($lines);

      // Display the counts and percentages
      foreach ($counts as $name => $count) {
      $percentage = round($count / $total * 100);
      // echo "$name ($percentage%)<br>";
      echo "<div class='result-bar' style='width:{$percentage}%;'>";
      echo "<span class='result-bar-name'>$name</span>";
      echo "<span class='result-bar-percentage'>$percentage%</span>";
      echo "</div>";
   }
   echo "<a class='take-again-btn' href='quiz.php'>Take Again </a>";
   exit();
?>
