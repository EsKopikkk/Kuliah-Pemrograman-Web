<?php
include "koneksi.php"; // koneksi ke database

// Ambil semua catatan dari tabel notes
$result = mysqli_query($conn, "SELECT * FROM notes ORDER BY Tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Catatan</title>
</head>
<body>
    <h2>Daftar Catatan</h2>
    <a href="index.html">Tambah Catatan Baru</a>
    <hr>

    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <div style="border:1px solid #aaa; padding:10px; margin:10px 0;">
            <h3><?= htmlspecialchars($row['Judul']); ?></h3>
            <small><?= $row['Tanggal']; ?></small>
            <p><?= nl2br(htmlspecialchars($row['Catatan'])); ?></p>
        </div>
    <?php endwhile; ?>

</body>
</html>
