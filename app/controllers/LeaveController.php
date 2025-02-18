<?php
require_once __DIR__ . "/../../core/Controller.php";

class LeaveController extends Controller{
    public function add(){
        $this->view("leave/add");
    }
}


?>