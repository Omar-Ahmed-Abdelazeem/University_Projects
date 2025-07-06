<?php

class Area {
    private $areaid;
    private $areaname;
    private $cityareaid;

    public function area($areaid, $areaname, $cityareaid) {
        $this->areaid = $areaid;
        $this->areaname = $areaname;
        $this->cityareaid = $cityareaid;
    }

    public function getareaid() {
        return $this->areaid;
    }

    public function getareaname() {
        return $this->areaname;
    }

    public function getCityareaid() {
        return $this->cityareaid;
    }

    public function setareaid($areaid) {
        $this->areaid = $areaid;
    }

    public function setareaname($areaname) {
        $this->areaname = $areaname;
    }

    public function setCityareaid($cityareaid) {
        $this->cityareaid = $cityareaid;
    }

}
?>
