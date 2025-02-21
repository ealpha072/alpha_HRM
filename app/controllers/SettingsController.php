<?php
require_once __DIR__ . "/../../core/Controller.php";

class SettingsController extends Controller{
    public function organization(){
        $this->view("settings/organization");
    }

    public function department(){
        $this->view("settings/department");
    }

    public function leavetypes(){
        $this->view("settings/leavetype");
    }
}
?>