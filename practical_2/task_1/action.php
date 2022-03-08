<link rel="stylesheet" href="style.css">

<?php
$numbersArr = [];
$biggerX = 0;
$lessX = 0;

for ($i = 0; $i < 12; $i++) {
  $numbersArr[$i] = rand(10, 100);
}

for ($i = 0; $i < count($numbersArr); $i++) {
  if ($_POST['x'] < $numbersArr[$i]) {
    $biggerX++;
  } elseif ($_POST['x'] > $numbersArr[$i]) {
    $lessX++;
  }
}

echo "<span>more then X $biggerX numbers.</span>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<span>less then X $lessX numbers.</span>";
