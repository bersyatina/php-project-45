<?php

require("vendor/autoload.php");

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

// eq означает equal

Assert::eq(capitalize(''), '');
// Первый параметр actual – то, что пришло
// Второй параметр expected – то, что ожидает тест
// Правильный порядок аргументов имеет большое значение при анализе ошибки

Assert::eq(capitalize('hello'), 'Hello');

echo 'Все тесты пройдены!';