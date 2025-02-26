<?php

class Validator {

    public function validateNames($first_name, $last_name, $errors_array = [])
    {
        if (empty($first_name) || empty($last_name)) {
            array_push($errors_array, "First and last names cannot be empty");
        }
        if (preg_match('/\s/', $first_name) || preg_match('/\s/', $last_name)) {
            array_push($errors_array, "No spaces allowed in first or last name.");
        }
        if (preg_match('~[0-9]+~', $first_name) || preg_match('~[0-9]+~', $last_name)) {
            array_push($errors_array, "Name can't contain number characters");
        }

        return $errors_array;
    }

    public function validateEmail($email, $errors_array = [])
    {
        if (empty($email)) {
            array_push($errors_array, "Email cannot be empty");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors_array, "Invalid email formart");
        }
        return $errors_array;
    }

    public function validatePhoneNumber($phone, $errors_array = [])
    {
        if (empty($phone)) {
            array_push($errors_array, "Phone number cant be empty");
        }

        if (!preg_match("/^[0-9]{12}$/", $phone)){
            array_push($errors_array, "Phone number must only contain digits and be 12 characters long");
        }

        return $errors_array;
    }

    public function validateEmployeeID($id, $errors_array = [])
    {
        if (empty($id)){
            array_push($errors_array, "Employee ID caanot be empty");
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $id)){
            array_push($errors_array, "Employee ID must be alphanumeric");
        }
        return $errors_array;
    }

    public function validateTypeLevelDpt($type, $level, $dpt, $errors_array = [])
    {
        if (empty($type) || empty($level) || empty($dpt) ){
            array_push($errors_array, "Employe level, employe ID and employee department cannot be blank");
        }
        return $errors_array;
    }

    public function validateGender($gender, $errors_array = [])
    {
        $allowed_genders = ['male', 'female'];
        if (empty($gender)){
            array_push($errors_array, "Employee gender cannot be blank");
        }

        if(!in_array($gender, $allowed_genders)){
            array_push($errors_array, "Gender can only be male or female");
        }
        return $errors_array;
    }

    public function validatePassword ($password, $errors_array=[]){

        if (empty($password)){
            array_push($errors_array, "Password empty, please provide to continue");
        }

        // Minimum length requirement
        $min_length = 8;

        // Check for uppercase letters
        $has_upper = preg_match('/[A-Z]/', $password);

        // Check for lowercase letters
        $has_lower = preg_match('/[a-z]/', $password);

        // Check for numbers
        $has_number = preg_match('/\d/', $password);

        // Check for special characters (non-alphanumeric)
        $has_special = preg_match('/[^A-Za-z0-9]/', $password);

        // Check overall strength based on criteria
        $is_valid = strlen($password) >= $min_length &&
                    $has_upper &&
                    $has_lower &&
                    $has_number &&
                    $has_special;
        
        return $is_valid;
    }
}

?>