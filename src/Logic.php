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

line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);

line('Answer "yes" if the number is even, otherwise answer "no".');

for ($i = 0; $i < 3; $i++) {
    $rand = rand(0, 100);
    $question = prompt("Question: $rand");
    if ($rand % 2 === 0) {
        if ($question == "yes") {
            line("Your answer: $question");
            line("Correct!");
        }
        else {
            line("'$question' is wrong answer ;(. Correct answer was 'yes'.");
            line("Let's try again, $name!");
            break;
        }
    } else {
        if ($question == "no") {
            line("Your answer: $question");
            line("Correct!");
        }
        else {
            line("'$question' is wrong answer ;(. Correct answer was 'no'.");
            line("Let's try again, $name!");
            break;
        }
    }
    if ($i === 2) {
        line("Congratulations, $name!");
    }
}


