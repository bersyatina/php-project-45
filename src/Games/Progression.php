<?php

namespace Code;

const CONDITION = 'What number is missing in the progression?';

function playProgressionGame()
{
    $rounds = [];

    for ($iter = 1; $iter <= ROUNDS_COUNT; $iter++) {
        $start = rand(1, 5);
        $end = 100;
        $step = rand(5, 15);

        $array = range($start, $end, $step);

        $answer = $array[array_rand($array)];

        $question = '';

        foreach ($array as $value) {
            if ($value == $answer) {
                $question .= '..';
            } else {
                $question .= $value;
            }
            $question .= ' ';
        }
        $question = rtrim($question);

        $rounds[] = [
            'question' => $question,
            'answer' => $answer,
        ];
    }
    getAnswers(CONDITION, $rounds);
}
