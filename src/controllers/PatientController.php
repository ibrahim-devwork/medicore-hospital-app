<?php

require_once __DIR__ . '/../models/Patient.php';
require_once __DIR__ . '/../logger.php';

class PatientController
{
    private $logger;

    public function __construct()
    {
        $this->logger = LoggerFactory::createLogger();
    }

    public function index($smarty, $pdo) {
        try {
            $search = isset($_GET['search']) ? $_GET['search'] : '';
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $items_per_page = 10;
            $offset = ($page - 1) * $items_per_page;

            $patients = Patient::getAll($pdo, $search, $items_per_page, $offset);
            $total_pages = ceil(Patient::getCount($pdo, $search) / $items_per_page);
        
            $smarty->assign('search', $search);
            $smarty->assign('patients', $patients);
            $smarty->assign('page', $page);
            $smarty->assign('total_pages', $total_pages);
            $smarty->display('patients.tpl');
        } catch (Exception $e) {
            $this->logger->error('PatientController - (index)', ['exception' => $e]);
            throw $e;
        }
    }

    public function create($smarty)
    {
        try {
            $smarty->display('add_patient.tpl');
        } catch (Exception $e) {
            $this->logger->error('PatientController - (create)', ['exception' => $e]);
            throw $e;
        }
    }

    public function store($pdo)
    {   
        try {
            $patient = new Patient($_POST);
            $patient->save($pdo);
            header('Location: /');
        } catch (Exception $e) {
            $this->logger->error('PatientController - (store)', ['exception' => $e]);
            throw $e;
        }
    }

    public function edit($pdo, $id)
    {
        try {
            return Patient::find($pdo, $id);
        } catch (Exception $e) {
            $this->logger->error('PatientController - (edit)', ['exception' => $e]);
            throw $e;
        }
    }

    public function update($pdo, $id)
    {
        try {
            $patient = new Patient($_POST);
            $patient->update($pdo, $id);
            header('Location: /');
        } catch (Exception $e) {
            $this->logger->error('PatientController - (update)', ['exception' => $e]);
            throw $e;
        }
    }

    public function delete($pdo, $id)
    {
        try {
            Patient::delete($pdo, $id);
            header('Location: /');
        } catch (Exception $e) {
            $this->logger->error('PatientController - (delete)', ['exception' => $e]);
            throw $e;
        }
    }
}