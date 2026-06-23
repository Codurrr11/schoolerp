<?php
require_once dirname(__DIR__) . '/config/db.php';
try {
    $stmt = $pdo->prepare("DESCRIBE schools");
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($records);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
