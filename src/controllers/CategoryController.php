<?php

require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../logger.php';

class CategoryController
{
    private $pdo;
    private $logger;

    public function __construct($pdo) {
        $this->pdo    = $pdo;
        $this->logger = LoggerFactory::createLogger();
    }

    public function getAll() {
        try {
            return Category::getAll($this->pdo);
        } catch (Exception $e) {
            $this->logger->error('CategoryController - (getAll)', ['exception' => $e]);
            throw $e;
        }
    }
}