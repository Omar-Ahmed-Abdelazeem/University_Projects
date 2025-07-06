<?php

class City {
    private $cityid;
    private $cityname;
    private $countrycityid;

    public function city($cityid, $cityname, $countrycityid) {
        $this->cityid = $cityid;
        $this->cityname = $cityname;
        $this->countrycityid = $countrycityid;
    }

    public function getcityid() {
        return $this->cityid;
    }

    public function getcityname() {
        return $this->cityname;
    }

    public function getcountrycityid() {
        return $this->countrycityid;
    }

    public function setcityid($cityid) {
        $this->cityid = $cityid;
    }

    public function setcityname($cityname) {
        $this->cityname = $cityname;
    }

    public function setcountrycityid($countrycityid) {
        $this->countrycityid = $countrycityid;
    }

}
?>
