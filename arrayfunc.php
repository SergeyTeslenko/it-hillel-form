<?php
//простой массив (список) с рандомными числами, длина массива 50 элементов.
for ($i = 0; $i <= 50; $i++) {
    $array[] = rand(100, 1000);
}

//1) Сумму всех элементов массива.
$arraySum = array_sum($array);
var_dump($arraySum);

//2) Среднее всех элементов массива.
$nums = $array;
echo array_sum($nums)/count($nums);
var_dump($nums);

//3) Вывести 5 минимальных чисел из массива.
function getMax($array)
{
    $n = count($array);
    $max = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($max < $array[$i])
            $max = $array[$i];
    return $max;
}
echo(getMax($array));
echo "<br>";
//4) Вывести 5 максимальных чисел из массива.
function getMin($array)
{
    $n = count($array);
    $min = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($min > $array[$i])
            $min = $array[$i];
    return $min;
}
echo(getMin($array));
echo "<br>";

//5) Отсортированный массив по возрастанию.
echo "--->массив по возрастанию<-----";
$desc_arr = $array;
asort($desc_arr);
var_dump($desc_arr);
//6) Отсортированный массив по убыванию.
echo "--->массив по убыванию<-----";
$asc_arr = $array;
 arsort($asc_arr);
var_dump($asc_arr);

//function recursMin(array $array, int $step, &$values, $max_step = 5, $is_max = false)
//{
//    if ($is_max){
//        $min = max($array);
//    }else{
//        $min = min($array);
//    }
//    $values[] = $min;
//    $array = array_filter($array, function ($v) use ($min) {
//        return $min !== $v;
//    });
//    if ($step === $max_step || empty($array)) {
//        return [$values, $step];
//    }
//    $step += 1;
//    return recursMin($array, $step, $values,$max_step, $is_max);
//}
//print_r(recursMin($array, 0, $values, 5, false));


