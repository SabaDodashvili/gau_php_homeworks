<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task_02</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form action="" class="form" method="POST">
    <h1 class="form__title">შეიყვანეთ მონაცემები</h1>
    <div class="form__item form-item">
      <input class="form-item__input" type="text" name="M" placeholder=" " />
      <label class="form-item__label">M</label>
    </div>
    <div class="form__item form-item">
      <input class="form-item__input" type="text" name="N" placeholder=" " />
      <label class="form-item__label">N</label>
    </div>
    <div class="form__item form-item">
      <input class="form-item__input" type="text" name="a" placeholder=" " />
      <label class="form-item__label">a</label>
    </div>
    <div class="form__item form-item">
      <input class="form-item__input" type="text" name="b" placeholder=" " />
      <label class="form-item__label">b</label>
    </div>
    <button class="form__button" type="submit" name="createTable">submit</button>
  </form>

  <?php
  function createTable($a, $b, $m, $n)
  {
    echo "<table class='table'>";
    for ($i = 0; $i < $m; $i++) {
      echo "<tr>";
      for ($j = 0; $j < $n; $j++) {
        echo "<td>" . rand($a, $b) . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }

  if (isset($_POST["createTable"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $n = $_POST["N"];
    $m = $_POST["M"];
    if (is_numeric($a) && is_numeric($b) && is_numeric($n) && is_numeric($m))
      createTable($a, $b, $n, $m);
  }


  ?>
</body>

</html>