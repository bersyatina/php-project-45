<?php

namespace Code\Games\Gcd;

use function Code\playGame;

use const Code\ROUNDS_COUNT;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getPrepareData()
{
    $firstNumber = rand(1, 100);
    $twoNumber = rand(1, 100);

    $question = "{$firstNumber} {$twoNumber}";

    while ($twoNumber != 0) {
        $gcd = $firstNumber % $twoNumber;
        $firstNumber = $twoNumber;
        $twoNumber = $gcd;
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
        $rounds[] = getPrepareData();
    }
    playGame(DESCRIPTION, $rounds);
}
