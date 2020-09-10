<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Урок № 4 - главная</title>
   <link rel="stylesheet" type="text/css" href="css/style1.css">
  </head>
  <body>
 
<h1>Урок №4, массивы.</h1>
<?php
echo 'Обычный массив'.'<br>';
  $arr_study = [1, 2, 3, "dog", "apple", "true"];
  echo "четвёртый - ".$arr_study[3].'<br>';
  echo '<br';
echo 'Асоциативный массив'.'<br>';
  $arr_study_asoc = [
               'van' => 1,
               'two' => 2,
               'three' => 3,
               'foure' => 'dog',
               'five' => 'apple',];
  echo "четвёртый - ".$arr_study_asoc['foure'].'<br>';

 $arr_sum = $arr_study + $arr_study_asoc; 
var_export($arr_sum); // выведение массива
echo '<br><br>';
echo 'Переназнчение ключей'.'<br>';
var_export(array_values($arr_sum)); // создание массива с номерными ключами
echo '<br>';

$arr_1 = [
         'van' => 1,
         'two' => 2,
         'three' => 3,];

$arr_2 = [ 
          'two' => 2,
          'van' => 1,
          'three' => 3,];

$arr_3 = [
         'two' => 2,
         'three' => 3,
         'van' => 1,];

echo 'arr_1 - '.$arr_1['two'].'<br>';
echo 'arr_2 - '.$arr_2['two'].'<br>';
echo 'arr_3 - '.$arr_3['two'].'<br>'; 
echo '<br>';
echo 'После переназнчения ключей'.'<br>';
echo 'arr_1 - '; var_export(array_values($arr_1)); echo '<br>';
echo 'arr_2 - '; var_export(array_values($arr_2)); echo '<br>'; 
echo 'arr_3 - '; var_export(array_values($arr_3)); echo '<br>';
echo '<br>';
echo 'Вывидение ключей - '.'arr_study_aso'.'<br>';
var_export(array_keys($arr_study_asoc));
echo '<br><br>';

echo 'Вывидение первыхтрёх элиментов массива - '.'arr_study_aso'.'<br>';
var_export(array_slice($arr_study_asoc, 0, 3));

echo '<br><br>';
echo 'Вложенные массивы'.'<br>';
$arr_base = [
   $arr_a =  [a1, a2, a3],
   $arr_b =  [b1, b2, b3],
   $arr_c =  [c1, c2, c3]
  ];



foreach ($arr_base as $value) {
  echo '<br>';
  echo '|';
    foreach ($value as $value1) {
         echo $value1.'|';
  }
  }

?>

  </body>
</html>