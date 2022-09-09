<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$condition = 'Find the greatest common divisor of given numbers.';

$name = getGreeting();

for ($iter = 0; $iter < 3; $iter++) {
    $a = rand(1, 100);
    $b = rand(1, 100);

    $question = "$a $b";

    while ($b != 0)
    {
        $m = $a % $b;
        $a = $b;
        $b = $m;
    }
    $answer = $a;

    $iter === 2 ? $break = true : $break = false;

    getAnswers($condition, $question, $answer, $break, $name);
}
