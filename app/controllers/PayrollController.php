<?php
require_once __DIR__ . "/../../core/Controller.php";

class PayrollController extends Controller{
    public function add(){
        $this->view("payroll/setsalary");
    }
}

?>