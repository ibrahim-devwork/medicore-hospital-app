<?php
require 'config/db.php';
require 'config/smarty.php';
require 'controllers/PatientController.php';

$patientController  = new PatientController();

if (isset($_GET['id'])) {
    $patientController->delete($pdo, $_GET['id']);
}