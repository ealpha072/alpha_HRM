<?php
$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/alpha_HRM/public/' || $uri === '/alpha_HRM/public/login') {

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_user'])) {
        require_once "app/models/Login.php";
        $user = new User();
        $user->attachProps();
        $login_status = $user->login_user();
        
        if(isset($_SESSION["user_name"])){
            require_once "public/assets/header.php";
            require_once "app/controllers/LoginswitchController.php";
            $controller = new LoginSwitchController();
            $controller->index();
            require_once __DIR__ . "./public/assets/footer.php";

            header("refresh:3; url=/alpha_HRM/public/home");
            exit();
        }
    }

    require_once "app/controllers/LoginController.php";
    $controller = new LoginController();
    $controller->index();
    require_once __DIR__ . "./public/assets/footer.php";
} elseif ($uri === "/alpha_HRM/public/home") {
    if (!isset($_SESSION["id"])){
        header("refresh:1; url=/alpha_HRM/public/");
        exit();
    }
    
    require_once "app/controllers/DashboardController.php";
    $wrappercontroller = new DashboardController();
    $wrappercontroller->index();
    $wrappercontroller->home();
    require_once __DIR__ . "./public/assets/footer.php";
} elseif (str_contains($uri, "/alpha_HRM/public/employees")) {
    if (!isset($_SESSION["id"])){
        header("refresh:1; url=/alpha_HRM/public/");
        exit();
    }
    

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
    if (!isset($_SESSION["id"])){
        header("refresh:1; url=/alpha_HRM/public/");
        exit();
    }    

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
    if (!isset($_SESSION["id"])){
        header("refresh:1; url=/alpha_HRM/public/");
        exit();
    }
    

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
    if (!isset($_SESSION["id"])){
        header("refresh:1; url=/alpha_HRM/public/");
        exit();
    }
    
    if (isset($_GET['settings_page']) && $_GET['settings_page'] === "organization") {

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['set_org_details'])) {
            require_once "app/models/Settings.php";
            $settings = new Settings();
            $settings->attach_org_details();
            $settings_status = $settings->set_org_details();
        }

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
} elseif ($uri === "/alpha_HRM/public/logout" ){
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session

    require_once "public/assets/header.php";
    require_once "app/controllers/LoginController.php";
    $controller = new LoginController();
    $controller->logout();
    require_once __DIR__ . "./public/assets/footer.php";
} else {
    require_once "public/assets/header.php";
    require_once "app/views/Pagenotfound.php";
    require_once __DIR__ . "./public/assets/footer.php";
}
