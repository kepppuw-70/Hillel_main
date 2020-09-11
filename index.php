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

<?php
  $numberIsInt = is_int($_POST["number"]);
  if($numberIsInt) { 
    //Do something
  } else {
    //Return error or do something else
  }
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

echo 'Не передаём переменнкю';
unset ($var);
data_type_definition($var);
echo '<br>';



?>
<br>

<h3>Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false</h3>

не успел

<h3>Создать функцию которая считает сумму значений всех элементов массива произвольной глубины</h3>

<br>
не успел
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










<!--
<form action="index.php" method="POST">

Введите переменную:<input type="text" name="var">

<br>
<input type="submit" value="Ввести">
</form>
-->
<?php 
/*
$var = $_POST["var"];
$var_pieces = explode(" ", $var);
echo 'var - '.($var + 1).'<br>';
  if(is_int($var/1) == 1 && $var != 'true' && $var != 'false'  && $var + 1 != '1' || $var == 0) { 
    $x =  'целое число';
  } 
  if(is_double($var/1) == 1) { 
    $x =  'числа с плавающей точкой';
  }
  if($var == 'true' || $var == 'false' || $var == 'TRUE' || $var == 'FALSE') { 
    $x =  'булев';
  }
  
  if($var_pieces[0] == 'new') { 
    $x =  'обьект';
  }
  $var_null = $var.'1';
  if(($var_null) == '1' && $var != 0) { 
    $x =  'NULL';
  }
  
echo 'Введено - '.$x;
*/

?>












  </body>
</html> 

