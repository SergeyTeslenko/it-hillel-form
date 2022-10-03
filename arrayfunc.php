<?php
//$arr = [
//    ["name" => "Sergey", "age" => 25, "salary" => "125$"],
//    ["name" => "Max", "age" => 20, "salary" => "110$"],
//    ["name" => "Vika", "age" => 36, "salary" => "2000$"],
//];
//$minSalary = 0;
//$salaryArray = [];
//$gatAge = 0;
//$count = count($arr);
//foreach ($arr as $value) {
//    $minSalary = $value;
//    $salaryArray[] = $value["salary"];
//    $getAge = $value["age"];
//
//}


//написать скрипт который будет создавать простой массив (список) с рандомными числами, длина массива 50 элементов.
//$gatAge = $gatAge / $count;
//print_r($getAge);
//$minSalary = min($salaryArray);
//print_r($minSalary);

//1) Сумму всех элементов массива.
//2) Среднее всех элементов массива.
//3) Вывести 5 минимальных чисел из массива.
//4) Вывести 5 максимальных чисел из массива.
//5) Отсортированный массив по возрастанию.
//6) Отсортированный массив по убыванию.

$arr = [];
for ($i = 0; $i <= 50; $i++) {
    $array[] = rand(100, 1000);
}
$sum = array_sum($array);
$arrayCount = count($array);
$getCount = count($array) / 2;
$desc_arr = $array;
$asc_arr = $array;
 asort($desc_arr);
 asort($asc_arr);
var_dump($desc_arr, "=============",$asc_arr);

function recursMin(array $array, int $step, &$values, $max_step = 5, $is_max = false)
{
    if ($is_max){
        $min = max($array);

    }else{
        $min = min($array);

    }
    $values[] = $min;
    $array = array_filter($array, function ($v) use ($min) {
        return $min !== $v;
    });
    if ($step === $max_step || empty($array)) {
        return [$values, $step];
    }
    $step += 1;
    return recursMin($array, $step, $values,$max_step, $is_max);

}

//print_r($array);
//print_r($sum);
//print_r($getCount);
$values = [];

print_r(recursMin($array, 0, $values, 5, false));

