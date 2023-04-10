<?php 
// Практическая работа

// if

// 1) Напишите программу, которая выводит на экран сообщение в зависимости от возраста пользователя:

// Если возраст меньше 18 лет, выведите "Вы несовершеннолетний"
// Если возраст больше, или равен 18 и меньше, либо равно 65 лет, выведите "Вы взрослый"
// Если возраст больше 65 лет, выведите "Вы пенсионер"

$year = 100;
function string($year){
   if ($year<18){
      return 'Вы несовершеннолетний';
   }
   elseif ($year>=18 && $year<=65)
   {
      return 'Вы взрослый';
   }
   elseif ($year>65)
   {
      return 'Вы пенсионер';
   }
}
echo string($year);


// 2) Напишите программу, которая проверяет, является ли введенное пользователем число четным или нечетным, и выводит соответствующее сообщение:

// Если число четное, выведите "Число является четным"
// Если число нечетное, выведите "Число является нечетным"

$num = 1;
function number($num) {
  if ($num % 2){
    return'Число является четным';
  } 
  else {
    return 'Число является нечетным';
  }
}
  echo number($num);

// ======================================================================================

// switch

// 1) Напишите программу, которая выводит на экран сообщение в зависимости от значения переменной $dayOfWeek (от 1 до 7), которая содержит номер дня недели:

$dayOfWeek= 4;
switch ($dayOfWeek) {
  case $dayOfWeek==1;
  print("Понедельник");
  break;
  case $dayOfWeek==2;
  print("Вторник");
  break;
  case $dayOfWeek==3;
  print("Среда");
  break;
  case $dayOfWeek==4;
  print("Четверг");
  break;
  case $dayOfWeek==5;
  print("Пятница");
  break;
  case $dayOfWeek==6;
  print("Суббота");
  break;
  case $dayOfWeek==7;
  print("Воскресенье");
  break;
}


// 2) Напишите программу, которая определяет количество дней в месяце, в зависимости от значения переменной $month (от 1 до 12), которая содержит номер месяца:

// Если $month равно 2, выведите "В этом месяце 28 дней"
// Если $month равно 4, 6, 9 или 11, выведите "В этом месяце 30 дней"
// Во всех остальных случаях выведите "В этом месяце 31 день"

$month = 12;
switch ($month) {
  case $month==2;
  print("В этом месяце 28 дней");
  break;
  case $month==4;
  print("В этом месяце 30 дней");
  break;
  case $month==6;
  print("В этом месяце 30 дней");
  break;
  case $month==9;
  print("В этом месяце 30 дней");
  break;
  case $month==11;
  print("В этом месяце 30 дней");
  break;
  default;
  echo ('В этом месяце 31 день');
}

// ======================================================================================
// match
// 1) Напишите программу, которая принимает на вход строку и определяет, является ли она палиндромом (т.е. читается одинаково в обоих направлениях), используя конструкцию match и функцию strrev:

// $string = "level";
// strrev(string $string): string

$string='level';
$Palindrome=match($string){
  'level'=strrev($string) => 'палиндромом'
};


// 2) Напишите программу, которая принимает на вход число и определяет, является ли оно четным, кратным 3 или кратным 5, используя конструкцию match:

// $number = 15;
// $result = match (true) {
	
// };

// echo $result;




// ======================================================================================
// while

// 1) Задача на поиск суммы нечетных чисел от 1 до N:

// $num = 10;
// $sum = 0;
// $i = 1;



// 2) Задача на поиск первого положительного числа, кратного 7:

// $i = 1;

// while (true) {

// }

// ======================================================================================
// for

// 1) Поиск суммы элементов массива:

// $numbers = [1, 2, 3, 4, 5];
// $sum = 0;
// w

// 2) Собрать массив четных чисел из входного массива:

// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $evenNumbers = [];


// ======================================================================================
// foreach

// 1) Добавить новый элемент в ассоциативный массив и вывести все значения данного массива

// 2) Объединение нескольких ассоциативных массивов в один и вывести результат (ключ, значение), через foreach