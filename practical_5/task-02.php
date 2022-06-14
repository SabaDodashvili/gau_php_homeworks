<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta fileName="viewport" content="width=device-width, initial-scale=1.0">
  <title>task-02</title>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <h3>ფაილის ზომა არ უნდა იყოს 5 მეგაბაიტზე მეტი!</h3>
    <input type="file" name="fileName">
    <br>
    <input type="submit" value="submit" name="submit">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    if ($_FILES['fileName']['size'] < 5 * 1024 * 1024) {
      move_uploaded_file($_FILES['fileName']['tmp_name'], 'temp/' . $_FILES['fileName']['name']);
      echo 'ფაილის ზომაა' . $_FILES['fileName']['size'] * 1024 * 1024 . ' მეგაბაიტი' . '<br>';
      echo $_FILES['fileName']['name'] . '<br>';
      echo $_FILES['fileName']['tmp_name'] . '<br>';
    } else {
      echo "ფაილის ზომა აღემატება დაშვებულს";
    }
  }
  ?>
</body>

</html>