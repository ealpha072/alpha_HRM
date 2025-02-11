<?php
require_once __DIR__ . "../../../../public/assets/header.php";  // Include header if exists
?>

<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Alpha HRMS</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#"><i class="fas fa-server mr-2"></i>Admin Dashboard</a>
                </li>
                <li class="">
                    <a href="#employeeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user-circle mr-2"></i> Staff</a>
                    <ul class="collapse list-unstyled" id="employeeSubmenu">
                        <li>
                            <a href="employee/add"><i class="fa fa-user-plus fa-sm mr-2"></i>Add Staff</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user-plus fa-sm mr-2"></i>Staff Details</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#leaveSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Leave Tracker</a>
                    <ul class="collapse list-unstyled" id="leaveSubmenu">
                        <li>
                            <a href="#">Add Leave</a>
                        </li>
                        <li>
                            <a href="#">Employee Leave</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Settings</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Organization Details</a>
                        </li>
                        <li>
                            <a href="#">Department</a>
                        </li>
                        <li>
                            <a href="#">Designation</a>
                        </li>
                        <li>
                            <a href="#">Leave Types</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="wrapper_main content">
                <?= $content ?>
            </div>

<?php
require_once __DIR__ . "../../../../public/assets/footer.php";  // Include header if exists
?>
