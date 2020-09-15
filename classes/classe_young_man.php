<?php

class YoungMan extends OldMan {

    private $date_of_birth;

    public function getDateOfBirth() {
        return $this->date_of_birth;
    }

    public function setDateOfBirthr($date_of_birth) {
        $this->date_of_birth = $date_of_birth;
        return $this->date_of_birth;
    }

    public function Older ($age_old_man, $age_young_man) {
        $this->older = $age_old_man - $age_young_man;
        return $this->older;
    }
/**/
}

?>

