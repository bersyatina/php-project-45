<?php

namespace Code;

const CONDITION = 'What is the result of the expression?';

function playCalcGame()
{
    $data = [];
    $condition = CONDITION;
    for ($iter = 1; $iter <= GAME_ITERATOR; $iter++) {
        $a = rand(1, 100);
        $b = rand(1, 100);

        $operators = ["+", "-", "*"];
        $operator = array_rand($operators);

        switch ($operators[$operator]) {
            case "+":
                $question = "$a + $b";
                $answer = $a + $b;
                break;
            case "-":
                $question = "$a - $b";
                $answer = $a - $b;
                break;
            case "*":
                $question = "$a * $b";
                $answer = $a * $b;
                break;
        }
        $data[] = [
            'question' => $question,
            'answer' => $answer,
        ];
    }

    getAnswers($condition, $data);
}
