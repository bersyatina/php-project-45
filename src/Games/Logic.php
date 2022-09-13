<?php

namespace Code;

require_once __DIR__ . '/../Engine.php';

$name = getName();

$condition = 'Answer "yes" if the number is even, otherwise answer "no".';

for ($iter = 1; $iter <= GAME_ITERATOR; $iter++) {
    $question = rand(0, 100);
    $question % 2 === 0 ? $answer = 'yes' : $answer = 'no';

    getAnswers($condition, $question, $answer, $iter, $name);
}
