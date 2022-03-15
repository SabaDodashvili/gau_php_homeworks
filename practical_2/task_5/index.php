<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>form type texts</title>
  <link rel="stylesheet" href="style.css" />
</head>

<?php
function clearData($value)
{
  $value = trim($value); //სფეისებისგან წმენდს სტრიქონის დასაწყისში და ბოლოში
  $value = stripslashes($value); //წმენდს ზედმეტი სფლეშებისგან
  $value = strip_tags($value); //წმენდს html სიმბოლოებს
  $value = htmlspecialchars($value); //html სიმბოლოები გადაყავს სპეციალურ არსებებში
  return $value;
}

$firstName = '';
$email = '';
$website = '';
$comment = '';
$gender = '';

$errorsArr = [];
$validationPassed = true;

if (isset($_POST['firstName'])) {
  $firstName = clearData($_POST['firstName']);
  if (empty($firstName) || mb_strlen($firstName) > 12) {
    $errorsArr['firstName'] = '<span class="form-item__err-text">must be no more than 12 characters</span>';
    $validationPassed = false;
  } else {
    $errorsArr['firstName'] = '';
  }
}
if (isset($_POST['mail'])) {
  $email = clearData($_POST['mail']);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
    $errorsArr['mail'] = '<span class="form-item__err-text">email format is not correct</span>';
    $validationPassed = false;
  } else {
    $errorsArr['mail'] = '';
  }
}
if (isset($_POST['website'])) {
  $website = clearData($_POST['website']);
  if (empty($website) || !filter_var($website, FILTER_VALIDATE_URL)) {
    $errorsArr['website'] = '<span class="form-item__err-text">url format is not correct</span>';
    $validationPassed = false;
  } else {
    $errorsArr['website'] = '';
  }
}
if (empty($_POST['gender'])) {
  $errorsArr['radio'] = '<span class="form-item__err-text">choose one of the options</span>';
  $validationPassed = false;
} else {
  $errorsArr['radio'] = '';
  $gender = $_POST['gender'];
}

if ($validationPassed == true) {
  // header("Location:" . $_SERVER['HTTP_REFERER'] . "?message=sucsees");
}

?>

<body>
  <form class="form" action="" method="POST">
    <h1 class="form__title">* required field</h1>
    <div class="form__item form-item">
      <input class="form-item__input" type="text" name="firstName" placeholder=" " value="<?= $firstName; ?>" />
      <label class="form-item__label">Name</label>
      <span class="form-item__label-required">*</span>
      <?= $errorsArr['firstName'] ?>
    </div>
    <div class="form__item form-item">
      <input class="form-item__input" type="text" name="mail" placeholder=" " value="<?= $email; ?>" />
      <label class="form-item__label">E-mail</label>
      <span class="form-item__label-required">*</span>
      <?= $errorsArr['mail'] ?>
    </div>
    <div class="form__item form-item">
      <input class="form-item__input" type="text" name="website" placeholder=" " value="<?= $website; ?>" />
      <label class="form-item__label">Website</label>
      <?= $errorsArr['website'] ?>
    </div>
    <div class="form__item form-item">
      <div class="form-item__message-box">
        <textarea class="form-item__textarea" type="textarea" name="comment" placeholder=" "><?= $comment; ?></textarea>
        <label class="form-item__label">Enter massage</label>
      </div>
    </div>
    <div class="form__item">
      <h3 class="form__subtitle">Gender:</h3>
      <div class="form__options options-form">
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="gender" />
          <span class="options-form__style-radio"></span>
          <span class="options-form__text">Female</span>
        </label>
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="gender" />
          <span class="options-form__style-radio"></span>
          <span class="options-form__text">Male</span>
        </label>
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="gender" />
          <span class="options-form__style-radio"></span>
          <span class="options-form__text">Other</span>
        </label>
        <?= $errorsArr['radio'] ?>
      </div>
    </div>
    <button class="form__button" type="submit">submit</button>
    <div class="form__ouput output-from">
      <h3 class="output-from__title">Your Input:</h3>
      <?php
      if ($validationPassed == true) {

      ?>
        <table class="table">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Website</th>
            <th>Comment</th>
            <th>Gender</th>
          </tr>

          <tr>
            <td><?= $firstName ?></td>
            <td><?= $email ?></td>
            <td><?= $website ?></td>
            <td><?= $comment ?></td>
            <td><?= $gender ?></td>
          </tr>
        </table>

      <?php
      }
      ?>

    </div>

  </form>
</body>

</html>