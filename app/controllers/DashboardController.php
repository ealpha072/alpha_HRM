<?php
require_once __DIR__ . "/../../core/Controller.php";


class DashboardController extends Controller {
    public function index() {
        $data = [
            'content' => "Hello"
        ];
        
        // Load the dashboard view
        $this->view("dashboard/index", $data);
    }
}
?>
