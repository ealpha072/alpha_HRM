<?php
require_once __DIR__ . "../../config/database.php";
require_once __DIR__ . "../../helpers/Validator.php";


class Payroll{
    private $db;

    public $employeeId = "";
    public $baseSalary = "";
    
    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function attachProps() {
        $this->employeeId = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['employee_id']))));
        $this->baseSalary = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['base_salary']))));
    }
 
    public function setBaseSalary(){

        $employee_errors = [];

        if (count($employee_errors) === 0){
            $stmt = "INSERT INTO salaries (
                employee_id,
                base_salary,
                ) VALUES (?, ?, ?)";
    
            $params = [
                $this->employeeId,
                $this->baseSalary,
            ];
    
            $this->db->insert($stmt, $params);
            unset($_SESSION['msg-success']);
            $_SESSION['msg-success'] = "Employee: " . ucfirst($this->employeeId) ." base salary set";
            return $_SESSION['msg-success'];
        } else {
            unset($_SESSION['msg-errors']);
            $_SESSION['msg-errors'] = $employee_errors;
            return $_SESSION['msg-errors'];
        }
    }

}


?>