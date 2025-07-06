<?php

class Category {
    private $categoryid;
    private $categoryname;

    
    public function category($categoryid, $categoryname) {
        $this->categoryid = $categoryid;
        $this->categoryname = $categoryname;
    }

    public function getcategoryid() {
        return $this->categoryid;
    }

    public function getcategoryname() {
        return $this->categoryname;
    }


    public function setcategoryid($categoryid) {
        $this->categoryid = $categoryid;
    }

    public function setcategoryname($categoryname) {
        $this->categoryname = $categoryname;
    }

}
?>
