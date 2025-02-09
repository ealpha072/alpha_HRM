<?php

require_once __DIR__ . '../../app/config/database.php';
require_once __DIR__ . '../../core/Controller.php';
require_once __DIR__ . '/../core/Model.php';

// Start session
session_start();

// Simple router
require_once __DIR__ . '/../routes.php';
?>
