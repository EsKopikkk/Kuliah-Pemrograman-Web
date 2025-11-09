<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="main-content" style="padding: 0; flex-grow: 1;">
        <div class="form-container">
            <h2>Buat Catatan Baru</h2>
            <form action="simpan.php" method="POST">
                <label for="judul">Judul Catatan:</label>
                <input type="text" id="judul" name="judul" required placeholder="Contoh: Rapat Mingguan">

                <!-- Input Tanggal Dihilangkan, akan diisi otomatis di simpan.php -->

                <label for="catatan">Isi Catatan:</label>
                <textarea id="catatan" name="catatan" rows="10" required placeholder="Tuliskan isi catatan Anda di sini..."></textarea>

                <button type="submit">Simpan Catatan</button>
                <a href="index.php" class="button-link">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>
