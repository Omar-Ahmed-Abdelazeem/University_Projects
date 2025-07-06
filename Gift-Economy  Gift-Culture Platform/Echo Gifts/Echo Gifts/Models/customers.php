<?php
class customers {
    private $customersid;
    private $email;
    private $password;
    private $username;

    public function customers($customersid, $email, $password, $username) {
        $this->customersid = $customersid;
        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
    }

    public function getcustomersid() {
        return $this->customersid;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setcustomersid($customersid) {
        $this->customersid = $customersid;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setUsername($username) {
        $this->username = $username;
    }
}
?>
