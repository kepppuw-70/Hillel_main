<?php

class OldMan {

    private $name;
    private $age;

    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
        return $this->age;
    }

    public function Date_of_birthr ($age) {
        $this->date_of_birth = 2020 - $age;
        return $this->date_of_birth;
    }
   
}

?>

