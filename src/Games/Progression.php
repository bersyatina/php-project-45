<?php

namespace Code\Games\Progression;

use function Code\playGame;

use const Code\ROUNDS_COUNT;

const DESCRIPTION = 'What number is missing in the progression?';

function prepareData(): array
{
    $start = rand(1, 5);
    $end = 100;
    $step = rand(5, 15);

    $arrayProgression = range($start, $end, $step);

    $answer = $arrayProgression[array_rand($arrayProgression)];

    $question = [];

    foreach ($arrayProgression as $value) {
        $question[] = $value == $answer ? '..' : $value;
    }
    $question = implode(' ', $question);

    return [
        'question' => $question,
        'answer' => $answer
    ];
}

function playProgressionGame()
{
    $rounds = [];

    for ($iter = 1; $iter <= ROUNDS_COUNT; $iter++) {
        $rounds[] = prepareData();
    }
    playGame(DESCRIPTION, $rounds);
}
