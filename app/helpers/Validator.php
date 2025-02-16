<?php

class Validator {
    private $errors_array = [];

    public function validateNames($first_name, $last_name)
    {
        if (empty($first_name) || empty($last_name)) {
            array_push($this->errors_array, "First and last names cannot be empty");
        }
        if (preg_match('/\s/', $first_name) || preg_match('/\s/', $last_name)) {
            array_push($this->errors_array, "No spaces allowed in first or last name");
        }
        if (preg_match('~[0-9]+~', $first_name) || preg_match('~[0-9]+~', $last_name)) {
            array_push($this->errors_array, "Name can't contain number characters");
        }

        return $this->errors_array;
    }

    public function validateEmail($email)
    {
        if (empty($email)) {
            array_push($this->errors_array, "Email cannot be empty");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errors_array, "Invalid email formart");
        }
        return $this->errors_array;
    }

    public function validatePhoneNumber($phone)
    {
        if (empty($phone)) {
            array_push($this->errors_array, "Phone number cant be empty");
        }

        if (!preg_match("/^[0-9]{12}$/", $phone)){
            array_push($this->errors_array, "Phone number must only contain digits and be 12 characters long");
        }

        return $this->errors_array;
    }

    public function validateEmployeeID($id){
        if (empty($id)){
            array_push($this->errors_array, "Employee ID caanot be empty");
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $id)){
            array_push($this->errors_array, "Employee ID must be alphanumeric");
        }
        return $this->errors_array;
    }

    public function validateTypeLevelDpt($type, $level, $dpt){
        if (empty($type) || empty($level) || empty($dpt) ){
            array_push($this->errors_array, "Employe level, employe ID and employee department cannot be blank");
        }
        return $this->errors_array;
    }

    public function validateGender($gender){
        $allowed_genders = ['male', 'female'];
        if (empty($gender)){
            array_push($this->errors_array, "Employee gender cannot be blank");
        }

        if(!in_array($gender, $allowed_genders)){
            array_push($this->errors_array, "Gender can only be male or female");
        }
        return $this->errors_array;
    }
}

?>