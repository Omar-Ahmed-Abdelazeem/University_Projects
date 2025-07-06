<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "echogifts";
    private $conn;

    public function openConnection() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->conn->connect_error) {
            echo "Connection failed: " . $this->conn->connect_error;
            return false;
        }
        else{
            return true;
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {

        if ($this->conn) {
            $this->conn->close();
        }

        else{
            echo "No connection opened.";
        }
    }


    public function runQuery($query) {
        
        $result = $this->conn->query($query);
    
        if ($result === TRUE) {
            return true;
        }
    
        if ($result instanceof mysqli_result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    
        return false;
    }
    
    

}
?>
