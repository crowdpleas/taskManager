<?php
$arr = [['name' => 'dima', 'age' => 18],
        ['name' => 'Yarik', 'age' => 19],
        ['name' => 'Kostya', 'age' => 12]];
$arr[] = ['name' => 'stass', 'age' => 15];
function newUser($name, $age, $job = null)
{
    if ($age >= 18 && $job != null){
         return ['name' => $name, 'age' => $age, 'job' => $job];
    }
    return ['name' => $name, "age" => $age ];
}
function deleteUser($arr,$delIndex=0){
    return array_splice($arr,$delIndex);
}
$arr[] = newUser('Sasha', 17);
// значение delIndex указывает сколько элементов массива нужно удалить.Счет начинаеться с конца массива те - 0 ничего не удалит, 1 удалит последний элемент, 2 последний и пред последний и тд.
$arr = deleteUser($arr, 0);
print_r($arr);

//foreach ($arr as $user){
//        foreach ($user as $key => $value){
//            echo $value."</br>";
//        }
//}

