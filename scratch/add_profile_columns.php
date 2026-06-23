<?php
// scratch/add_profile_columns.php
require_once dirname(__DIR__) . '/config/db.php';

try {
    $sql = "ALTER TABLE users 
            ADD COLUMN alternate_phone VARCHAR(20) NULL AFTER phone,
            ADD COLUMN website VARCHAR(255) NULL AFTER avatar,
            ADD COLUMN pincode VARCHAR(20) NULL AFTER address,
            ADD COLUMN city VARCHAR(100) NULL AFTER pincode,
            ADD COLUMN state VARCHAR(100) NULL AFTER city,
            ADD COLUMN country VARCHAR(100) NULL AFTER state,
            ADD COLUMN bio TEXT NULL AFTER gender";
            
    $pdo->exec($sql);
    echo "Successfully altered users table to add profile columns.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
