<?php
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


// ААААААААААААААААААААААААААААААА

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
 
 
 // ЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫ
 
 
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
echo "357=";









// На этом мои полномочия закончены. Благодарю за внимание <3 