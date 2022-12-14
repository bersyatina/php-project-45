<?php

namespace Code\Games\Even;

use function Code\playGame;

use const Code\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function playEvenGame()
{
    $rounds = [];
    for ($iter = 1; $iter <= ROUNDS_COUNT; $iter++) {
        $question = rand(0, 100);
        $answer = $question % 2 === 0 ? 'yes' : 'no';

        $rounds[] = [
            'question' => $question,
            'answer' => $answer,
        ];
    }
    playGame(DESCRIPTION, $rounds);
}
