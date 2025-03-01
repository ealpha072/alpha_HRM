<?php
require_once __DIR__ . "../../config/database.php";
require_once __DIR__ . "../../helpers/Validator.php";


class Settings{
    private $db;

    public $orgName = "";
    public $orgUsername = "";
    public $orgPassword = "";
    public $orgConfirmPassword = "";
    public $orgTel = "";
    public $orgEmail = "";
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
        $this->orgName = htmlspecialchars(strip_tags(ucfirst($_POST['name'])));
        $this->orgUsername = htmlspecialchars(strip_tags($_POST['username']));
        $this->orgPassword = $_POST['password'];
        $this->orgConfirmPassword = $_POST['confirm_password'];
        $this->orgTel = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['telephone']))));
        $this->orgEmail = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['email']))));
        $this->orgVision = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['vision']))));
        $this->orgMission = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['mission']))));
    }

    public function attach_edit_login_details_var(){
        $this->username = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['new_username']))));
        $this->oldPassword = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['old_password']))));
        $this->newPassword = strtolower(htmlspecialchars(strip_tags(ucfirst($_POST['new_password']))));
    }
 
    public function set_org_details(){

        $org_errors = [];

        $new_validator = new Validator();
        $email_errors = $new_validator->validateEmail($this->orgEmail, []);
        $password_errors = $new_validator->validatePassword($this->orgPassword, $this->orgConfirmPassword, []);
        $telephone_errors = $new_validator->validatePhoneNumber($this->orgTel, []);

        $org_errors = array_merge(
            $email_errors, 
            $password_errors,
            $telephone_errors
        );

        if (count($org_errors) === 0){
            $stmt = "INSERT INTO org_details (
                name,
                username,
                password,
                telephone,
                email,
                vision,
                mission
                ) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
            $params = [
                $this->orgName,
                $this->orgUsername,
                password_hash($this->orgPassword, PASSWORD_BCRYPT),
                $this->orgTel,
                $this->orgEmail,
                $this->orgVision,
                $this->orgMission
            ];
    
            $this->db->update($stmt, $params);
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
        $password_errors = $new_validator->validatePassword($this->newPassword);

        $editLoginErrors = array_merge(
            $password_errors
        );

        if (count($editLoginErrors) === 0){
            $stmt = "INSERT INTO user_settings (
                org_username,
                org_password,
                ) VALUES (?, ?)";
    
            $params = [
                $this->username,
                password_hash($this->newPassword, PASSWORD_BCRYPT)
            ];
    
            $this->db->insert($stmt, $params);
            unset($_SESSION['msg-success']);
            $_SESSION['msg-success'] = "Login details updated successfully";
            return $_SESSION['msg-success'];
        } else {
            unset($_SESSION['msg-errors']);
            $_SESSION['msg-errors'] = $editLoginErrors;
            return $_SESSION['msg-errors'];
        }
    }

}

?>