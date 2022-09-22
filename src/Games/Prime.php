<?php

namespace Code\Games\Prime;

use function Code\playGame;

use const Code\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function playPrimeGame()
{
    $rounds = [];

    for ($iter = 1; $iter <= ROUNDS_COUNT; $iter++) {
        $a = rand(1, 100);

        $answer = 'yes';
        for ($i = 2; $i < $a; $i++) {
            if ($a % $i === 0) {
                $answer = 'no';
                break;
            }
        }

        if ($a === 1) {
            $answer = 'no';
        }

        $question = $a;
        $rounds[] = [
            'question' => $question,
            'answer' => $answer,
        ];
    }
    playGame(DESCRIPTION, $rounds);
}
