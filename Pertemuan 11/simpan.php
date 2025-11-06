<?php
include "koneksi.php";

// Pastikan data POST dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gunakan mysqli_real_escape_string untuk sanitasi data
    $judul   = mysqli_real_escape_string($conn, $_POST['judul']);
    $catatan = mysqli_real_escape_string($conn, $_POST['catatan']);

    // Gunakan fungsi NOW() MySQL untuk mendapatkan waktu server saat ini (WITA)
    $sql = "INSERT INTO notes (Judul, Tanggal, Catatan) VALUES ('$judul', NOW(), '$catatan')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit;
    } else {
        // Tampilkan pesan error jika gagal
        ?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Gagal Simpan</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div class="form-container" style="text-align: center; margin-top: 100px;">
                <h2>Gagal Menyimpan Catatan</h2>
                <p>Terjadi kesalahan saat menyimpan data:</p>
                <p style="color: red; font-weight: bold;"><?php echo mysqli_error($conn); ?></p>
                <a href='tambah.php' class="button-link">Coba Lagi</a>
                <a href='index.php' class="button-link" style="background-color: #555;">Kembali ke Daftar</a>
            </div>
        </body>
        </html>
        <?php
    }
} else {
    header("Location: tambah.php"); // Jika diakses langsung tanpa POST
    exit;
}
?>
