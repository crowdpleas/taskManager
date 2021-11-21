<?php

    if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['number3'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];
        $summ = $number1+$number2;
        $multiply = $summ*$number3;
        function getResult($summ,$multiply)
        {
            $result = $multiply-$summ;
            return $result;
        }
        header('Location:/dust2');
        }


