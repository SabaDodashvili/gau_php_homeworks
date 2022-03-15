<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .table {
      border: solid 2px #000;
      margin: 50px auto;
      border-collapse: collapse;
      font-family: sans-serif;
      background-color: #fff;
      width: 700px;
      font-size: 14px;
    }

    .table tr {
      border: solid 1px #000;
    }

    .table th,
    td {
      border: solid 1px;
      padding: 15px;
    }
  </style>
  <title>task 3</title>
</head>

<body>
  <?php
  $matrix = [];
  for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 5; $j++) {
      $matrix[$i][$j] = $i + $j;
    }
  }
  ?>

  <table class="table">
    <?php
    for ($i = 0; $i < count($matrix); $i++) {
    ?>
      <tr>
        <?php
        for ($j = 0; $j < count($matrix[$i]); $j++) {
        ?>
          <td><?= $matrix[$i][$j] ?></td>
        <?php
        }
        ?>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>