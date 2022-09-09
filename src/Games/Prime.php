<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$condition = 'Answer "yes" if given number is prime. Otherwise answer "no".';

$name = getGreeting();

for ($iter = 0; $iter < 3; $iter++) {
    $a = rand(1, 100);

    $answer = 'yes';
    for ($i = 2; $i < $a; $i++) {
        if ($a % $i === 0) {
            $answer = 'no';
            break;
        }
    }

    $question = $a;

    $iter === 2 ? $break = true : $break = false;

    getAnswers($condition, $question, $answer, $break, $name);
}