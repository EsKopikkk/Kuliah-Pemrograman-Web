<?php
include "koneksi.php";

// Sanitasi dan ambil data
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$judul = mysqli_real_escape_string($conn, $_POST['judul']);
$tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
$catatan = mysqli_real_escape_string($conn, $_POST['catatan']);

// Query UPDATE
$sql = "UPDATE notes 
        SET Judul='$judul', Tanggal='$tanggal', Catatan='$catatan' 
        WHERE id=$id";

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
        <title>Gagal Update</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form-container" style="text-align: center; margin-top: 100px;">
            <h2>Gagal Mengupdate Catatan</h2>
            <p>Terjadi kesalahan saat mengupdate data:</p>
            <p style="color: red; font-weight: bold;"><?php echo mysqli_error($conn); ?></p>
            <a href='edit.php?id=<?php echo $id; ?>' class="button-link">Coba Lagi</a>
            <a href='index.php' class="button-link" style="background-color: #555;">Kembali ke Daftar</a>
        </div>
    </body>
    </html>
    <?php
}
?>
