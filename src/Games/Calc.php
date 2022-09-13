<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$name = getName();

for ($iter = 1; $iter <= GAME_ITERATOR; $iter++) {
    $a = rand(1, 100);
    $b = rand(1, 100);

    $operators = ["+", "-", "*"];
    $operator = array_rand($operators);

    switch ($operators[$operator]) {
        case "+":
            $question = "$a + $b";
            $answer = $a + $b;
            break;
        case "-":
            $question = "$a - $b";
            $answer = $a - $b;
            break;
        case "*":
            $question = "$a * $b";
            $answer = $a * $b;
            break;
    }

    getAnswers($question, $answer, $iter, $name);
}
