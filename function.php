<?php
$summ = 0;
$multiply = 0;
$res = 0;
function getSumm($number1, $number2)
{
    return $number1 + $number2;
}

function getMultiply($number3, $summ)
{
    return $summ * $number3;
}

// Hаписати функцію яка приймає результати цих фунцій робить шось з ними я вибрав вычитание от второго первое
function getRes($multiply, $summ)
{
    echo $multiply - $summ;
}

$number1 = 6;
$number2 = 6;
$summ = getSumm($number1, $number2);
$number3 = 2;
$multiply = getMultiply($number3, $summ);
$res = getRes($multiply, $summ);
