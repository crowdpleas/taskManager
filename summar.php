<?php
$number = 123;
function splitNumber($number){
     $number = str_split($number);
     return $number;
}
function arraySum($arr){
    array_sum($arr);
    return $arr;
}
echo "<pre>";
print_r($number);
echo "</pre>";
echo "<pre>";
$number = splitNumber(133);
print_r($number);
echo "</pre>";
echo "<pre>";
$summ = array_sum($number);
print_r($summ);
echo "</pre>";
function searchNum($number2, $search){

    $count = substr_count($number2, $search);
    return $count;
    return $number2 = $number2;

}
echo "<pre>";
$search = 7;
$count = searchNum(7421774721,7);
echo 'Цифра' .' <pre>'. $search. '</pre>' .'<pre>' .'встречалась в числе' .'</pre>'. $number2. '<pre>'. $count. 'раз(а)'. '</pre>';
echo "</pre>";

