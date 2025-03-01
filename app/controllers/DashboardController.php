<?php
require_once __DIR__ . "/../../core/Controller.php";


class DashboardController extends Controller {
    public function index() {
        // Load the dashboard view
        $this->view("dashboard/index");
    }
    
    public function home(){
        $this->view("dashboard/dashboard");
    }
}
?>
