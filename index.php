<?php
echo "Задание №2: знакомство с документацией"."\n\n";
echo "Файл: ".__FILE__.", строка ".__LINE__."\n";

$hello = "Привет!";

$text = <<<EOF
$hello
Это пример использования heredoc синтаксиса в PHP. Heredoc позволяет создавать строки, которые могут содержать 
переменные и специальные символы без необходимости экранирования. 
Переменные внутри heredoc будут интерполированы, что делает его удобным для создания больших блоков текста.
EOF;

echo $text."\n";

$a = 'Рыба';
$b = 'человек';

echo $a." ".mb_strtolower(mb_substr($a, 0, 3))."ою сыта, а ".$b." ".$b."ом".".\n";

echo "Задание №3: определение типа переменной"."\n\n";

$variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
// $variable = [];

if (is_bool($variable)) {
    $type = 'bool';
} elseif (is_float($variable)) {
    $type = 'float';
} elseif (is_int($variable)) {
    $type = 'int';
} elseif (is_string($variable)) {
    $type = 'string';
} elseif (is_null($variable)) {
    $type = 'null';
} else {
    $type = "other";
}

echo "type is ".$type."\n";

switch (true) {
    case is_bool($variable):
        $type = 'bool';
        break;
    case is_float($variable):
        $type = 'float';
        break;
    case is_int($variable):
        $type = 'int';
        break;
    case is_string($variable):
        $type = 'string';
        break;
    case is_null($variable):
        $type = 'null';
        break;
    default:
        $type = 'other';
}

echo "type is $type\n";
