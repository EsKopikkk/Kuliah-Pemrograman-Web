<?php
include "koneksi.php";

// Pastikan ID diberikan melalui URL dan valid
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id == 0) {
    header("Location: index.php");
    exit;
}

// Buat query DELETE
$sql = "DELETE FROM notes WHERE id=$id";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    // Jika berhasil, alihkan kembali ke halaman utama
    header("Location: index.php");
    exit;
} else {
    // Jika gagal, tampilkan pesan error dengan card
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gagal Hapus</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form-container" style="text-align: center; margin-top: 100px;">
            <h2>Gagal Menghapus Catatan</h2>
            <p>Terjadi kesalahan saat menghapus data:</p>
            <p style="color: red; font-weight: bold;"><?php echo mysqli_error($conn); ?></p>
            <a href='index.php' class="button-link" style="background-color: #555;">Kembali ke Daftar</a>
        </div>
    </body>
    </html>
    <?php
}
?>
