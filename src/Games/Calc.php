<?php

namespace Code\Games\Calc;

use function Code\playGame;

use const Code\ROUNDS_COUNT;

const DESCRIPTION = 'What is the result of the expression?';

function getPrepareData()
{
    $firsNumber = rand(1, 100);
    $lastNumber = rand(1, 100);

    $operators = ["+", "-", "*"];
    $operator = array_rand($operators);

    $question = "{$firsNumber} {$operators[$operator]} {$lastNumber}";

    $answer = null;
    switch ($operators[$operator]) {
        case "+":
            $answer = $firsNumber + $lastNumber;
            break;
        case "-":
            $answer = $firsNumber - $lastNumber;
            break;
        case "*":
            $answer = $firsNumber * $lastNumber;
            break;
    }

    return [
        'question' => $question,
        'answer' => $answer,
    ];
}

function playCalcGame()
{
    $rounds = [];
    for ($iter = 1; $iter <= ROUNDS_COUNT; $iter++) {
        $rounds[] = getPrepareData();
    }
    playGame(DESCRIPTION, $rounds);
}
