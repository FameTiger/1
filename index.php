<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];


// посчитать длину массива
$length = count($arr);

echo $length;
echo "\n<br>\n";


// переместить первые 4 элемента массива в конец массива
$temp = array_splice($arr, 0, 4);
$arr = array_merge($arr, $temp);

var_export($arr);
echo "\n<br>\n";


// получить сумму 4,5,6 элемента
$sum = $arr[3] + $arr[4] + $arr[5];

echo $sum;
echo "\n<br>\n";




$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];


// найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$result = array_diff_key($secondArr, $firstArr);

var_export($result);
echo "\n<br>\n";

$result = array_diff_assoc($secondArr, $firstArr);

var_export($result);
echo "\n<br>\n";


// найти все элементы которые присутствую в первом и отсутствуют во втором
$result = array_diff_key($firstArr, $secondArr);

var_export($result);
echo "\n<br>\n";

$result = array_diff_assoc($firstArr, $secondArr);

var_export($result);
echo "\n<br>\n";


// найти все элементы значения которых совпадают
$result = array_intersect($firstArr, $secondArr);// + array_intersect($secondArr, $firstArr);

var_export($result);
echo "\n<br>\n";

// найти все элементы значения которых отличается
$result = array_diff($firstArr, $secondArr) + array_diff($secondArr, $firstArr);

var_export($result);
echo "\n<br>\n";




$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];


// получить все вторые элементы вложенных массивов
$result = [];
foreach ($firstArr as $arr) {
    if (is_array($arr)) {
        $result += array_slice($arr, 1 , 1);
    }
}

var_export($result);
echo "\n<br>\n";


// получить общее количество элементов в массиве
$count = count($firstArr);
foreach ($firstArr as $arr) {
    if (is_array($arr)) {
        $count += count($arr);
    }
}

echo $count;
echo "\n<br>\n";

// получить сумму всех значений в массиве
$sum = 0;
foreach ($firstArr as $arr) {
    if (is_array($arr)) {
        $sum += array_sum($arr);
    } else {
        $sum += $arr;
    }
}

echo $sum;
echo "\n<br>\n";