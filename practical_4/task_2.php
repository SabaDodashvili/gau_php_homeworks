<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>task_2</title>
</head>

<body>

  <form action="" class="form" method="POST">
    <h1 class="form__title">task-2</h1>
    <div class="form__item form-item">
      <input class="form-item__input" type="text" name="name" placeholder=" " />
      <label class="form-item__label">Name</label>
    </div>
    <div class="form__item form-item">
      <input class="form-item__input" type="datetime-local" name="dateTime" placeholder=" " />
      <label class="form-item__label">birthday</label>
    </div>
    <button class="form__button" type="submit">create file</button>
  </form>

  <?php
  if (isset($_POST['name'])) {
    $fileName = preg_replace('/:/', '-', date('Y-m-d H:i:s') . '.txt');
    $myFile = fopen($fileName, 'w');
    fwrite($myFile, $_POST['name'] . ' ',);
    fwrite($myFile, $_POST['dateTime'],);
    fclose($myFile);
  }
  ?>
</body>

</html>