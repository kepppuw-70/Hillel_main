<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Домашнее задание № 4 - главная</title>
   <link rel="stylesheet" type="text/css" href="css/style2.css">
   
  </head>
  <body>
 

<?php

echo '<h1>Домашнее задание № 4.</h1>';


echo '<h3>$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];</h3>';

echo '<h3>посчитать длину массива</h3>';
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$arr_for_sum = $arr;
$num_arr = count($arr);
echo 'Ответ: длина массива $arr = '.$num_arr.'<br>';


echo '<h3>переместить первые 4 элемента массива в конец массива</h3>';
$k = 0;
for ($i=4; $i < $num_arr; $i++) { 
  $arr_shift[$k] = $arr[$i];
  $k++;
}
for ($i=0; $i < 4; $i++) { 
  $arr_shift[$k] = $arr[$i];
  $k++;
}
$arr = $arr_shift;
echo 'Ответ: массив после перемещения 4 элементов в конец - ';
var_export($arr);


echo '<h3>получить сумму 4,5,6 элемента</h3>';
$sum456_arr = $arr_for_sum[3] + $arr_for_sum[4] + $arr_for_sum[5];
echo 'Ответ: сумма 4,5,6 элемента исходного массива = '.$sum456_arr.'<br>';
$sum456_arr_shift = $arr_shift[3] + $arr_shift[4] +$arr_shift[5];
echo 'Ответ: сумма 4,5,6 элемента массива после перемещения = '.$sum456_arr_shift.'<br>';




echo '<br><br>';
echo '<h3>$firstArr = [
          <p>'."'".'one'."'".' => 1,'.'</p>
          <p>'."'".'two'."'".' => 2,'.'</p>
          <p>'."'".'three'."'".' => 3,'.'</p>
          <p>'."'".'foure'."'".' => 5,'.'</p>
          <p>'."'".'five'."'".' => 12,'.'</p>
      ];
      </h3>';

echo '<h3>$secondArr = [
          <p>'."'".'one'."'".' => 1,'.'</p>
          <p>'."'".'seven'."'".' => 22,'.'</p>
          <p>'."'".'three'."'".' => 32,'.'</p>
          <p>'."'".'foure'."'".' => 5,'.'</p>
          <p>'."'".'five'."'".' => 13,'.'</p>
          <p>'."'".'six'."'".' => 37,'.'</p>
      ];
      </h3>';

$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'foure' => 5,
  'five' => 13,
  'six' => 37,
];

echo '<h3>найти все элементы которые отсутствуют в первом массиве и присутствуют во втором</h3>';
$arr_diff21 = array_diff($secondArr, $firstArr);
echo 'Ответ: элементы которые отсутствуют в первом массиве и присутствуют во втором - ';
var_export($arr_diff21);

echo '<h3>найти все элементы которые присутствую в первом и отсутствуют во втором</h3>';
$arr_diff12 = array_diff($firstArr, $secondArr);
echo 'Ответ: элементы которые присутствую в первом и отсутствуют во втором - ';
var_export($arr_diff12);


echo '<h3>найти все элементы значения которых совпадают</h3>';
$arr_intersect = array_intersect($firstArr, $secondArr);
echo 'Ответ: элементы значения которых совпадают - ';
var_export($arr_intersect);

echo '<h3>найти все элементы значения которых отличается</h3>';
$arr_diff = $arr_diff12 + $arr_diff21;
echo 'Ответ: элементы значения которых отличается - ';
var_export($arr_diff);


echo '<br><br>';
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

$firstArr = [
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


echo '<h3>получить все вторые элементы вложенных массивов</h3>';

foreach ($firstArr as $key => $value) {
     if (is_array($firstArr[$key])) {
        $arr = array_values($firstArr[$key]);
        echo 'Ответ: Подмассив '.$key.' Массива $firstArr, значение второго элемента - '.$arr[1].'<br>';
     }
}


echo '<h3>получить общее количество элементов в массиве</h3>';
/* Не верно
$num = 0;
foreach ($firstArr as $key => $value) {
  if (!is_array($firstArr[$key])) {
        $num++;
     } else {
          $num = $num + count($firstArr[$key]);  
     }
  
}
*/
$num = count($firstArr, COUNT_RECURSIVE);
echo 'Ответ: общее количество элементов в массиве - '.$num.'<br>';




echo '<h3>получить сумму всех значений в массиве</h3>';
$sum = 0;
foreach ($firstArr as $key => $value) {
  if (!is_array($firstArr[$key])) {
        $sum = $sum + $value;
     } else {
            foreach ($firstArr[$key] as $key1 => $value1) {
                    $sum = $sum + $value1;
            }
      }
  
}
echo 'Ответ: сумму всех значений в массиве - '.$sum.'<br>';

echo '<br><br>';
?>

  </body>
</html>