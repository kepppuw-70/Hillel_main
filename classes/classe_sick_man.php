<?php

final class SickMan extends OldMan {

    private $date_of_death;

    public function getDateofdeath() {
        return $this->date_of_death;
    }

    public function setDateofdeath($height) {
        $this->date_of_death = $date_of_death;
        return $this->date_of_death;
    }

    public function Average_life ($age_old_man, $age_sick_man) {
        $this->average_life = ($age_old_man + $age_sick_man)/2;
        return $this->average_life;
    }
/**/
}

?>

