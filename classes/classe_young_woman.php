<?php

class YoungWoman extends OldMan {

    private $height;

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
        return $this->height;
    }

    public function allYears ($age_old_man, $age_young_woman) {
        $this->all_years = $age_old_man + $age_young_woman;
        return $this->all_years;
    }
/**/
}

?>

