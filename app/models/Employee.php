<?php
require_once __DIR__ . "../../config/database.php";


trait employee_features
{
    public $first_name = "";
    public $last_name = "";
    public $personal_email = "";
    public $gender = "";
    public $phone_number = "";
    public $photo = "";
    public $employee_id = "";
    public $employee_type = "";
    public $employee_level = "";
    public $date_of_joining = "";
    public $department = "";
};

class Employee{
    private $db;

    public $first_name = "";
    public $last_name = "";
    public $personal_email = "";
    public $gender = "";
    public $phone_number = "";
    public $photo = "";
    public $employee_id = "";
    public $employee_type = "";
    public $employee_level = "";
    public $date_of_joining = "";
    public $department = "";

    public function __construct()
    {
        $this->db = Database::getInstance();
    }


    public function addEmployee($data){
        $stmt = "INSERT INTO employees (name, position, departmen) VALUES (?, ?, ?)";
        $this->db->query($stmt, $data['name'], $data['position'], $data['department']);
    }

}


?>