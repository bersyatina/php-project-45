<?php

namespace Code;

function playLogicGame()
{
    $data = [];
    for ($iter = 1; $iter <= GAME_ITERATOR; $iter++) {
        $question = rand(0, 100);
        $question % 2 === 0 ? $answer = 'yes' : $answer = 'no';

        $data[] = [
            'question' => $question,
            'answer' => $answer,
        ];
    }
    getAnswers(CONDITION, $data);
}
