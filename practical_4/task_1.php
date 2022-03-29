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

$email = '';
$password = '';
$confrimPassword = '';
$checkCode = '';

$errorsArr = ['mail' => '', 'password' => '', 'confrimPassword' => '', 'checkCode' => ''];
$validationPassed = true;


if (isset($_POST['mail'])) {
  $email = clearData($_POST['mail']);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
    $errorsArr['mail'] = '<span class="form-item__err-text">email format is not correct</span>';
    $validationPassed = false;
  } else {
    $errorsArr['mail'] = '';
  }
}

if (isset($_POST['password'])) {
  $password = clearData($_POST['password']);
  if (!preg_match("/\d/", $password) || !preg_match("/\w/", $password) || empty($password) || strlen($password) < 7) {
    $errorsArr['password'] = '<span class="form-item__err-text">password is not correct</span>';
    $validationPassed = false;
  } else {
    $errorsArr['password'] = '';
  }
}


if (isset($_POST['confrimPassword'])) {
  $confrimPassword = clearData($_POST['confrimPassword']);
  if ($confrimPassword != $password) {
    $errorsArr['confrimPassword'] = '<span class="form-item__err-text">password is not correct</span>';
  } else {
    $errorsArr['confrimPassword'] = '';
  }
}

function generateCode()
{
  $code = "";
  for ($i = 0; $i < 5; $i++) {
    $code .= random_int(0, 9);
  }
  return $code;
}
$code = generateCode();

if (isset($_POST['checkCode'])) {
  $checkCode = $_POST['checkCode'];
  if ($checkCode != $_POST['currentCode'] || empty($checkCode)) {
    $errorsArr['checkCode'] = '<span class="form-item__err-text">enter correct Code</span>';
  } else {
    $errorsArr['checkCode'] = '';
  }
}



?>

<body>
  <form action="" class="form" method="POST">
    <h1 class="form__title">title</h1>
    <div class="form__item form-item">
      <input class="form-item__input" type="text" name="mail" placeholder=" " />
      <label class="form-item__label">E-mail</label>
      <?= $errorsArr['mail'] ?>
    </div>
    <div class="form__item form-item">
      <input class="form-item__input" type="password" name="password" placeholder=" " />
      <label class="form-item__label">Password</label>
      <?= $errorsArr['password'] ?>
    </div>
    <div class="form__item form-item">
      <input class="form-item__input" type="password" name="confrimPassword" placeholder=" " />
      <label class="form-item__label">Confirm password</label>
      <?= $errorsArr['confrimPassword'] ?>
    </div>
    <div class="form__item form-item">
      <input class="" type="hidden" name="currentCode" value="<?= $code ?>" />
      <input class="form-item__input" type="text" name="checkCode" placeholder=" " />
      <label class="form-item__label">Check kode</label>
      <?= $errorsArr['checkCode'] ?>
      <br>
      <br>
      <span class="form-item__code">
        <?= $code ?>
      </span>
    </div>
    <button class="form__button" type="submit">submit</button>
  </form>
</body>

</html>