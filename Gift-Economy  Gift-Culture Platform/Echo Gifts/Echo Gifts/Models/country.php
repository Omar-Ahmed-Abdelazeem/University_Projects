<?php

class Country {
    private $countryid;
    private $countryname;

    
    public function country($countryid, $countryname) {
        $this->countryid = $countryid;
        $this->countryname = $countryname;
    }

    public function getcountryid() {
        return $this->countryid;
    }

    public function getcountryname() {
        return $this->countryname;
    }


    public function setcountryid($countryid) {
        $this->countryid = $countryid;
    }

    public function setcountryname($countryname) {
        $this->countryname = $countryname;
    }

}
?>
