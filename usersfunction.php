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
function deleteUser(&$arr,$delIndex,$lenght)
{
      return array_splice($arr,$delIndex,$lenght);
}
$arr[] = newUser('Sasha', 17);
deleteUser($arr, 2,1);
print_r($arr);

//foreach ($arr as $user){
//        foreach ($user as $key => $value){
//            echo $value."</br>";
//        }
//}

