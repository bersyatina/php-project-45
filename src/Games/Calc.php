<?php

namespace Code\Games\Calc;

use function Code\playGame;

use const Code\ROUNDS_COUNT;

const DESCRIPTION = 'What is the result of the expression?';

function playCalcGame()
{
    $rounds = [];
    for ($iter = 1; $iter <= ROUNDS_COUNT; $iter++) {
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
        $rounds[] = [
            'question' => $question,
            'answer' => $answer,
        ];
    }
    playGame(DESCRIPTION, $rounds);
}
