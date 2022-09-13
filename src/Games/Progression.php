<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$name = getName();

for ($iter = 1; $iter <= GAME_ITERATOR; $iter++) {
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

    getAnswers($question, $answer, $iter, $name);
}
