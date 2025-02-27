<?php
require_once __DIR__ . "../../config/database.php";
require_once __DIR__ . "../../helpers/Validator.php";


class Leave{
    private $db;

    public $employeeId = "";
    public $leaveType = "";
    public $startDate = "";
    public $stopDate = "";
    public $numOfLeaveDays = "";

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function attachProps (){
        $this->employeeId = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['employee_id']))));
        $this->leaveType = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['leave_type']))));
        $this->startDate = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['start_date']))));
        $this->stopDate = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['stop_date']))));
    }

    public function attach_add_new_leave_props(){
        $this->leaveType = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['leave_name']))));
        $this->numOfLeaveDays = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['leave_days']))));
    }
 
    public function bookEmployeeLeave(){

        $employee_errors = [];

        if (count($employee_errors) === 0){
            $stmt = "INSERT INTO leaves (
                employee_id,
                leave_type,
                start_date,
                end_date,
                date_of_joining,
                ) VALUES (?, ?, ?, ?, ?)";
    
            $params = [
                $this->employeeId,
                $this->leaveType,
                $this->startDate,
                $this->stopDate
            ];
    
            $this->db->insert($stmt, $params);
            unset($_SESSION['msg-success']);
            $_SESSION['msg-success'] = "Employee: " . ucfirst($this->employeeId) ." booked for leave: ". ucfirst($this->leaveType). " successfully !!";
            return $_SESSION['msg-success'];
        } else{
            unset($_SESSION['msg-errors']);
            $_SESSION['msg-errors'] = $employee_errors;
            return $_SESSION['msg-errors'];
        }
    }

    public function addLeave(){
        $errors = [];

        $validator = new Validator();
        $leaveTypeEmptyError = $validator->checkEmpty($this->leaveType, []);
        $leaveNumOfDaysEmptyError = $validator->checkEmpty($this->numOfLeaveDays, []);

        $errors = array_merge(
            $leaveTypeEmptyError,
            $leaveNumOfDaysEmptyError
        );

        if (count($errors) === 0){
            $stmt = "INSERT INTO leave_types (leave_name, number_of_days) VALUES (?,?)";
            $params = [$this->leaveType, $this->numOfLeaveDays];

            $this->db->insert($stmt, $params);
            unset($_SESSION['msg-success']);
            $_SESSION['msg-success'] = "Leave type: " . ucfirst($this->leaveType) ." added successfully";
            return $_SESSION['msg-success'];
        } else {
            unset($_SESSION['msg-errors']);
            $_SESSION['msg-errors'] = $errors;
            return $_SESSION['msg-errors'];
        }


    }

}


?>