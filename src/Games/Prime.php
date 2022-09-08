<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$condition = 'Answer "yes" if given number is prime. Otherwise answer "no".';

$name = getGreeting();

for ($iter = 0; $iter < 3; $iter++) {
    $a = rand(1, 100);

    $answer = gmp_prob_prime($a, $repetitions = 100);

    if ($answer == 0) {
        $answer = 'no';
    } else {
        $answer = 'yes';
    }

    $question = $a;

    $iter === 2 ? $break = true : $break = false;

    getAnswers($condition, $question, $answer, $break, $name);
}