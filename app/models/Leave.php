<?php
require_once __DIR__ . "../../config/database.php";
require_once __DIR__ . "../../helpers/Validator.php";


class Employee{
    private $db;

    public $employeeName = "";
    public $leaveType = "";
    public $startDate = "";
    public $stopDate = "";

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function attachProps (){
        $this->employeeName = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['employee_name']))));
        $this->leaveType = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['leave_type']))));
        $this->startDate = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['start_date']))));
        $this->stopDate = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['stop_date']))));
    }
 
    public function bookEmployeeLeave(){

        $employee_errors = [];

        if (count($employee_errors) === 0){
            $stmt = "INSERT INTO leaves (
                employee_name,
                leave_type,
                start_date,
                end_date,
                date_of_joining,
                ) VALUES (?, ?, ?, ?, ?)";
    
            $params = [
                $this->employeeName,
                $this->leaveType,
                $this->startDate,
                $this->stopDate
            ];
    
            $this->db->insert($stmt, $params);
            unset($_SESSION['msg-success']);
            $_SESSION['msg-success'] = "Employee: " . ucfirst($this->employeeName) ." booked for leave: ". ucfirst($this->leaveType). " successfully !!";
            return $_SESSION['msg-success'];
        } else{
            unset($_SESSION['msg-errors']);
            $_SESSION['msg-errors'] = $employee_errors;
            return $_SESSION['msg-errors'];
        }
    }

}


?>