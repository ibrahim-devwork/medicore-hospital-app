<?php

require 'config/db.php';
require 'config/smarty.php';
require 'controllers/PatientController.php';
require 'controllers/DoctorController.php';
require 'controllers/CategoryController.php';

$smarty->clearCache('edit_patient.tpl');


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

$smarty->assign('categories', $categories);


$patientId = $_GET['id'] ?? null;
if (!$patientId && empty($_POST["id"])) {
    header('Location: /');
    exit;
}

$patient = $patientController->edit($pdo, $patientId);
$smarty->assign('patient', $patient);

# Update patient by ID
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $patientController->update($pdo, $_POST["id"]);
}

$smarty->display('edit_patient.tpl');
