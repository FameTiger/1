<?php


// Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение, если данные не переданы то вывести соответствующее сообщение.


 Function Fame($data = null)
{
	if($data === null)
	{
		echo "Не передано";
		
	}
	else {
	echo gettype($data);
	}
}
Fame(4545.10);


// Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false


echo "<br><br><br><br><br><br><br>";

function NotFame($a)
{
	if(is_string($a))
	{
		return substr_count($a, "b");
}
 else return false;
}
 echo NotFame("<br><br><br><br><br><br><br>");
 
 
 // Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
 
 
  echo "<br><br><br><br><br><br><br>";
 
 $arr = [
'1' => 10,
'2' => 
[
	'1' => 20,
	'2' => 30,
	'3' => [ 123, 124
],
],
'3' => 50,
];
function arrSum($b)
{
	$summa = array_sum($b);	
	foreach($b as $a)
	{
		if(is_array($a))
		{
			$summa+=arrSum($a);
		}
	}
	return $summa;
}
echo arrSum($arr);
echo "<br><br>";


//Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float


function bigFame2($bigsq, $smallsq)
{
  return pow(floor($bigsq / $smallsq), 2);
}

echo bigFame2(5, 2);

