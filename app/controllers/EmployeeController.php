<?php
require_once __DIR__ . "/../../core/Controller.php";

class EmployeeController extends Controller{
    public function add(){
        $this->view("employees/add");
    }

    /*public function store(){
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["add_employee"])) {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $personal_email = $_POST["personal_email"];
            $gender = $_POST["gender"];
            $phone_number = $_POST["phone_number"];
            $photo = $_POST["photo"];
            $employee_id = $_POST["employee_id"];
            $employee_type = $_POST["employee_type"];
            $employee_level = $_POST["employee_level"];
            $date_of_joining = $_POST["date_of_joining"];
            $department = $_POST["department"];
        }
    }*/
}



?>