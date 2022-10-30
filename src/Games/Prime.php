<?php

namespace Code\Games\Prime;

use function Code\playGame;

use const Code\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number): bool
{
    $answer = true;
    for ($iter = 2; $iter < $number; $iter++) {
        $answer = !($number % $iter === 0);
        if ($answer === false) {
            break;
        }
    }

    if ($number === 1) {
        $answer = false;
    }

    return $answer;
}

function getPrepareData()
{
    $number = rand(1, 100);

    return [
        'question' => $number,
        'answer' => isPrime($number) ? 'yes' : 'no',
    ];
}

function playPrimeGame()
{
    $rounds = [];

    for ($iter = 1; $iter <= ROUNDS_COUNT; $iter++) {
        $rounds[] = getPrepareData();
    }
    playGame(DESCRIPTION, $rounds);
}
