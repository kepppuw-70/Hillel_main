<?php

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

?>

