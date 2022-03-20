<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index.php</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php

$questionsArr = [
  [
    'Which superglobal variable holds information about headers, paths, and script locations?',
    'answer_1' => '$_SERVER',
    'answer_2' => '$_SESSION',
    'name' => 'question_1'
  ],
  [
    'What is the correct way to open the file "time.txt" as readable?',
    'answer_1' => "fopen('time.txt','r');",
    'answer_2' => "open('time.txt','read';",
    'name' => 'question_2'
  ],
  [
    'What is the correct way to add 1 to the $count variable?',
    'answer_1' => 'count++;',
    'answer_2' => '$count++;',
    'name' => 'question_3'
  ],
  [
    '2 + 2 = ?',
    'answer_1' => '4',
    'answer_2' => '5',
    'name' => 'question_4'
  ],
  [
    '2 * 5 = ?',
    'answer_1' => '25',
    'answer_2' => '10',
    'name' => 'question_5'
  ]
];

$randNumArr = [];
$iterations = 5;

for ($i = 0; $i < $iterations; $i++) {
  $randNum = getRandNumber($questionsArr);

  if (in_array($randNum, $randNumArr)) {
    $iterations++;
  } else {
    $randNumArr[] = $randNum;
  }
}

function  getRandNumber($num)
{
  return rand(0, count($num) - 1);
};

$getElFromArr = function ($index) use ($randNumArr) {
  return $randNumArr[$index];
};

?>

<body>
  <form class="form" action="action.php" method="POST">
    <h2 class="form__title">Quiz-1</h2>
    <div class="form__item">
      <h3 class="form__question">1)<?php
                                    $randQuestion = $questionsArr[$getElFromArr(0)];
                                    echo $randQuestion[0];
                                    ?>
      </h3>
      <div class="form__options options-form">
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="<?= $randQuestion['name'] ?>" value="<?= $randQuestion['answer_1']; ?>">
          <span class="options-form__style"></span>
          <span class="options-form__text"><?= $randQuestion['answer_1']; ?></span>
        </label>
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="<?= $randQuestion['name'] ?>" value="<?= $randQuestion['answer_2']; ?>">
          <span class="options-form__style"></span>
          <span class="options-form__text"><?= $randQuestion['answer_2']; ?></span>
        </label>
      </div>
    </div>
    <div class="form__item">
      <h3 class="form__question">2)<?php
                                    $randQuestion = $questionsArr[$getElFromArr(1)];
                                    echo $randQuestion[0];
                                    ?>
      </h3>
      <div class="form__options options-form">
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="<?= $randQuestion['name'] ?>" value="<?= $randQuestion['answer_1']; ?>">
          <span class="options-form__style"></span>
          <span class="options-form__text"><?= $randQuestion['answer_1']; ?></span>
        </label>
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="<?= $randQuestion['name'] ?>" value="<?= $randQuestion['answer_2']; ?>">
          <span class="options-form__style"></span>
          <span class="options-form__text"><?= $randQuestion['answer_2']; ?><span>
        </label>
      </div>
    </div>
    <div class="form__item">
      <h3 class="form__question">3)<?php
                                    $randQuestion = $questionsArr[$getElFromArr(2)];
                                    echo $randQuestion[0];
                                    ?>
      </h3>
      <div class="form__options options-form">
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="<?= $randQuestion['name'] ?>" value="<?= $randQuestion['answer_1']; ?>">
          <span class="options-form__style radio"></span>
          <span class="options-form__text"><?= $randQuestion['answer_1']; ?><span>
        </label>
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="<?= $randQuestion['name'] ?>" value="<?= $randQuestion['answer_2']; ?>">
          <span class="options-form__style radio"></span>
          <span class="options-form__text"><?= $randQuestion['answer_2']; ?></span>
        </label>
      </div>
    </div>
    <div class="form__item">
      <h3 class="form__question">4)<?php
                                    $randQuestion = $questionsArr[$getElFromArr(3)];
                                    echo $randQuestion[0];
                                    ?>
      </h3>
      <div class="form__options options-form">
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="<?= $randQuestion['name'] ?>" value="<?= $randQuestion['answer_1']; ?>">
          <span class="options-form__style radio"></span>
          <span class="options-form__text"><?= $randQuestion['answer_1']; ?></span>
        </label>
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="<?= $randQuestion['name'] ?>" value="<?= $randQuestion['answer_2']; ?>">
          <span class="options-form__style radio"></span>
          <span class="options-form__text"><?= $randQuestion['answer_2']; ?><span>
        </label>
      </div>
    </div>
    <div class="form__item">
      <h3 class="form__question">5)<?php
                                    $randQuestion = $questionsArr[$getElFromArr(4)];
                                    echo $randQuestion[0];
                                    ?>
      </h3>
      <div class="form__options options-form">
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="<?= $randQuestion['name'] ?>" value="<?= $randQuestion['answer_1']; ?>">
          <span class="options-form__style radio"></span>
          <span class="options-form__text"><?= $randQuestion['answer_1']; ?></span>
        </label>
        <label class="options-form__label">
          <input class="options-form__radio" type="radio" name="<?= $randQuestion['name'] ?>" value="<?= $randQuestion['answer_2']; ?>">
          <span class="options-form__style radio"></span>
          <span class="options-form__text"><?= $randQuestion['answer_2']; ?><span>
        </label>
      </div>
    </div>
    <button class="form__button" type="submit">submit</button>
  </form>
</body>

</html>