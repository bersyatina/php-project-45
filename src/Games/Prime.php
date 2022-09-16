<?php

namespace Code;

function playPrimeGame()
{
    $data = [];

    for ($iter = 1; $iter <= GAME_ITERATOR; $iter++) {
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
        $data[] = [
            'question' => $question,
            'answer' => $answer,
        ];
    }
    getAnswers(CONDITION, $data);
}
