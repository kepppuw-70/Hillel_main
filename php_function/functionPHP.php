<?php

function data_type_definition($value)
{    
            $type = gettype($value);
            if ($type == 'boolean') {
                echo 'Тип введённой переменой - Булев.';
            }
            if ($type == 'integer') {
                echo 'Тип введённой переменой - Целое.';
            }
            if ($type == 'double') {
                echo 'Тип введённой переменой - Числа с плавающей точкой.';
            }
            if ($type == 'string') {
                echo 'Тип введённой переменой - Строка.';
            }
            if ($type == 'array') {
                echo 'Тип введённой переменой - Массив.';
            }
            if ($type == 'object') {
                echo 'Тип введённой переменой - Обьект.';
            }
            if ($type == 'resource') {
                echo 'Тип введённой переменой - Ресурс.';
            }
            if ($type == 'NULL') {
                echo 'Состояние переменой - NULL.';
            }
            if ($type == 'unknown type') {
                echo 'Тип введённой переменой - Неизвестен.';
            }
            
            if (isset($value) != 1 ) {
              echo 'Ошибка, переменная не переданна!.';
            }  
 
            return ;
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


function count_sum_var_in_array($arr)
{



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
/**/
if ($a == $b) {
  echo 'Сторона первого квадрата - '.$a.'<br>';
  echo 'Сторона второго квадрата - '.$b.'<br>';
  echo 'Квадраты равны, вписать нет возможности.';
}
   
     return ;
}

?>