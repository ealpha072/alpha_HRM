<?php
require_once __DIR__ . "/../../core/Controller.php";

class LoginController extends Controller {
    public function index() {
        // Load the dashboard view
        $this->view("/login");
    }
}
?>