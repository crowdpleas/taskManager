<?php
function getSumm($number1,$number2){
    $summ = 0;
    $summ=$number1+$number2;
    return $summ;
}
function getMultiply($number3,$summ){
    $multiply = 0;
    $multiply=$summ*$number3;
    return $multiply;
}
// Hаписати функцію яка приймає результати цих фунцій робить шось з ними я вибрав вычитание от второго первое
function getRes($multiply,$summ){
    $res = 0;
    $res=$multiply-$summ;
    echo $res;
}
$number1 = 4;
$number2 = 6;
$summ = getSumm($number1,$number2);
$number3 = 2;
$multiply = getMultiply($number3,$summ);
$res = getRes($multiply,$summ);
