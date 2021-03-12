<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

switch ($operator) {
    case 'addition':
        $result = $num1 + $num2;
        echo $num1 . ' + ' . $num2 . ' = ' . $result;
        break;
    case 'subtraction':
        $result = $num1 - $num2;
        echo $num1 . ' - ' . $num2 . ' = ' . $result;
        break;
    case 'multiplication':
        $result = $num1 * $num2;
        echo $num1 . ' * ' . $num2 . ' = ' . $result;
        break;
    case 'division':
        $result = $num1 / $num2;
        echo $num1 . ' / ' . $num2 . ' = ' . $result;
        break;
    default:
        echo '正しい演算子を指定して下さい';
        break;
}