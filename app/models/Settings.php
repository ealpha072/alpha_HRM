<?php
require_once __DIR__ . "../../config/database.php";
require_once __DIR__ . "../../helpers/Validator.php";


class Settings{
    private $db;

    public $orgName = "";
    public $orgEmail = "";
    public $orgPhone = "";
    public $orgVision = "";
    public $orgMission = "";

    // EDIT LOGIN INFO VARIABLE
    public $username = "";
    public $oldPassword = "";
    public $newPassword = "";



    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function attach_org_details() {
        $this->orgName = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['org_name']))));
        $this->orgEmail = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['org_email']))));
        $this->orgPhone = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['org_phone']))));
        $this->orgVision = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['org_vision']))));
        $this->orgMission = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['org_mission']))));
    }

    public function attach_edit_login_details_var(){
        $this->orgName = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['new_username']))));
        $this->orgEmail = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['old_password']))));
        $this->orgPhone = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['new_password']))));
    }
 
    public function edit_org_details(){

        $org_errors = [];

        $new_validator = new Validator();
        $email_errors = $new_validator->validateEmail($this->orgEmail, []);
        $phone_errors = $new_validator->validatePhoneNumber($this->orgPhone, []);

        $org_errors = array_merge(
            $email_errors, 
            $phone_errors, 
        );

        if (count($org_errors) === 0){
            $stmt = "INSERT INTO salaries (
                org_name,
                org_address,
                org_phone,
                org_vision,
                org_mission
                ) VALUES (?, ?, ?, ?, ?, ?)";
    
            $params = [
                $this->orgName,
                $this->orgEmail,
                $this->orgPhone,
                $this->orgVision,
                $this->orgMission
            ];
    
            $this->db->insert($stmt, $params);
            unset($_SESSION['msg-success']);
            $_SESSION['msg-success'] = "Organization: " . ucfirst($this->orgName) ." details updated successfully";
            return $_SESSION['msg-success'];
        } else {
            unset($_SESSION['msg-errors']);
            $_SESSION['msg-errors'] = $org_errors;
            return $_SESSION['msg-errors'];
        }
    }

    public function edit_login_info(){
        $editLoginErrors = [];

        $new_validator = new Validator();
        $email_errors = $new_validator->validateEmail($this->orgEmail, []);
        $phone_errors = $new_validator->validatePhoneNumber($this->orgPhone, []);

        $employee_errors = array_merge(
            $email_errors, 
            $phone_errors, 
        );

        if (count($employee_errors) === 0){
            $stmt = "INSERT INTO salaries (
                org_name,
                org_address,
                org_phone,
                org_vision,
                org_mission
                ) VALUES (?, ?, ?, ?, ?, ?)";
    
            $params = [
                $this->orgName,
                $this->orgEmail,
                $this->orgPhone,
                $this->orgVision,
                $this->orgMission
            ];
    
            $this->db->insert($stmt, $params);
            unset($_SESSION['msg-success']);
            $_SESSION['msg-success'] = "Organization: " . ucfirst($this->orgName) ." details updated successfully";
            return $_SESSION['msg-success'];
        } else {
            unset($_SESSION['msg-errors']);
            $_SESSION['msg-errors'] = $employee_errors;
            return $_SESSION['msg-errors'];
        }
    }

}


?>