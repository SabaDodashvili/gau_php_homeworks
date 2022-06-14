<?php require_once("./db.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="menu.css">

  <title>data display</title>
</head>

<body>
  <?php include_once("./components/header.php"); ?>

  <div class="container">
    <?php
    $query1 = "SELECT * FROM data WHERE Id<=7 AND Type='2'";
    $query2 = "SELECT * FROM data ORDER BY Id DESC LIMIT 5";
    $query3 = "SELECT * FROM data ORDER BY Id DESC LIMIT 10";
    $query3 = "SELECT * FROM data WHERE Id>1 AND Id<4";
    $query4 = "SELECT * FROM data WHERE Id%2=0";

    $queries = array($query1, $query2, $query3, $query4);
    ?>

    <?php
    for ($i = 0; $i < count($queries); $i++) {
    ?>
      <h3><?= $i + 1 ?>)</h3>
      <div class="menu-wrapper">
        <nav class="menu">
          <?php
          $query = $queries[$i];
          $menus = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_assoc($menus)) {
            echo "<ul>";
            foreach ($row as $item)
              echo "<li>$item</li>";
            echo "</ul>";
          }
          ?>
        </nav>
      </div>
    <?php
    }
    ?>
  </div>

</body>

</html>