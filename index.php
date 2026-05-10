<?php
require_once 'core/Controller.php';
require_once 'controllers/HomeController.php';
require_once 'models/Menu.php';

$controller = new HomeController();
$controller->index();
?>