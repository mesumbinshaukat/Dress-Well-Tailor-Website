<?php
// Fix pant_shirts migration issue
// Access this file via: yourdomain.com/fix-migration.php?password=admin123

// Basic security - change this password
$migration_password = 'admin123';

if (!isset($_GET['password']) || $_GET['password'] !== $migration_password) {
    die('Unauthorized access');
}

// Change to Laravel root directory
chdir(__DIR__ . '/..');

echo "<h2>Fixing Pant Shirts Migration</h2>";
echo "<pre>";

try {
    // Load Laravel environment
    require_once 'vendor/autoload.php';
    $app = require_once 'bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    $kernel->bootstrap();

    // Get database configuration
    $config = config('database.connections.mysql');
    echo "Connecting to database: " . $config['database'] . "\n";
    
    $pdo = new PDO(
        "mysql:host={$config['host']};port={$config['port']};dbname={$config['database']}",
        $config['username'],
        $config['password']
    );
    
    echo "✅ Connected successfully\n\n";
    
    // Check if pant_shirts table exists
    $stmt = $pdo->query("SHOW TABLES LIKE 'pant_shirts'");
    if ($stmt->rowCount() > 0) {
        echo "✅ pant_shirts table already exists\n";
    } else {
        echo "❌ pant_shirts table missing, creating it now...\n\n";
        
        // Create the table manually
        $createTableSQL = "
        CREATE TABLE `pant_shirts` (
            `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            `coustmer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `category` enum('pant','shirt','pant & shirt') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `shirt_length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `chest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `waist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `shoulder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `sleeve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `arm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `neck` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `collar` enum('regular','button_down','spread','cutaway') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `cuff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `shirt_pocket` enum('no','1','2') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `shirt_fitting` enum('slim','regular','loose') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `pant_length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `pant_waist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `hip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `thigh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `knee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `bottom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `pant_pocket` enum('no','side','back','both') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `pant_fitting` enum('slim','regular','loose') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `belt_loop` enum('no','yes') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `zipper` enum('front','side') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `textarea` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `trail_date` date DEFAULT NULL,
            `delivery_date` date NOT NULL,
            `advance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `coustmer_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `coustmer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";
        
        $pdo->exec($createTableSQL);
        echo "✅ pant_shirts table created successfully!\n\n";
        
        // Add migration record
        $migrationName = '2025_09_15_160419_create_pant_shirts_table';
        $stmt = $pdo->prepare("INSERT INTO migrations (migration, batch) VALUES (?, (SELECT COALESCE(MAX(batch), 0) + 1 FROM migrations m))");
        $stmt->execute([$migrationName]);
        echo "✅ Migration record added to migrations table\n";
    }
    
    // Verify table exists now
    $stmt = $pdo->query("SHOW TABLES LIKE 'pant_shirts'");
    if ($stmt->rowCount() > 0) {
        echo "\n✅ Final verification: pant_shirts table exists!\n";
        
        // Show table structure
        echo "\nTable structure:\n";
        $stmt = $pdo->query("DESCRIBE pant_shirts");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "- " . $row['Field'] . " (" . $row['Type'] . ")\n";
        }
    } else {
        echo "\n❌ Table creation failed\n";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}

echo "</pre>";
echo "<p><strong>✅ Migration fix completed! You can now access /pantshirts</strong></p>";
echo "<p><strong>⚠️ Delete this file after use for security!</strong></p>";
?>
