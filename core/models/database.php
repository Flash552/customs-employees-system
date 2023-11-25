<?php
class Database{
    private $host = "localhost";
    private $dbname = "noteapp";
    private $username = "root";
    private $pass = "";
    private $conn;

    public function connect(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, 
            $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'"); 

        }catch(PDOException $e){
            print("Connection Error: " . $e->getMessage());
        }
         return $this->conn;
    }
}

?>
