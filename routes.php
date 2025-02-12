<?php
$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/alpha_HRM/public/") {
    require_once "app/controllers/DashboardController.php";
    $controller = new DashboardController();
    $controller->index();
} elseif ($uri === "/alpha_HRM/public/employees/add") {
    require_once "app/controllers/DashboardController.php";
    require_once "app/controllers/EmployeeController.php";
    $dbcontroller = new DashboardController();
    $employeecontroller = new EmployeeController();
    $dbcontroller->index();
} else {
    echo "<br>";
    echo "404 - Page Not Found";
}
?>
