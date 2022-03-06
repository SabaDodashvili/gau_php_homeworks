<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>action</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <table class="table">
    <tr>
      <th>name</th>
      <th>surname</th>
      <th>course</th>
      <th>semester</th>
      <th>subject</th>
      <th>score</th>
      <th>grade</th>
      <th>lecturer</th>
      <th>dean</th>
    </tr>
    <tr>
      <td><?= $_POST["name"] ?></td>
      <td><?= $_POST["surname"] ?></td>
      <td><?= $_POST["course"] ?></td>
      <td><?= $_POST["semester"] ?></td>
      <td><?= $_POST["subject"] ?></td>
      <td><?= $_POST["score"] ?></td>
      <td><?php
          if ($_POST["score"] < 51) {
            echo "failed";
          } elseif ($_POST["score"] < 60 && $_POST["score"] >= 51) {
            echo "E";
          } elseif ($_POST["score"] < 70 && $_POST["score"] >= 60) {
            echo "D";
          } elseif ($_POST["score"] < 80 && $_POST["score"] >= 70) {
            echo "C";
          } elseif ($_POST["score"] < 90 && $_POST["score"] >= 80) {
            echo "B";
          } elseif ($_POST["score"] < 100 && $_POST["score"] >= 90) {
            echo "A";
          }
          ?>
      </td>
      <td>
        <?php
        if ($_POST["subject"] === "python" || $_POST["subject"] === "c#") {
          echo "tsulaia gvanca";
        } else {
          echo "beso tabatadze";
        }
        ?>
      </td>
      <td>
        <?php
        if ($_POST["course"] === "I" || $_POST["subject"] === "II") {
          echo "kote kulijanovi";
        } else {
          echo "vinme vinmeshvili";
        }
        ?>
      </td>
    </tr>
  </table>
</body>

</html>