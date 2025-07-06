<?php
class chat {
    private $chatid;
    private $senderchatid;
    private $receiverchatid;
    private $message;
    private $timestamp;

    public function chat($chatid, $senderchatid, $receiverchatid, $message, $timestamp) {
        $this->chatid = $chatid;
        $this->senderchatid = $senderchatid;
        $this->receiverchatid = $receiverchatid;
        $this->message = $message;
        $this->timestamp = $timestamp;
    }

    public function getchatid() {
        return $this->chatid;
    }

    public function getSenderchatid() {
        return $this->senderchatid;
    }

    public function getReceiverchatid() {
        return $this->receiverchatid;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }

    public function setchatid($chatid) {
        $this->chatid = $chatid;
    }

    public function setSenderchatid($senderchatid) {
        $this->senderchatid = $senderchatid;
    }

    public function setReceiverchatid($receiverchatid) {
        $this->receiverchatid = $receiverchatid;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }
}
?>
