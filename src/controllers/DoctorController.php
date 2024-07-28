<?php

require_once __DIR__ . '/../models/Doctor.php';
require_once __DIR__ . '/../logger.php';

class DoctorController
{
    private $pdo;
    private $logger;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->logger = LoggerFactory::createLogger();
    }

    public function getByCategory($categoryId) {
        try {
            return Doctor::getByCategory($this->pdo, $categoryId);
        } catch (Exception $e) {
            $this->logger->error('DoctorController - (getByCategory)', ['exception' => $e]);
            throw $e;
        }
    }

    public function getAll() {
        try {
            return Doctor::getAll($this->pdo);
        } catch (Exception $e) {
            $this->logger->error('DoctorController - (getAll)', ['exception' => $e]);
            throw $e;
        }
    }
}