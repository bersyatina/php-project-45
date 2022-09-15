<?php

namespace Code;

use function cli\line;
use function cli\prompt;

const GAME_ITERATOR = 3;

function getAnswers(string $condition, array $data)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    foreach ($data as $value) {
        line($condition);

        $userQuestion = prompt("Question: {$value['question']}");

        if ($userQuestion == $value['answer']) {
            line("Your answer: {$userQuestion}");
            line("Correct!");
        } else {
            line("Your answer: {$userQuestion}");
            line("'{$userQuestion}' is wrong answer ;(. Correct answer was '{$value['answer']}'.");
            line("Let's try again, $name!");
            die();
        }
    }

    line("Congratulations, {$name}!");
}
