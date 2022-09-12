<?php

namespace Code;

use function cli\line;
use function cli\prompt;

const GAME_ITERATOR = 3;

line('Welcome to the Brain Games!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);

function getAnswers(string $condition, string|int $question, string|int $answer, int $iter, string $name)
{
    line($condition);

    $userQuestion = prompt("Question: $question");

    if ($userQuestion === $answer) {
        line("Your answer: {$question}");
        line("Correct!");
        if ($iter === GAME_ITERATOR) {
            line("Congratulations, {$name}!");
        }
    } else {
        line("Your answer: {$userQuestion}");
        line("'{$userQuestion}' is wrong answer ;(. Correct answer was '{$answer}'.");
        line("Let's try again, $name!");
        die();
    }
}
