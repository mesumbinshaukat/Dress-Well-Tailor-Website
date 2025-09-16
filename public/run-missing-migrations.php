<?php
// Run missing migrations
// Access this file via: yourdomain.com/run-missing-migrations.php?password=admin123

// Basic security - change this password
$migration_password = 'admin123';

if (!isset($_GET['password']) || $_GET['password'] !== $migration_password) {
    die('Unauthorized access');
}

// Change to Laravel root directory
chdir(__DIR__ . '/..');

echo "<h2>Running Missing Migrations</h2>";
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
    
    // Check and run missing migrations
    $missingMigrations = [
        '2025_09_15_145911_add_kurta_pajama_to_category_enum',
        '2025_09_15_162000_add_sherwani_to_suits_category_enum'
    ];
    
    foreach ($missingMigrations as $migration) {
        // Check if migration already exists
        $stmt = $pdo->prepare("SELECT * FROM migrations WHERE migration = ?");
        $stmt->execute([$migration]);
        
        if ($stmt->rowCount() > 0) {
            echo "✅ $migration already exists\n";
            continue;
        }
        
        echo "Running migration: $migration\n";
        
        if ($migration === '2025_09_15_145911_add_kurta_pajama_to_category_enum') {
            // Add kurta & pajama to details category enum
            $sql = "ALTER TABLE `details` MODIFY COLUMN `category` ENUM('kameez','shalwar','kameez & shalwar','kurta & pajama') NULL";
            $pdo->exec($sql);
            echo "✅ Added 'kurta & pajama' to details category enum\n";
            
        } elseif ($migration === '2025_09_15_162000_add_sherwani_to_suits_category_enum') {
            // Add sherwani to suits category enum
            $sql = "ALTER TABLE `suits` MODIFY COLUMN `category` ENUM('coat','pent','coat & pent','sherwani') NULL";
            $pdo->exec($sql);
            echo "✅ Added 'sherwani' to suits category enum\n";
        }
        
        // Add migration record
        $stmt = $pdo->prepare("INSERT INTO migrations (migration, batch) VALUES (?, (SELECT COALESCE(MAX(batch), 0) + 1 FROM migrations m))");
        $stmt->execute([$migration]);
        echo "✅ Migration record added\n\n";
    }
    
    // Final verification - show all migrations
    echo "All migrations in database:\n";
    $stmt = $pdo->query("SELECT migration FROM migrations ORDER BY migration");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "- " . $row['migration'] . "\n";
    }
    
    echo "\n✅ All migrations completed successfully!\n";
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}

echo "</pre>";
echo "<p><strong>✅ All migrations are now up to date!</strong></p>";
echo "<p><strong>⚠️ Delete this file after use for security!</strong></p>";
?>
