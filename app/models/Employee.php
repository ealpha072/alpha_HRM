<?php
require_once __DIR__ . "../../config/database.php";

class Employee{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function countEmployee(){
        $stmt = "SELECT * FROM ppp";
        $res = $this->db->query($stmt);
        $row = $res->fetchAll(PDO::FETCH_ASSOC);
        return $row;
        //return $row['total'] ?? 0;
        /*$result = $this->db->query("SELECT * from ppp");
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row['total'] ?? 0;*/
    }
}


?>