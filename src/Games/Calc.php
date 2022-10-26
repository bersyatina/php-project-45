<?php

namespace Code\Games\Calc;

use function Code\playGame;

use const Code\ROUNDS_COUNT;

const DESCRIPTION = 'What is the result of the expression?';

function calculate($operator, $firsNumber, $lastNumber)
{
    switch ($operator) {
        case "+":
            return $firsNumber + $lastNumber;
        case "-":
            return $firsNumber - $lastNumber;
        case "*":
            return $firsNumber * $lastNumber;
    }
}

function prepareData()
{
    $firsNumber = rand(1, 100);
    $lastNumber = rand(1, 100);

    $operators = ["+", "-", "*"];
    $operator = array_rand($operators);

    $question = "{$firsNumber} {$operators[$operator]} {$lastNumber}";

    $answer = calculate($operators[$operator], $firsNumber, $lastNumber);

    return [
        'question' => $question,
        'answer' => $answer,
    ];
}

function playCalcGame()
{
    $rounds = [];
    for ($iter = 1; $iter <= ROUNDS_COUNT; $iter++) {
        $rounds[] = prepareData();
    }
    playGame(DESCRIPTION, $rounds);
}
