<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$name = getName();

for ($iter = 1; $iter <= GAME_ITERATOR; $iter++) {
    $a = rand(1, 100);

    $answer = 'yes';
    for ($i = 2; $i < $a; $i++) {
        if ($a % $i === 0) {
            $answer = 'no';
            break;
        }
    }

    if ($a === 1) {
        $answer = 'yes';
    }

    $question = $a;

    getAnswers($question, $answer, $iter, $name, $name);
}
