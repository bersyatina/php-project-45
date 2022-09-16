<?php

namespace Code;

function playGcdGame()
{
    $data = [];
    for ($iter = 1; $iter <= GAME_ITERATOR; $iter++) {
        $a = rand(1, 100);
        $b = rand(1, 100);

        $question = "$a $b";

        while ($b != 0) {
            $m = $a % $b;
            $a = $b;
            $b = $m;
        }
        $answer = $a;

        $data[] = [
            'question' => $question,
            'answer' => $answer,
        ];
    }
    getAnswers(CONDITION, $data);
}
