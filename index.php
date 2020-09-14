<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Домашнее задание № 5 - главная</title>
   <link rel="stylesheet" type="text/css" href="css/style2.css">
   
  </head>
  <body>

<?php
  include 'php_function/functionPHP.php'; 
?>



<h3>Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение, если данные не переданы то вывести соответствующее сообщение.</h3>

<?php
echo 'Вводим - 1'.'<br>';
$var = 1;
data_type_definition($var);
echo '<br>';

echo 'Вводим - массив'.'<br>';
$var = [23, 57, 23, 67];
data_type_definition($var);
echo '<br>';

echo 'Вводим - 1.1'.'<br>';
$var = 1.1;
data_type_definition($var);
echo '<br>';

echo 'Вводим - true'.'<br>';
$var = true;
data_type_definition($var);
echo '<br>';

echo 'Вводим - qqqdfdgg'.'<br>';
$var = 'qqqdfdgg';
data_type_definition($var);
echo '<br>';

echo 'Вводим - Обьект new stdClass'.'<br>';
$var = new stdClass;
data_type_definition($var);
echo '<br>';

echo 'Передаём - NULL'.'<br>';
$var = NULL;
data_type_definition($var);
echo '<br>';

echo 'Передаём - fopen("index.php", "r")'.'<br>';
$var = fopen("index.php", 'r');
data_type_definition($var);
echo '<br>';

echo 'Не передаём переменнкю'.'<br>';
unset ($var);
data_type_definition($var);
echo '<br>';
echo '<br>';
/**/


?>
<br>

<h3>Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false</h3>

<?php

echo 'Передаём строку - gnbvhjb fgfhbnbvbbf fgfbfdbfg'.'<br>';
$string = 'gnbvhjb fgfhbnbvbbf fgfbfdbfg';
echo 'Ответ: ';
if (reed_b($string) != false) {
    echo 'в строке - '.reed_b($string).'b';
  } else {
    echo 'Ошибка, передана не строка';
  }

echo '<br><br>';

echo 'Передаём целое число - 123'.'<br>';
$string = 123;
echo 'Ответ: ';
if (reed_b($string) != false) {
    echo 'в строке - '.reed_b($string).'b';
  } else {
    echo 'ошибка, передана не строка';
  }
  
?>



<h3>Создать функцию которая считает сумму значений всех элементов массива произвольной глубины</h3>

<?php

echo 'Создаём массив:<br>';
echo '<h3>$firstArr = [
          <p>'."'".'one'."'".' => 1,'.'</p>
          <p>'."'".'two'."'".' => ['.'</p>
             <p class="mar">'."'".'one'."'".' => 1,'.'</p>
             <p class="mar">'."'".'seven'."'".' => 22,'.'</p>
             <p class="mar">'."'".'three'."'".' => 32,'.'</p>
          <p>],</p>
          <p>'."'".'three'."'".' => ['.'</p>
             <p class="mar">'."'".'one'."'".' => 1,'.'</p>
             <p class="mar">'."'".'two'."'".' => 2,'.'</p>
          <p>],</p>
          <p>'."'".'foure'."'".' => 5,'.'</p>
          <p>'."'".'five'."'".' => ['.'</p>
             <p class="mar">'."'".'three'."'".' => 32,'.'</p>
             <p class="mar">'."'".'foure'."'".' => 5,'.'</p>
             <p class="mar">'."'".'five'."'".' => 12,'.'</p>
          <p>],</p>
      ];
      </h3>';

$arr = [
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


echo 'Ответ: ';

echo 'сумма всех значений массива - '.count_sum_var_in_array($arr);

echo '<br><br>';


?>

<br>

<h3>Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float</h3>

<form action="index.php" method="POST">

Введите длинну стороны первого квадрата:<input type="text" name="a" required>
<br>
Введите длинну стороны второго квадрата:<input type="text" name="b" required>
<br>
<input type="submit" value="Ввести">
</form>
<?php 

$a = trim($_POST['a']);
$b = trim($_POST['b']);

inscribing_squares($a, $b);

?>


  </body>
</html> 

