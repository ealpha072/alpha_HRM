<?php
$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/alpha_HRM/public/' || $uri === "/alpha_HRM/public/home") {
    require_once "app/controllers/DashboardController.php";
    $controller = new DashboardController();
    $controller->index();
    require_once __DIR__ . "./public/assets/footer.php";
} elseif ($uri === "/alpha_HRM/public/employees") {

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_employee'])) {
        require_once "app/models/Employee.php";
        $employee = new Employee();
        $employee->attachProps();
        $addEmployee_status = $employee->addEmployee();
    }

    require_once "app/controllers/DashboardController.php";
    require_once "app/controllers/EmployeeController.php";
    $dbcontroller = new DashboardController();
    $employeecontroller = new EmployeeController();
    $dbcontroller->index();
    $employeecontroller->add();
    require_once __DIR__ . "./public/assets/footer.php";
} elseif ($uri === "/alpha_HRM/public/leave") {

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['book_leave'])) {
        require_once "app/models/Leave.php";
        $leave = new Leave();
        $employee->attachProps();
        $addEmployee_status = $employee->bookEmployeeLeave();
    }

    require_once "app/controllers/DashboardController.php";
    require_once "app/controllers/LeaveController.php";
    $dbcontroller = new DashboardController();
    $leavecontroller = new LeaveController();
    $dbcontroller->index();
    $leavecontroller->add();
    require_once __DIR__ . "./public/assets/footer.php";

} elseif ($uri === "/alpha_HRM/public/payroll") {

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['set_base_salary'])) {
        // var_dump($_POST);
        // echo("<br>");
        require_once "app/models/Payroll.php";
        $payroll = new Payroll();
        $payroll->attachProps();
        $set_base_salary_status = $payroll->setBaseSalary();
        //var_dump($addEmployee_status);
    }

    require_once "app/controllers/DashboardController.php";
    require_once "app/controllers/PayrollController.php";
    $dbcontroller = new DashboardController();
    $payrollcontroller = new PayrollController();
    $dbcontroller->index();
    $payrollcontroller->add();
    require_once __DIR__ . "./public/assets/footer.php";
} elseif (str_contains($uri, "/alpha_HRM/public/settings")) {
    if (isset($_GET['settings_page']) && $_GET['settings_page'] === "organization") {
        require_once "app/controllers/DashboardController.php";
        require_once "app/controllers/SettingsController.php";
        $dbcontroller = new DashboardController();
        $settingscontroller = new SettingsController();
        $dbcontroller->index();
        $settingscontroller->organization();
        require_once __DIR__ . "./public/assets/footer.php";
    } elseif (isset($_GET['settings_page']) && $_GET['settings_page'] === "department") {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_department'])) {
            require_once "app/models/Department.php";
            $dpt = new Department;
            $dpt->attachProps();
            $addDpt_status = $dpt->add_department();
        }

        require_once "app/controllers/DashboardController.php";
        require_once "app/controllers/SettingsController.php";
        $dbcontroller = new DashboardController();
        $settingscontroller = new SettingsController();
        $dbcontroller->index();
        $settingscontroller->department();
        require_once __DIR__ . "./public/assets/footer.php";
    } elseif (isset($_GET['settings_page']) && $_GET['settings_page'] === "leave_type") {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_leave_type'])) {
            require_once "app/models/Leave.php";
            $leave = new Leave;
            $leave->attach_add_new_leave_props();
            $addLeave_status = $leave->addLeave();
        }

        require_once "app/controllers/DashboardController.php";
        require_once "app/controllers/SettingsController.php";
        $dbcontroller = new DashboardController();
        $settingscontroller = new SettingsController();
        $dbcontroller->index();
        $settingscontroller->leavetypes();
        require_once __DIR__ .  "./public/assets/footer.php";
    }
} else {
    echo $_SERVER['REQUEST_URI'];
    echo "<br>";
    echo "404 - Page Not Found";
}
