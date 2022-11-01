<?php

namespace Code\Games\Gcd;

use function Code\playGame;

use const Code\ROUNDS_COUNT;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function prepareData(): array
{
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);

    $question = "{$firstNumber} {$secondNumber}";

    while ($secondNumber != 0) {
        $gcd = $firstNumber % $secondNumber;
        $firstNumber = $secondNumber;
        $secondNumber = $gcd;
    }

    $answer = $firstNumber;

    return [
        'question' => $question,
        'answer' => $answer,
    ];
}

function playGcdGame()
{
    $rounds = [];
    for ($iter = 1; $iter <= ROUNDS_COUNT; $iter++) {
        $rounds[] = prepareData();
    }
    playGame(DESCRIPTION, $rounds);
}
