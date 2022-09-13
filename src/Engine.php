<?php

namespace Code;

use function cli\line;
use function cli\prompt;

const GAME_ITERATOR = 3;

function getName()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function getVictory($name)
{
    line("Congratulations, {$name}!");
}

function getAnswers(string|int $question, string|int $answer, int $iter, string $name)
{
    line(CONDITION);

    $userQuestion = prompt("Question: $question");

    if ($userQuestion == $answer) {
        line("Your answer: {$question}");
        line("Correct!");
        if ($iter === GAME_ITERATOR) {
            getVictory($name);
        }
    } else {
        line("Your answer: {$userQuestion}");
        line("'{$userQuestion}' is wrong answer ;(. Correct answer was '{$answer}'.");
        line("Let's try again, $name!");
        die();
    }
}
