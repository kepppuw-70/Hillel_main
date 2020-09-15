<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Домашнее задание № 6 - главная</title>
   <link rel="stylesheet" type="text/css" href="css/style2.css">
   
  </head>
  <body>
<?php
   require_once( "classes/classe_man.php" );
   require_once( "classes/classe_young_man.php" );
   require_once( "classes/classe_young_woman.php" );
   require_once( "classes/classe_sick_man.php" );
   require_once( "classes/abstr_classe.php" );
   require_once( "classes/nasled_abstr_classe.php" );
echo '<h1>Домашнее задание № 6.</h1>';   
?> 

<h3>1) Создать родительский (главный класс).<br>

Класс должен содержать 2 свойства.<br>

Каждое свойство должно иметь геттеры и сеттеры</h1><br>

<?php
$oldman = new OldMan();
$oldman->setName("Oldman");
$age = $oldman->setAge("75");
$oldman->Date_of_birthr($age);
echo 'Ответ: ';print_r($oldman);
echo '<br><br>';
?>

<br><br><br>

 <h3>2) Создать 3 наследника родительского класса.<br>

Каждый наследник должен содержать одно свойство.<br>

Каждое свойство должно иметь геттер и сеттер.<br>

Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными.<br>

Один наследник не должен быть наследуемым.<br>

Один из наследников должен содержать абстрактную функцию возведения в степень</h1><br>

<?php
$youngman = new YoungMan();
$youngman->setName("YoungMan");
$age_ym = $youngman->setAge("35");
$youngman->setDateOfBirthr("1985");
$youngman->Older(75, $age_ym);
echo 'Ответ: ';print_r($youngman);
echo '<br><br>';
$youngwoman = new YoungWoman();
$youngwoman->allYears(75, 25);
echo 'Ответ: ';print_r($youngwoman);
echo '<br><br>';
$sickman = new SickMan();
$sickman->setDateofdeath("2015");
$sickman->Average_life(75, 30);
echo 'Ответ: ';print_r($sickman);
echo '<br><br>';



/*
abstract class Matemat {

   abstract function my_stepen();
  
}

class Mastepen extends Matemat {
 
    private $var;
    private $stepen;

    public function getVar() {
        return $this->var;
    }

    public function setVar($var) {
        $this->var = $var;
        return $this->var;
    }

    public function getStepen() {
        return $this->stepen;
    }

    public function setStepen($stepen) {
        $this->stepen = $stepen;
        return $this->stepen;
    }

    public function my_stepen() {
        echo $this->stepen = $this->var**$this->stepen;
    }
}

*/
$mastepen = new Mastepen();
$mastepen->setVar(2);
$mastepen->setStepen(3);
$mastepen->my_stepen();
echo 'Ответ: ';print_r($mastepen);
echo '<br><br>';

?>





<br><br><br>

<h3>3) Создать по 2 наследника от наследников первого уровня.<br>

Каждое свойство должно иметь геттер и сеттер.<br>

Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными.<br>

И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством.<br>

В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции.</h1><br>

<br><br><br><br>




  </body>
</html>