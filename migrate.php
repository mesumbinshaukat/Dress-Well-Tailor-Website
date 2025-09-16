<?php
/**
 * Simple migration runner for FTP deployments
 * Place this file in your Laravel root directory and access via browser
 * URL: yourdomain.com/migrate.php?key=your_secret_key
 */

// Security key - CHANGE THIS!
define('MIGRATION_KEY', 'change_this_secret_key_123');

// Check security key
if (!isset($_GET['key']) || $_GET['key'] !== MIGRATION_KEY) {
    http_response_code(403);
    die('Access denied');
}

// Load Laravel
require_once __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

echo "<h1>Laravel Migration Runner</h1>";
echo "<pre>";

try {
    // Run migrations
    $exitCode = $kernel->call('migrate', ['--force' => true]);
    
    if ($exitCode === 0) {
        echo "✅ Migrations completed successfully!\n";
    } else {
        echo "❌ Migration failed with exit code: $exitCode\n";
    }
    
    // Show migration status
    echo "\n--- Migration Status ---\n";
    $kernel->call('migrate:status');
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}

echo "</pre>";
echo "<p><strong>🔒 Remember to delete this file after use!</strong></p>";
?>
