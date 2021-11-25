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
// значение delIndex указывает сколько элементов нужно удалить
// счет начинаеться от нуля .те если $delIndex(2) мы удалим 2 элемента массива array[0,1]
//после удаленния индекс сдвигается .те если раньше 3 элемент массива был под индексом [2] то после удаления элементов которые были впереди него -
//[0,1] данному элементу присвоим новое значенние [0] тк впереди него больше нету элементнов и теперь его можно считать первым элементом
deleteUser($arr, 2,1);
print_r($arr);

//foreach ($arr as $user){
//        foreach ($user as $key => $value){
//            echo $value."</br>";
//        }
//}

