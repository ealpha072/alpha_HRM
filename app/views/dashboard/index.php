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
                    <a href="home"><i class="fas fa-server mr-2"></i>Dashboard</a>
                </li>
                <li>
                    <a href="#employeeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user-circle mr-2"></i> Staff</a>
                    <ul class="collapse list-unstyled" id="employeeSubmenu">
                        <li>
                            <a href="employees"><i class="fa fa-user-plus fa-sm mr-2"></i>Add Staff</a>
                        </li>
                        <li>
                            <a href="employees?page=manage"><i class="fa fa-info-circle fa-sm mr-2"></i>Staff Details</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#leaveSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fa fa-calendar mr-2"></i> Leave Tracker</a>
                    <ul class="collapse list-unstyled" id="leaveSubmenu">
                        <li>
                            <a href="leave"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Leave</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa fa-calendar" aria-hidden="true"></i> Employee Leave</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="#payrollSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fa fa-money mr-2"></i> Payroll</a>
                    <ul class="collapse list-unstyled" id="payrollSubmenu">
                        <li>
                            <a href="payroll"><i class="fa fa-plus-square mr-2" aria-hidden="true"></i> Set Salary</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa fa-money mr-2" aria-hidden="true"></i> Pay Slip</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cogs mr-2" aria-hidden="true"></i> Settings</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="settings?settings_page=organization"><i class="fa fa-info mr-2" aria-hidden="true"></i>Organization Details</a>
                        </li>
                        <li>
                            <a href="settings?settings_page=department"><i class="fa fa-building mr-2" aria-hidden="true"></i>Department</a>
                        </li>
                        <li>
                            <a href="settings?settings_page=leave_type"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>Leave Types</a>
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
                    
                    <div class="" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="logout">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="wrapper_main content">
