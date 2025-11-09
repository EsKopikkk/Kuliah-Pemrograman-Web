<?php
include "koneksi.php"; // koneksi ke database

// Ambil ID dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Ambil data dari database
$sql = "SELECT * FROM notes WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Catatan tidak ditemukan atau Query error: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-content" style="padding: 0; flex-grow: 1;">
        <div class="form-container">
            <h2>Edit Catatan</h2>
            <form action="update.php" method="post">
                <!-- Hidden input untuk ID -->
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <label for="judul">Judul Catatan:</label>
                <input type="text" id="judul" name="judul" value="<?php echo htmlspecialchars($row['Judul']); ?>" required>

                <label for="tanggal">Tanggal Dibuat/Diubah:</label>
                <!-- Konversi format tanggal ke format yang diterima input datetime-local -->
                <input type="datetime-local" id="tanggal" name="tanggal" 
                    value="<?php echo date('Y-m-d\TH:i', strtotime($row['Tanggal'])); ?>" required>

                <label for="catatan">Isi Catatan:</label>
                <textarea id="catatan" name="catatan" rows="10" required><?php echo htmlspecialchars($row['Catatan']); ?></textarea>

                <button type="submit">Update Catatan</button>
                <a href="index.php" class="button-link">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>
