<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$condition = 'Answer "yes" if the number is even, otherwise answer "no".';

$name = getGreeting();

for ($iter = 0; $iter < 3; $iter++) {
    $question = rand(0, 100);
    $question % 2 === 0 ? $answer = 'yes' : $answer = 'no';

    $iter === 2 ? $break = true : $break = false;

    getAnswers($condition, $question, $answer, $break, $name);
}
