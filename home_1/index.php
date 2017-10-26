<?php

//3
var_dump(3 / 1);  //int(3)
var_dump(1 / 3);  //float(0.33333333333333)
var_dump('20cats' + 40);    //int(60)
var_dump(18 % 4);   //int(2)
//--------------------------------------------------------

//4
echo($a = 2);
$x = ($y = 12) - 8;
echo $x;    //4
//Значением выражения присваивания является выражения, которое стоит справа от знака присваивания.
//----------------------------------------------------------------

//5
var_dump(1 == 1.0); //true
var_dump(1 === 1.0);  //false
var_dump('02' == 2);  //true
var_dump('02' === 2); //false
var_dump('02' == '2');    //true
//Знак == это оператор сравнение значений
//Знак === это оператор сравнеия значений и типов -> int != float , int == int
// ----------------------------------------------------------------------------

//6
$x = true xor true;
var_dump($x);   //bool(true)

$x = true xor false;
var_dump($x); //bool(true)

$x = false xor false;
var_dump($x); //bool(false)

//Забавно false выводится только когда оба операнда false. По идеи исключающего или
// true должно выводится когда оба операнда разные
//хотя

echo true xor true; //ничего - то есть false
echo false xor true; //1 - то есть true

