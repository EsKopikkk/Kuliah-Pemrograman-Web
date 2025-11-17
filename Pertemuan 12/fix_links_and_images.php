<?php
// === Konfigurasi ===
$viewsDir = __DIR__ . '/resources/views';

// Ambil semua file blade.php
$bladeFiles = glob($viewsDir . '/*.blade.php');

// Proses satu per satu
foreach ($bladeFiles as $bladeFile) {
    $content = file_get_contents($bladeFile);

    // === 1️⃣ Ubah tag <img> ===
    // contoh: <img src="ayam.jpg"> → <img src="{{ asset('images/ayam.jpg') }}">
    $content = preg_replace_callback(
        '/<img\s+[^>]*src=["\']([^"\']+)["\'][^>]*>/i',
        function ($matches) {
            $path = basename($matches[1]); // ambil nama file aja
            return str_replace($matches[1], "{{ asset('images/$path') }}", $matches[0]);
        },
        $content
    );

    // === 2️⃣ Ubah tag <a href="...html"> ===
    // contoh: <a href="about.html"> → <a href="{{ url('/about') }}">
    $content = preg_replace_callback(
        '/<a\s+[^>]*href=["\']([^"\']+\.html)["\'][^>]*>/i',
        function ($matches) {
            $page = basename($matches[1], '.html');
            return str_replace($matches[1], "{{ url('/$page') }}", $matches[0]);
        },
        $content
    );

    // Simpan ulang file-nya
    file_put_contents($bladeFile, $content);

    echo "✅ Selesai ubah: " . basename($bladeFile) . "\n";
}

echo "\n🎉 Semua tag <img> dan link halaman sudah disesuaikan!\n";
?>
