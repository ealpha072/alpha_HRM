<?php
$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/alpha_HRM/public/' || $uri === "/alpha_HRM/public/home") {
    require_once "app/controllers/DashboardController.php";
    $controller = new DashboardController();
    $controller->index();
    require_once __DIR__ . "./public/assets/footer.php";
} elseif ($uri === "/alpha_HRM/public/employees") {

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_employee'])){
        // var_dump($_POST);
        // echo("<br>");
        require_once "app/models/Employee.php";
        $employee = new Employee();
        $employee->attachProps();
        $addEmployee_status = $employee->addEmployee();
        //var_dump($addEmployee_status);
    }

    unset($_SESSION['msg-success']);

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
