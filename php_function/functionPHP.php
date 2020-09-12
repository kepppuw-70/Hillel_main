<?php

function data_type_definition($value)
{    
    $type = 'NULL';
    $type = gettype($value);
    
    switch ($type) {
    case 'boolean':
          echo 'Тип введённой переменой - Булев.';
          break;
    case 'integer':
         echo 'Тип введённой переменой - Целое.';
         break;
    case 'double':
         echo 'Тип введённой переменой - Числа с плавающей точкой.';
         break;
    case 'string':
         echo 'Тип введённой переменой - Строка.';
         break;
    case 'array':
         echo 'Тип введённой переменой - Массив.';
         break;
    case 'object':
         echo 'Тип введённой переменой - Обьект.';
         break;
    case 'resource':
         echo 'Тип введённой переменой - Ресурс.';
         break;
    case 'NULL':
         echo 'Состояние переменой - NULL.';
         break;
    case 'unknown type':
         echo 'Тип введённой переменой - Неизвестен.';
         break;
    }
}


function reed_b($string)
{
  if(is_string($string) == 1){
    $arr_string = str_split($string);
    $i = 0;
    foreach ($arr_string as $key => $value) {
      if($value == 'b'){
         $i++;
      }
      
    }
   return $i;

  } else {
       return false;  
  }


}


function count_sum_var_in_array($firstArr)
{
  foreach ($firstArr as $key => $value) {
        if (is_array($firstArr[$key])) {
            count_sum_var_in_array($firstArr[$key]);
        } else {
            static $sum;
            $sum = $sum + $value;
        }
  }
 return $sum;
}




function inscribing_squares($a, $b)
{
  if ($a > $b) {
  $x = (intval($a/$b))**2;
  echo 'Сторона первого квадрата - '.$a.'<br>';
  echo 'Сторона второго квадрата - '.$b.'<br>';
  if ($x == 1) {
     echo 'В первый квадрат можно вписать - '.'1'. 'второй квадрат.';
  } else {
         if($x == 0){
              echo 'Ошибка ввода данных';
         } else {
                  echo 'В первый квадрат можно вписать - '.$x.' вторых квадратa';
         }
      
  }
  }
  if ($a < $b) {
     $x = (intval($b/$a))**2;
     echo 'Сторона первого квадрата - '.$a.'<br>';
     echo 'Сторона второго квадрата - '.$b.'<br>';
  if ($x == 1) {
     echo 'Во второй квадрат можно вписать - '.'1'.' первыq квадрат';
  } else {
         if($x == 0){
              echo 'Ошибка ввода данных';
         } else {
                   echo 'Во второй квадрат можно вписать - '.$x.' первых квадрата';
         }
      
  }
  }
  if ($a == $b) {
     echo 'Сторона первого квадрата - '.$a.'<br>';
     echo 'Сторона второго квадрата - '.$b.'<br>';
     echo 'Квадраты равны, вписать нет возможности.';
  }
}

?>