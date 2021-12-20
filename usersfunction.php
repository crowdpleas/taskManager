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
$arr2 = [['name'=>'dimka_goshta','age'=>19,'job'=>'bussinesment'],
    ['name'=>'volodya','age'=>31,'job'=>'student'],
    ['name'=>'viktor','age'=>19,'job'=>'teacher']];
function editUser($arr, $id, $name, $age, $job = null)
{
    if ($age >= 18 && $job != null){
        $arr[$id] = ['name' => $name,'age' => $age,'job' => $job];
        return $arr;
    }
    $arr[$id] = ['name' => $name, 'age' => $age];
    return $arr;
}
$arr[] = newUser('Dimka', 19, 'zavod');
$arr[] = newUser('Oleg',19,'bussinesment');
//deleteUser($arr, 2,1);
//$arr[] = editUser($arr, 1, 'dima',18,'zavod');
echo "<pre>";
$arr = editUser($arr,3,'dimka',18,'teacher');
print_r($arr);
echo "</pre>";
echo "<pre>";
//print_r($arr2);
echo "</pre>";
echo "<pre>";
//$arr2 = editUser($arr2, 1, 'Sasha', 19);
//print_r($arr2);
echo "</pre>";
