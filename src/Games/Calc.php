<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$condition = 'What is the result of the expression?';

$name = getGreeting();

for ($iter = 0; $iter < 3; $iter++) {
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

    $iter === 2 ? $break = true : $break = false;

    getAnswers($condition, $question, $answer, $break, $name);
}
