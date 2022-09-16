<?php

namespace Code;

const CONDITION = 'Find the greatest common divisor of given numbers.';

function playGcdGame()
{
    $rounds = [];
    for ($iter = 1; $iter <= ROUNDS_COUNT; $iter++) {
        $a = rand(1, 100);
        $b = rand(1, 100);

        $question = "$a $b";

        while ($b != 0) {
            $m = $a % $b;
            $a = $b;
            $b = $m;
        }
        $answer = $a;

        $rounds[] = [
            'question' => $question,
            'answer' => $answer,
        ];
    }
    getAnswers(CONDITION, $rounds);
}
