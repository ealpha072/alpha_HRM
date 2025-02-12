<?php
require_once __DIR__ . "/../../core/Controller.php";

class EmployeeController extends Controller{
    public function add(){
        $this->view("employees/add");
    }
}



?>