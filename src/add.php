<?php

require 'config/db.php';
require 'config/smarty.php';
require 'controllers/PatientController.php';
require 'controllers/DoctorController.php';
require 'controllers/CategoryController.php';

$patientController  = new PatientController();
$categoryController = new CategoryController($pdo);
$doctorController   = new DoctorController($pdo);

$categories = $categoryController->getAll();
if (isset($_GET['category_id'])) {
    $categoryId = $_GET['category_id'];
    $doctors = $doctorController->getByCategory($categoryId);
    echo json_encode($doctors);
    exit; 
}

# Add new patient
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $patientController->store($pdo);
}

$smarty->assign('categories', $categories);
$smarty->display('add_patient.tpl');