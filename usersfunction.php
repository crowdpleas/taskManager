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
$arr[] = newUser('Sasha', 17);
function deleteUser($arr,$offset=0){
    return ($arr = array_splice($arr,$offset));
}
$arr = deleteUser($arr, 0);
print_r($arr);

//foreach ($arr as $user){
//        foreach ($user as $key => $value){
//            echo $value."</br>";
//        }
//}

