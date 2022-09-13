<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$name = getName();

const CONDITION = 'Find the greatest common divisor of given numbers.';

for ($iter = 1; $iter <= GAME_ITERATOR; $iter++) {
    $a = rand(1, 100);
    $b = rand(1, 100);

    $question = "$a $b";

    while ($b != 0) {
        $m = $a % $b;
        $a = $b;
        $b = $m;
    }
    $answer = $a;

    getAnswers(CONDITION, $question, $answer, $iter, $name);
}
