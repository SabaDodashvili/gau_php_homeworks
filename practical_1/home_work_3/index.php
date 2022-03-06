<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index.php</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form class="form" action="action.php" method="POST">
    <h2 class="form__title">Quiz-1</h2>
    <div class="form__item">
      <h3 class="form__question">1)Which superglobal variable holds information about headers, paths, and script locations?</h3>
      <div class="form__options options-form">
        <label class="options-form__label">
          <input class="options-form__checkbox" type="checkbox" name="question_1" value="$_SERVER">
          <span class="options-form__style"></span>
          <span class="options-form__text">$_SERVER</span>
        </label>
        <label class="options-form__label">
          <input class="options-form__checkbox" type="checkbox" name="question_1" value="$_SESSION">
          <span class="options-form__style"></span>
          <span class="options-form__text">$_SESSION</span>
        </label>
        <label class="options-form__label">
          <input class="options-form__checkbox" type="checkbox" name="question_1" value="$_GET">
          <span class="options-form__style"></span>
          <span class="options-form__text">$_GET</span>
        </label>
        <label class="options-form__label">
          <input class="options-form__checkbox" type="checkbox" name="question_1" value="GLOBALS">
          <span class="options-form__style"></span>
          <span class="options-form__text">$GLOBALS</span>
        </label>
      </div>
    </div>
    <div class="form__item">
      <h3 class="form__question">2)What is the correct way to open the file "time.txt" as readable?</h3>
      <div class="form__options options-form">
        <label class="options-form__label">
          <input class="options-form__checkbox" type="checkbox" name="question_2" value="fopen('time.txt','r');">
          <span class="options-form__style"></span>
          <span class="options-form__text">fopen('time.txt','r');</span>
        </label>
        <label class="options-form__label">
          <input class="options-form__checkbox" type="checkbox" name="question_2" value="open('time.txt','read';">
          <span class="options-form__style"></span>
          <span class="options-form__text">open('time.txt','read';<span>
        </label>
        <label class="options-form__label">
          <input class="options-form__checkbox" type="checkbox" name="question_2" value="open('time.txt');">
          <span class="options-form__style"></span>
          <span class="options-form__text">open('time.txt');</span>
        </label>
        <label class="options-form__label">
          <input class="options-form__checkbox" type="checkbox" name="question_2" value="fopen('time.txt','r+');">
          <span class="options-form__style"></span>
          <span class="options-form__text">fopen('time.txt','r+');</span>
        </label>
      </div>
    </div>
    <div class="form__item">
      <h3 class="form__question">3)What is the correct way to add 1 to the $count variable?</h3>
      <div class="form__options options-form">
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="question_3" value="++count;">
          <span class="options-form__style radio"></span>
          <span class="options-form__text">++count;</span>
        </label>
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="question_3" value="count++">
          <span class="options-form__style radio"></span>
          <span class="options-form__text">count++;<span>
        </label>
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="question_3" value="$count++;">
          <span class="options-form__style radio"></span>
          <span class="options-form__text">$count++;</span>
        </label>
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="question_3" value="$count=+1;">
          <span class="options-form__style radio"></span>
          <span class="options-form__text">$count=+1;</span>
        </label>
      </div>

    </div>
    <div class="form__item">
      <h3 class="form__question">4)describe what a lexical environment is.</h3>
      <div class="form__message-box">
        <textarea class="form__textarea" placeholder="write your answer"></textarea>
      </div>
    </div>
    <div class="form__item">
      <h3 class="form__question">5)what does the phpinfo() function do?</h3>
      <div class="form__message-box">
        <textarea class="form__textarea" placeholder="write your answer"></textarea>
      </div>
    </div>
    <button class="form__button" type="submit">submit</button>
  </form>
</body>

</html>

<!-- fopen - true -->
<!-- server - true -->
<!-- $count++; -->