<?php
// Database diagnostic script
// Access this file via: yourdomain.com/check-db.php

// Change to Laravel root directory
chdir(__DIR__ . '/..');

// Load Laravel environment
require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "<h2>Database Configuration Check</h2>";
echo "<pre>";

// Get database configuration
$config = config('database.connections.mysql');
echo "Database Configuration:\n";
echo "Host: " . $config['host'] . "\n";
echo "Port: " . $config['port'] . "\n";
echo "Database: " . $config['database'] . "\n";
echo "Username: " . $config['username'] . "\n";
echo "Password: " . (empty($config['password']) ? '(empty)' : '***hidden***') . "\n\n";

// Test database connection
try {
    $pdo = new PDO(
        "mysql:host={$config['host']};port={$config['port']};dbname={$config['database']}",
        $config['username'],
        $config['password']
    );
    
    echo "✅ Database connection successful!\n\n";
    
    // Check current database
    $stmt = $pdo->query("SELECT DATABASE() as current_db");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "Currently connected to database: " . $result['current_db'] . "\n\n";
    
    // Check if migrations table exists
    $stmt = $pdo->query("SHOW TABLES LIKE 'migrations'");
    if ($stmt->rowCount() > 0) {
        echo "✅ Migrations table exists\n\n";
        
        // Check migration records
        $stmt = $pdo->query("SELECT migration FROM migrations ORDER BY batch DESC LIMIT 10");
        echo "Recent migrations:\n";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "- " . $row['migration'] . "\n";
        }
        echo "\n";
        
        // Check specifically for pant_shirts migration
        $stmt = $pdo->prepare("SELECT * FROM migrations WHERE migration LIKE '%pant_shirts%'");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo "✅ Pant shirts migration is recorded in migrations table\n";
        } else {
            echo "❌ Pant shirts migration NOT found in migrations table\n";
        }
        
    } else {
        echo "❌ Migrations table does not exist\n";
    }
    
    // Check if pant_shirts table exists
    $stmt = $pdo->query("SHOW TABLES LIKE 'pant_shirts'");
    if ($stmt->rowCount() > 0) {
        echo "✅ pant_shirts table exists\n";
    } else {
        echo "❌ pant_shirts table does NOT exist\n";
    }
    
    // List all tables
    echo "\nAll tables in database:\n";
    $stmt = $pdo->query("SHOW TABLES");
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo "- " . $row[0] . "\n";
    }
    
} catch (PDOException $e) {
    echo "❌ Database connection failed: " . $e->getMessage() . "\n";
}

echo "</pre>";

echo "<p><strong>⚠️ Delete this file after checking for security!</strong></p>";
?>
