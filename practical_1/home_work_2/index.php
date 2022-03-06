<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form class="form" action="action.php" method="POST">
    <div class="form__item">
      <input class="form__input" type="text" name="name" placeholder=" " />
      <label class="form__label">your name</label>
    </div>
    <div class="form__item">
      <input class="form__input" type="text" name="surname" placeholder=" " />
      <label class="form__label">your surname</label>
    </div>
    <div class="form__item form-select">
      <h2 class="form-select__title">select course</h2>
      <select class="form-select__select" name="course">
        <option class="form-select__option" value="I">I</option>
        <option class="form-select__option" value="II">II</option>
        <option class="form-select__option" value="III">III</option>
        <option class="form-select__option" value="IV">IV</option>
      </select>
    </div>
    <div class="form__item form-select">
      <h2 class="form-select__title">select semester</h2>
      <select class="form-select__select" name="semester">
        <option class="form-select__option" value="I">I</option>
        <option class="form-select__option" value="II">II</option>
      </select>
    </div>
    <div class="form__item form-select">
      <h2 class="form-select__title">select subject</h2>
      <select class="form-select__select" name="subject">
        <option class="form-select__option" value="c#">c#</option>
        <option class="form-select__option" value="python">python</option>
        <option class="form-select__option" value="js">js</option>
        <option class="form-select__option" value="php">php</option>
      </select>
    </div>
    <div class="form__item">
      <input class="form__input" type="number" name="score" placeholder=" " />
      <label class="form__label">enter your score</label>
    </div>
    <button class="form__button" type="submit">submit</button>
  </form>
  <a class="ubdate-btn" href="index.php">update page</button>
</body>

</html>