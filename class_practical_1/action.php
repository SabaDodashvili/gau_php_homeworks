 <link rel="stylesheet" href="style.css">
 <?php
  $correctAnswersArr = ['$_SERVER', "fopen('time.txt','r');", '$count++;', '4', '10'];
  $str = 'question_';
  $points = 0;

  if ($_POST["question_1"] == $correctAnswersArr[0]) {
    $points++;
  }
  if ($_POST["question_2"] == $correctAnswersArr[1]) {
    $points++;
  }
  if ($_POST["question_3"] == $correctAnswersArr[2]) {
    $points++;
  }
  if ($_POST["question_4"] == $correctAnswersArr[3]) {
    $points++;
  }
  if ($_POST["question_5"] == $correctAnswersArr[4]) {
    $points++;
  }

  echo "<p class='final'>you have $points/5 points</p>";
