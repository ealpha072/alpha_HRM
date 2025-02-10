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
        return self::$instance->pdo;
    }

    public function query($sql, $params = []){
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}
?>
