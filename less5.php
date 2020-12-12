<?php
echo "<br><br><br><br><br><br><br><br>";
echo "                                                                                                                    Урок-5 ^-^";
echo "<br><br><br><br><br><br><br><br>";

//

class A
{
	public $str = "свойство";
	public $int = 10;
	private $private = "dont touch";


	public function getPrivate()
	{
		return $this->private;
	}
	
	
	public function setPrivate($str)
	{
	$this->private = $str;
	}		
}

$objA = new A;
$objB = new A;
var_export($objA);
var_export($objB);
$objA->str;
var_export($objA->str);

//$objA->private;
var_export($objA->getPrivate());
$objA->setPrivate("New str");
var_export($objA->getPrivate());
var_export($objB->getPrivate());



//


echo "<br><br><br><br><br><br><br>";
class C extends A
{
	protected $private = 20;
	public function getInt()
	{
	return $this->int;
	}
}
$objC = new C;
var_export($objC);
var_export($objC->getInt());
var_export($objB->getPrivate());


//


echo "<br><br><br><br><br><br><br>";
class D extends C

{
	public function getPrivate()
	{
		return $this->private;
	}
}
$objD = new D;
var_export($objD);



//


class F 
{
	public $a = 10;
	public $b = 10;
	
	
	public function A+B($a+$b)
	{
		$this->private = $str;
	}		
}
$objF = new F;
var_export($objF);