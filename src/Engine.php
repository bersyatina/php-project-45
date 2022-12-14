<?php

namespace Code;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function playGame(string $description, array $rounds)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    foreach ($rounds as $round) {
        line($description);

        $userAnswer = prompt("Question: {$round['question']}");

        if ($userAnswer == $round['answer']) {
            line("Your answer: {$userAnswer}");
            line("Correct!");
        } else {
            line("Your answer: {$userAnswer}");
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$round['answer']}'.");
            line("Let's try again, $name!");
            return;
        }
    }

    line("Congratulations, {$name}!");
}
