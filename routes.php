<?php
$uri = $_SERVER['REQUEST_URI'];


if ($uri === '/alpha_HRM/public/' || $uri === "/alpha_HRM/public/home") {
    require_once "app/controllers/DashboardController.php";
    $controller = new DashboardController();
    $controller->index();
    require_once __DIR__ . "./public/assets/footer.php";
} elseif ($uri === "/alpha_HRM/public/employees") {

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_employee'])){
        echo "This form has been received";
        var_dump($_POST);
        require_once "app/models/Employee.php";
        $employee = new Employee();
        $employee->attachProps();
        $employee->addEmployee();
    }

    require_once "app/controllers/DashboardController.php";
    require_once "app/controllers/EmployeeController.php";
    $dbcontroller = new DashboardController();
    $employeecontroller = new EmployeeController();
    $dbcontroller->index();
    $employeecontroller->add();
    require_once __DIR__ . "./public/assets/footer.php";
} else {
    echo $_SERVER['REQUEST_URI'];
    echo "<br>";
    echo "404 - Page Not Found";
}

?>
