<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task_01</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  function generateRandomNumber()
  {
    return random_int(10, 99);
  }

  function createTable()
  {
    echo '<table>';
    for ($i = 0; $i < 10; $i++) {
      echo '<tr>';
      for ($k = 0; $k < 10; $k++) {
        $randomNum = generateRandomNumber();
        echo "<td>$randomNum</td>";
      }
      echo '</tr>';
    }
    echo '</table>';
  }

  createTable();
  ?>
</body>

</html>