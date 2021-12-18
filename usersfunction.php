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
//function editUser($arr, $key, $name, $age, $job){
$arr2 = [['name'=>'vasya','age'=>25,'job'=>'bomj'],
         ['name'=>'volodya','age'=>31,'job'=>'student'],
         ['name'=>'viktor','age'=>19,'job'=>'teacher']];
function editUser(&$arr2, $id, $name, $age, $job){
    $arr2[$id] = ['name' => $name,'age'=>$age,'job'=>$job];
    //$arr2[$id] = ['age'=>$age];
    //$arr2[$id] = ['job'=>$job];
}

$arr[] = newUser('Dimka', 19, 'zavod');
$arr[] = newUser('Oleg',17,'bussinesment');
//deleteUser($arr, 2,1);
//$arr[] = editUser($arr, 1, 'dima',18,'zavod');
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<pre>";
print_r($arr[2]);
echo "</pre>";
echo "<pre>";
print_r($arr2);
echo "</pre>";
echo "<pre>";
$arr2[] = editUser($arr2, 1,'oleg',25,'reporter');
print_r($arr2);
echo "</pre>";
;