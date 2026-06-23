<?php
require_once 'config/db.php';
try {
    $stmt = $pdo->query("DESCRIBE students");
    print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
