<?php
// === Konfigurasi ===
$viewsDir = __DIR__ . '/resources/views';
$webRoutes = __DIR__ . '/routes/web.php';

// Ambil semua file blade.php
$bladeFiles = glob($viewsDir . '/*.blade.php');

// Header info
echo "🔍 Mendeteksi file blade...\n";

// Mulai membuat daftar routes
$routes = "\n\n// ===== AUTO-GENERATED ROUTES =====\n";

foreach ($bladeFiles as $bladeFile) {
    $filename = basename($bladeFile, '.blade.php');
    
    // Abaikan file welcome.blade.php (karena sudah ada)
    if ($filename === 'welcome') continue;

    // Buat baris route
    $routes .= "Route::get('/$filename', function () {\n";
    $routes .= "    return view('$filename');\n";
    $routes .= "});\n\n";

    echo "✅ Route untuk '/$filename' dibuat\n";
}

// Tambahkan ke web.php
file_put_contents($webRoutes, $routes, FILE_APPEND);

echo "\n🎉 Semua route otomatis ditambahkan ke routes/web.php!\n";
?>
