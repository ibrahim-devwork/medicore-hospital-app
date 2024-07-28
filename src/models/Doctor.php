<?php

class Doctor {
    public static function getByCategory($pdo, $categoryId) {
        $stmt = $pdo->prepare("SELECT id, CONCAT(first_name, ' ', last_name) AS name FROM doctors WHERE category_id = :category_id");
        $stmt->execute(['category_id' => $categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAll($pdo) {
        $stmt = $pdo->query("SELECT id, CONCAT(first_name, ' ', last_name) AS name, category_id FROM doctors");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
