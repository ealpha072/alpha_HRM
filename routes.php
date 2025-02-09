<?php
$uri = $_SERVER['REQUEST_URI'];

if ($uri == "/alpha_HRM/public/" || $uri == "/alpha_HRM/public/index.php") {
    require_once "app/controllers/DashboardController.php";
    $controller = new DashboardController();
    $controller->index();
} elseif ($uri == "/employees") {
    echo $uri;
    //require_once "app/controllers/EmployeeController.php";
    //$controller = new EmployeeController();
    //$controller->index();
} else {
    echo "<br>";
    echo "404 - Page Not Found";
}
?>
