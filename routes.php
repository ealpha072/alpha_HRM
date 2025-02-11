<?php
$uri = $_SERVER['REQUEST_URI'];

if (str_contains($uri, "public/")) {
    require_once "app/controllers/DashboardController.php";
    $controller = new DashboardController();
    $controller->index();
} elseif (str_contains($uri, "public/employee/add")) {
    echo "We are here";
    //require_once "app/controllers/EmployeeController.php";
    //$controller = new EmployeeController();
    //$controller->index();
} else {
    echo "<br>";
    echo "404 - Page Not Found";
}
?>
