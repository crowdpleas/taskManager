<?php
if(empty($_GET)){
    return 'Не найдено';
}
if(empty($_GET['operation'])){
    return 'Не выбрана система счисления';
}
if(empty($_GET['binar'])){
    return 'Число не введено';
}
$x = $_GET['binar'];
function decimalToBinnar($x){
    return decbin($x);
}
function binnarToDecimal($x){
    return bindec($x);
}
$exp = $x . ' ' . $_GET['operation'] . ' ' . " = " ;
switch ($_GET['operation']) {
    case 'binar':
        $x = binnarToDecimal($x);
        $result = $x;
        break;
    case 'decimal':
        $x = decimalToBinnar($x);
        $result = $x;
        break;
}
return $exp . $result;


