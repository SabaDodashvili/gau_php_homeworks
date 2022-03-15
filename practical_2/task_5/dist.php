<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>form type texts</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      border: 0;
    }

    *,
    *:before,
    *:after {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    :focus,
    :active {
      outline: none;
    }

    a:focus,
    a:active {
      outline: none;
    }

    nav,
    footer,
    header,
    aside {
      display: block;
    }

    html,
    body {
      height: 100%;
      width: 100%;
      font-size: 100%;
      line-height: 1;
      font-size: 14px;
      -ms-text-size-adjust: 100%;
      -moz-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }

    a,
    a:visited {
      text-decoration: none;
    }

    a:hover {
      text-decoration: none;
    }

    ul li {
      list-style: none;
    }

    img {
      vertical-align: top;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: inherit;
      font-weight: inherit;
    }

    /* nullstyle */

    body {
      padding: 20px 0;
    }

    .form {
      font-family: sans-serif;
      max-width: 650px;
      margin: 0 auto;
      padding: 32px;
      box-shadow: 0 4px 16px #ccc;
    }

    .form__title {
      text-align: center;
      font-size: 28px;
      color: rgb(243, 69, 69);
      margin: 0 0 32px 0;
    }

    .form__item {
      position: relative;
      margin: 0 0 32px 0;
    }

    .form__item:last-child {
      margin: 0px;
    }

    .form-item__input {
      font-size: 16px;
      font-family: sans-serif;
      width: 100%;
      padding: 0 0 10px 0;
      border: none;
      border-bottom: 1px solid #e0e0e0;
      background: transparent;
      transition: 0.3s ease all 0s;
    }

    .form-item__input:focus {
      border-bottom: 1px solid #1a73a8;
    }

    .form-item__label {
      font-size: 16px;
      font-family: sans-serif;
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
      color: #9e9e9e;
      transition: 0.3s;
    }

    .form-item__input:focus~.form-item__label,
    .form-item__input:not(:placeholder-shown)~.form-item__label {
      top: -18px;
      font-size: 12px;
      color: #e0e0e0;
    }

    .form-item__label-required {
      position: absolute;
      top: 50%;
      right: -10px;
      transform: translateY(-50%);
      font-size: 20px;
      color: rgb(243, 69, 69);
    }

    .form-item__message-box {
      height: 100px;
      width: 100%;
      position: relative;
    }

    .form-item__textarea {
      font-family: inherit;
      height: 100%;
      width: 100%;
      resize: none;
      background: transparent;
      border-bottom: 1px solid #e0e0e0;
    }

    .form-item__textarea:focus {
      border-bottom: 1px solid #1a73a8;
    }

    .form-item__textarea:focus~.form-item__label,
    .form-item__textarea:not(:placeholder-shown)~.form-item__label {
      top: -18px;
      font-size: 12px;
      color: #e0e0e0;
    }

    .form__subtitle {
      margin: 0 0 10px 0;
      font-size: 22px;
      position: relative;
    }

    .form__subtitle::after {
      content: '*';
      position: absolute;
      top: 50%;
      right: -10px;
      transform: translateY(-50%);
      font-size: 20px;
      color: rgb(243, 69, 69);
    }

    .form-item__err-text {
      color: rgb(243, 69, 69);
      font-size: 12px;
    }

    .options-form__label {
      display: block;
      margin: 0 0 15px 0;
    }

    .options-form__label:last-child {
      margin: 0;
    }

    .options-form__radio {
      position: absolute;
      width: 16px;
      height: 16px;
      border: solid 2px #1a73a8;
    }

    .options-form__style-radio {
      position: absolute;
      width: 16px;
      height: 16px;
      border: solid 2px #1a73a8;
      border-radius: 50%;
    }

    .options-form__radio:checked+.options-form__style-radio::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      height: 10px;
      width: 10px;
      background-color: #1a73a8;
      border-radius: 50%;
    }

    .options-form__radio:disabled+.options-form__style-radio {
      border-color: #e0e0e0;
    }

    .options-form__radio:disabled:checked+.options-form__style-radio::before {
      background-color: #e0e0e0;
    }

    .options-form__radio:focus+.options-form__style-radio {
      box-shadow: 0 0 0 2px #000;
    }

    .options-form__text {
      font-size: 16px;
      color: #9e9e9e;
      padding: 0 0 0 20px;
    }

    .form__button {
      height: 40px;
      width: 100%;
      font-size: 16px;
      color: #fff;
      border-radius: 20px;
      background-color: #1a73a8;
      transition: 0.3s ease all 0s;
      cursor: pointer;
      margin: 0 0 32px 0;
    }

    .form__button:hover {
      background-color: #55c0ff;
    }

    .output-from__title {
      font-size: 22px;
      margin: 0 0 15px 0;
    }

    .table {
      border: solid 2px #000;
      margin: 50px auto;
      border-collapse: collapse;
      font-family: sans-serif;
      background-color: #fff;
      max-width: 300px;
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