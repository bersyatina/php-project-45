<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$name = getName();

const CONDITION = 'Answer "yes" if the number is even, otherwise answer "no".';

for ($iter = 1; $iter <= GAME_ITERATOR; $iter++) {
    $question = rand(0, 100);
    $question % 2 === 0 ? $answer = 'yes' : $answer = 'no';

    getAnswers(CONDITION, $question, $answer, $iter, $name);
}
