<?php
require_once __DIR__ . "../../config/database.php";
require_once __DIR__ . "../../helpers/Validator.php";


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

    public function attachProps (){
        $this->first_name = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['first_name']))));
        $this->last_name = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['last_name']))));
        $this->personal_email = strtolower(htmlspecialchars(strip_tags($_POST['personal_email'])));
        $this->gender = strtolower(htmlspecialchars(strip_tags($_POST['gender'])));
        $this->phone_number = htmlspecialchars(strip_tags($_POST['phone_number']));
        $this->photo = htmlspecialchars(strip_tags($_POST['photo_dummy']));
        $this->employee_id = htmlspecialchars(strip_tags($_POST['employee_id']));
        $this->employee_type = strtolower(htmlspecialchars(strip_tags($_POST['employee_type'])));
        $this->employee_level = strtolower(htmlspecialchars(strip_tags($_POST['employee_level'])));
        $this->date_of_joining = htmlspecialchars(strip_tags($_POST['date_of_joining']));
        $this->department = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['department']))));
    }
 
    public function addEmployee(){

        $employee_errors = [];
        //validation
        $new_validator = new Validator();
        $name_errors = $new_validator->validateNames($this->first_name, $this->last_name);
        $email_errors = $new_validator->validateEmail($this->personal_email);
        $gender_errors = $new_validator->validateGender($this->gender);
        $phone_errors = $new_validator->validatePhoneNumber($this->phone_number);
        $employee_id_errors = $new_validator->validateEmployeeID($this->employee_id);
        $employee_type_level_dpt = $new_validator->validateTypeLevelDpt($this->employee_type, $this->employee_level, $this->department);
        //$date_of_joining_errors = $new_validator->validateDateOfJoining($this->date_of_joining);
        
        $employee_errors = array_merge(
            $name_errors, 
            $email_errors, 
            $gender_errors, 
            $phone_errors, 
            $employee_id_errors, 
            $employee_type_level_dpt
        );
        //$photo_errors = $new_validator->validatePhoto($this->photo);

        if (count($employee_errors) === 0){
            $stmt = "INSERT INTO employees (
                first_name, 
                last_name, 
                personal_email, 
                gender, 
                phone_number, 
                photo, 
                employee_id, 
                employee_type, 
                employee_level, 
                date_of_joining, 
                department) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
            $params = [
                $this->first_name, 
                $this->last_name, 
                $this->personal_email, 
                $this->gender, 
                $this->phone_number, 
                $this->photo, 
                $this->employee_id, 
                $this->employee_type, 
                $this->employee_level, 
                $this->date_of_joining, 
                $this->department
            ];
    
            $this->db->insert($stmt, $params);
            return ["New employee added successfully to database", 'Success'];
        } else{
            return [$employee_errors, "Errors"];
        }
    }

}


?>