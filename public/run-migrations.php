<?php
// IMPORTANT: Remove this file after running migrations for security!
// Access this file via: yourdomain.com/run-migrations.php

// Basic security - change this password
$migration_password = 'admin123';

if (!isset($_GET['password']) || $_GET['password'] !== $migration_password) {
    die('Unauthorized access');
}

// Change to Laravel root directory
chdir(__DIR__ . '/..');

// Run the migration command
$output = [];
$return_code = 0;

exec('php artisan migrate --force 2>&1', $output, $return_code);

echo "<h2>Migration Results:</h2>";
echo "<pre>";
if ($return_code === 0) {
    echo "✅ Migrations completed successfully!\n\n";
} else {
    echo "❌ Migration failed with return code: $return_code\n\n";
}

foreach ($output as $line) {
    echo htmlspecialchars($line) . "\n";
}
echo "</pre>";

echo "<p><strong>⚠️ IMPORTANT: Delete this file immediately after use for security!</strong></p>";
?>
