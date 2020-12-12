<?php

//Создать родительский (главный класс)
//
//Класс должен содержать 2 свойства
//
//Каждое свойство должно иметь геттеры и сеттеры
class p
{
    protected $a;

    private $b;

    public function getA() {
        return $this->a;
    }

    public function setA($v) {
        $this->a = $v;
    }

    public function getB() {
        return $this->b;
    }

    public function setB($v) {
        $this->b = $v;
    }
}

//Создать 3 наследника родительского класса
//
//Каждый наследник должен содержать одно свойство
//
//Каждое свойство должно иметь геттер и сеттер
//
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//
//Один наследник не должен быть наследуемым
//
//Один из наследников должен содержать абстрактную функцию возведения в степень

class c1 extends p
{
    protected $c;

    public function getC() {
        return $this->c;
    }

    public function setC($v) {
        $this->c = $v;
    }

    public function s() {
        return $this->a + $this->getB() + $this->c;
    }
}

abstract class c2 extends p
{
    protected $c;

    public function getC() {
        return $this->c;
    }

    public function setC($v) {
        $this->c = $v;
    }

    public function m() {
        return $this->a * $this->getB() * $this->c;
    }

    abstract public function pow(int $r);
}

final class c3 extends p
{
    protected $c;

    public function getC() {
        return $this->c;
    }

    public function setC($v) {
        $this->c = $v;
    }

    public function t() {
        return $this->a + $this->getB() - $this->c;
    }
}

//Создать по 2 наследника от наследников первого уровня
//
//Каждое свойство должно иметь геттер и сеттер
//
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//
//И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
//
//В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции

class g1 extends c1 {
    protected $g;

    public function getG() {
        return $this->g;
    }

    public function setG($v) {
        $this->g = $v;
    }

    public function gr() {
        return $this->c - $this->g;
    }

    public function ggr() {
        return $this->a + $this->getB() - $this->g;
    }
}

class g2 extends c2 {
    protected $g;

    public function getG() {
        return $this->g;
    }

    public function setG($v) {
        $this->g = $v;
    }

    public function pow(int $r) {
        return pow($this->g, $r);
    }

    public function n() {
        return 0 - $this->g - $this->c;
    }

    public function gnu() {
        return 0 - $this->g - $this->a - $this->getB();
    }
}

/////////////////////

$sg = new g1();
$sg->setA(1);
$sg->setB(2);
$sg->setC(3);
$sg->setG(4);

$sg2 = new g2();
$sg2->setA(4);
$sg2->setB(3);
$sg2->setC(2);
$sg2->setG(5);

$sc = new c1();
$sc->setA(13);
$sc->setB(12);
$sc->setC(11);

$sc3 = new c3();
$sc3->setA(11);
$sc3->setB(12);
$sc3->setC(13);



echo $sg->gr();
echo "<br><br>";
echo $sg->ggr();
echo "<br><br>";
echo $sg->s();
echo "<br><br>";
echo "<br><br>";
echo $sg2->m();
echo "<br><br>";
echo $sg2->n();
echo "<br><br>";
echo $sg2->gnu();
echo "<br><br>";
echo $sg2->pow(10);
echo "<br><br>";
echo "<br><br>";
echo $sc3->t();

