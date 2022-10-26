<?php

namespace Code\Games\Prime;

use function Code\playGame;

use const Code\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number, $iter)
{
    return $number % $iter === 0;
}

function getPrepareData()
{
    $number = rand(1, 100);

    $answer = 'yes';
    for ($iter = 2; $iter < $number; $iter++) {
        $answer = isPrime($number, $iter) ? 'no' : 'yes';
        if ($answer === 'no') {
            break;
        }
    }

    if ($number === 1) {
        $answer = 'no';
    }

    $question = $number;

    return [
        'question' => $question,
        'answer' => $answer,
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
