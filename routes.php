<?php
$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/alpha_HRM/public/") {
    require_once "app/controllers/DashboardController.php";
    $controller = new DashboardController();
    $controller->index();
    require_once __DIR__ . "./public/assets/footer.php";
} elseif ($uri === "/alpha_HRM/public/employees/add") {
    require_once "app/controllers/DashboardController.php";
    require_once "app/controllers/EmployeeController.php";
    $dbcontroller = new DashboardController();
    $employeecontroller = new EmployeeController();
    $dbcontroller->index();
    $employeecontroller->add();
    require_once __DIR__ . "./public/assets/footer.php";

    if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["add_employee"])){
        

    }
} else {
    echo "<br>";
    echo "404 - Page Not Found";
}
?>
