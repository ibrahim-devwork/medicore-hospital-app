<?php
require 'config/db.php';
require 'config/smarty.php';
require 'controllers/PatientController.php';

$smarty->clearCache('patients.tpl');

$controller = new PatientController();
$controller->index($smarty, $pdo);