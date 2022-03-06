<?php
$correctAnswersArr = ['$_SERVER', "fopen('time.txt','r');", '$count++;'];
$str = 'question_';
$points = 0;

if ($_POST["question_1"] === $correctAnswersArr[0]) {
  $points++;
}
if ($_POST["question_2"] === $correctAnswersArr[1]) {
  $points++;
}
if ($_POST["question_3"] === $correctAnswersArr[2]) {
  $points++;
}

echo "you have at least $points points tests are correct $points/3";

// for ($i = 0; $i < count($correctAnswersArr); $i++) {
//   if ($_POST[$str . $i] == $correctAnswersArr[$i++]) {
//     echo "1";
//   }
// }
