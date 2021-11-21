<?php
    function getSumm(){
        $summ=$number1+$number2;
    }
    function getMultiply(){
        $multiply=$summ*$number3;
    }
// Hаписати функцію яка приймає результати цих фунцій робить шось з ними я вибрав вычитание от второго первое
    function getResult(){
        $result=$multiply-$summ;
        return $result;
    }