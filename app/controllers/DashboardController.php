<?php
require_once __DIR__ . "/../../core/Controller.php";

class DashboardController extends Controller {
    public function index() {
        // Example data (replace with real database queries)
        $data = [
            'total_employees' => 50,
            'pending_leaves' => 5,
            'total_departments' => 8
        ];
        
        // Load the dashboard view
        $this->view("dashboard/index", $data);
    }
}
?>
