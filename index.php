<?php
// Получить остаток деления 7 на 3
$a=7;
$b=3;
echo "Получить остаток деления 7 на 3<br>";
echo $a%$b;

// Получить целую часть сложения 7 и 7,15
$a=7;
$b=7.15;
echo "<br>";
echo "<br>";
echo "Получить целую часть сложения 7 и 7,15:<br>";
echo intval($a + $b);

// Получить корень из 25
$a=25;
echo "<br>";
echo "<br>";
echo "Получить корень из 25:<br>";
echo sqrt($a);

// Получить 4-е слово из фразы - Десять негритят пошли купаться в море
$a = 'Десять негритят пошли купаться в море';
echo "<br>";
echo "<br>";
echo "Получить 4-е слово из фразы - Десять негритят пошли купаться в море:<br>";
echo "Да как такое делать!?<br> ";
echo explode(' ',  $a)[3];

// Получить 17-й символ из фразы - Десять негритят пошли купаться в море
$a = 'Десять негритят пошли купаться в море';
echo "<br>";
echo "<br>";
echo "Получить 17-й символ из фразы - Десять негритят пошли купаться в море:<br>";
echo $a[16];

// Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море
$a = 'Десять негритят пошли купаться в море';
echo "<br>";
echo "<br>";
echo "Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море:<br>";
echo "(Код верный, но с русским текстом не дружит, хотя может проблема в браузере)";
echo "<br>";
echo ucwords($a);

// Посчитать длину строки - Десять негритят пошли купаться в море
$a = 'Десять негритят пошли купаться в море';
echo "<br>";
echo "<br>";
echo "Посчитать длину строки - Десять негритят пошли купаться в море<br>";
echo strlen($a);

// Правильно ли утверждение true равно 1
$a = 'true';
echo "<br>";
echo "<br>";
echo "Правильно ли утверждение true равно 1?";
echo "<br>";
echo $a == 1;
echo "ага";


// Правильно ли утверждение false тождественно 0
$a = 'false';
echo "<br>";
echo "<br>";
echo "Правильно ли утверждение false тождественно 0?";
echo "<br>";
echo $a === 0;
echo "Не-а";

// Какая строка длиннее three - три
$a = "three";
$b = "five";
echo "<br>";
echo "<br>";
echo "Какая строка длиннее three - три";
echo "<br>";
echo strlen($a) > strlen($b);


// Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2
$a = 125 * 13 + 7;
$b = 223 + 28 * 2;
echo "<br>";
echo "<br>";
echo "Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2?<br>";
echo $a > $b ? 'первое больше' : ($a < $b ? 'второе больше' : 'равны');




























