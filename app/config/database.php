<?php

class Database {
    private static $instance = null;
    private $pdo;

    private function __construct()
    {
        $dbPath = __DIR__ . "../../../hrm_database.db";

        if (!file_exists($dbPath)) {
            die("Error: Database file not found at $dbPath");
        }

        try {
            $this->pdo = new PDO("sqlite:" . $dbPath);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connection successfull";
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance= new Database();
        }
        return self::$instance;
    }

    public function executeStmt($sql = "", $params = []){
        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (Exception $e){
            throw new Exception($e->getMessage());
            echo "SQL query not executing";
        }
    }

    public function insert($statement = "", $params = []){
        try {
            $this->executeStmt($statement, $params);
            echo "Record inserted successfully";
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function select($statement = "", $params = []){
        try {
            $results = $this->executeStmt($statement, $params);
            return $results->fetchAll();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function update($statement = "", $params=[]){
        try {
            $this->executeStmt($statement, $params);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function remove($statement = "", $params=[]){
        try {
            $this->executeStmt($statement, $params);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }


}
?>
