<?php
require_once __DIR__ . "../../config/database.php";
require_once __DIR__ . "../../helpers/Validator.php";


class Department{
    private $db;
    public $dptName = "";
    
    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function attachProps (){
        $this->dptName = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['dpt_name']))));
    }

    public function add_department(){

        $dpt_errors = [];

        $validator = new Validator();
        $dptEmptyError = $validator->checkEmpty($this->dptName, []);
        $dpt_errors = $dptEmptyError;

        if (count($dpt_errors) === 0){
            $stmt = "INSERT INTO departments (department_name) VALUES (?)";
    
            $params = [$this->dptName];
    
            $this->db->insert($stmt, $params);
            unset($_SESSION['msg-success']);
            $_SESSION['msg-success'] = "Department: " . ucfirst($this->dptName) ." added successfully";
            return $_SESSION['msg-success'];
        } else{
            unset($_SESSION['msg-errors']);
            $_SESSION['msg-errors'] = $dpt_errors;
            return $_SESSION['msg-errors'];
        }
    }
}


?>