<?php

namespace Code;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function cli\line;
use function cli\prompt;

function getGreeting()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function getAnswers($condition, $question, $answer, $break, $name)
{
    line($condition);

    $userQuestion = prompt("Question: $question");

    if ($userQuestion == $answer) {
        line("Your answer: $question");
        line("Correct!");
    } else {
        line("Your answer: $userQuestion");
        line("'$userQuestion' is wrong answer ;(. Correct answer was '$answer'.");
        line("Let's try again, $name!");
        die();
    }

    if ($break === true) {
        line("Congratulations, $name!");
    }
}
