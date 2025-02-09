<?php
require_once __DIR__ . "/../../core/Controller.php";

class DashboardController extends Controller {
    public function index() {
        // Example data (replace with real database queries)
        ob_start(); // Start output buffering
        ?>
        <h2>Welcome to Alpha HRMS</h2>
        <p>This is a custom message generated in the controller.</p>
        <?php
        $custom_html = ob_get_clean(); // Store and clean buffer

        $data = [
            'content' => $custom_html
        ];
        
        // Load the dashboard view
        $this->view("dashboard/index", $data);
    }
}
?>
