<?php
class products {
    private $productsid;
    private $title;
    private $details;
    private $img1;
    private $img2;
    private $img3;
    private $areaid;
    private $categoryid;
    private $customerid;

    public function products($productsid, $title, $details, $img1 , $img2 , $img3, $areaid, $categoryid, $customerid) {
        $this->productsid = $productsid;
        $this->title = $title;
        $this->details = $details;
        $this->img1 = $img1;
        $this->img2 = $img2;
        $this->img3 = $img3;
        $this->areaid = $areaid;
        $this->categoryid = $categoryid;
        $this->customerid = $customerid;
    }

    public function getId() {
        return $this->productsid;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDetails() {
        return $this->details;
    }

    public function getImg1() {
        return $this->img1;
    }
    public function getImg2() {
        return $this->img2;
    }
    public function getImg3() {
        return $this->img3;
    }


    public function getAreaId() {
        return $this->areaid;
    }

    public function getCategoryId() {
        return $this->categoryid;
    }

    public function getCustomerId() {
        return $this->customerid;
    }

    public function setId($productsid) {
        $this->productsid = $productsid;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDetails($details) {
        $this->details = $details;
    }

    public function setImg1($img1) {
        $this->img1 = $img1;
    }
    public function setImg2($img2) {
        $this->img2 = $img2;
    }
    public function setImg3($img3) {
        $this->img3 = $img3;
    }

    public function setAreaId($areaid) {
        $this->areaid = $areaid;
    }

    public function setCategoryId($categoryid) {
        $this->categoryid = $categoryid;
    }

    public function setCustomerId($customerid) {
        $this->customerid = $customerid;
    }
}
?>
