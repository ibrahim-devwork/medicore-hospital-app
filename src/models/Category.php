<?php

class Category {
    public static function getAll($pdo) {
        $stmt = $pdo->query("SELECT id, name FROM categories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
