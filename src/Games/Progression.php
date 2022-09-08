<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$condition = 'What number is missing in the progression?';

$name = getGreeting();

for ($iter = 0; $iter < 3; $iter++) {
    $start = rand(1, 5);
    $end = 100;
    $step = rand(5, 15);

    $array = range($start, $end, $step);

    $answer = $array[array_rand($array)];

    $question = '';

    foreach ($array as $value) {
        if ($value == $answer) {
            $question .= '..';
        } else {
            $question .= $value;
        }
        $question .= ' ';
    }
    $question = rtrim($question);

    $iter === 2 ? $break = true : $break = false;

    getAnswers($condition, $question, $answer, $break, $name);
}
