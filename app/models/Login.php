<?php
require_once __DIR__ . "../../config/database.php";
require_once __DIR__ . "../../helpers/Validator.php";


class User{
    private $db;
    public $userName = "";
    public $password = "";
    
    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function attachProps (){
        $this->userName = htmlspecialchars(strip_tags($_POST['username'])); 
        $this->password = htmlspecialchars(strip_tags($_POST['password']));
    }

    public function login_user(){

        $login_errors = [];

        //check if database has username
        $stmt = "SELECT * FROM org_details WHERE username = ?";
        $params = [$this->userName];
        $results = $this->db->select($stmt, $params);
        
        if (count($results) !== 1 ){
            array_push($login_errors, "Wrong username or password (count error), please try again");
            unset($_SESSION['msg-errors']);
            $_SESSION['msg-errors'] = $login_errors;
            return $_SESSION['msg-errors'];
        } else {
            if(password_verify($this->password, $results[0]["password"])){
                unset($_SESSION['msg-success']);
                $_SESSION['msg-success'] = "Login successful, taking you to home page";
                $_SESSION["user_name"] = $results[0]["username"];
                return $_SESSION['user_name'];
            } else {
                array_push($login_errors, "Wrong username or password (password error), please try again");
                unset($_SESSION['msg-errors']);
                $_SESSION['msg-errors'] = $login_errors;
                return $_SESSION['msg-errors'];
            }
        }
    }
}


?>