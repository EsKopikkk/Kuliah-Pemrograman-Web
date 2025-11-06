<?php
// Menggunakan file koneksi.php
include "koneksi.php";

// Fungsi untuk mendapatkan kelas warna acak per catatan
function getColorClass($id) {
    $colors = ['color-yellow', 'color-red', 'color-blue'];
    // Menggunakan ID sebagai seed agar warna tetap sama untuk ID yang sama
    $index = $id % count($colors); 
    return $colors[$index];
}

// 1. Tentukan urutan (sort) yang diminta dari URL
// Default: Tanggal Terbaru (Tanggal DESC)
$sort_option = isset($_GET['sort']) ? $_GET['sort'] : 'latest'; 

// Tentukan klausa ORDER BY berdasarkan pilihan sort
$orderBy = "Tanggal DESC"; // Default
switch ($sort_option) {
    case 'oldest':
        $orderBy = "Tanggal ASC";
        break;
    case 'title_asc':
        $orderBy = "Judul ASC";
        break;
    case 'latest':
    default:
        $orderBy = "Tanggal DESC";
        break;
}

// 2. Jalankan query ambil data (Read) dengan sorting
$sql = "SELECT * FROM notes ORDER BY $orderBy";
$result = mysqli_query($conn, $sql);

// Cek apakah query berhasil
if (!$result) {
    die("Query error: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Notes - Catatan Saya</title>
    <!-- Font Awesome (untuk icon sederhana) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-header">
            <i class="fas fa-bookmark" style="margin-right: 10px; font-size: 24px;"></i>
            <h3>NOTES</h3>
        </div>

        <a href="tambah.php" class="add-new-button">
            <i class="fas fa-plus-circle menu-item-icon" style="margin-right: 5px;"></i> Tambah Baru
        </a>

        
    </div>

    <!-- KONTEN UTAMA -->
    <div class="main-content">
        <div class="main-header">
            <h1>MY NOTES</h1>
            <!-- Search Bar Sederhana -->
            <div class="search-bar">
                <i class="fas fa-search" style="color: #999;"></i>
                <input type="text" placeholder="Cari catatan...">
            </div>
        </div>

        <!-- Bagian Daftar Catatan -->
        <div class="section-header">
            <span class="section-title">Semua Catatan</span>
            
            <!-- Dropdown Sort -->
            <form method="GET" class="sort-form">
                <label for="sort">Urutkan:</label>
                <select name="sort" id="sort" onchange="this.form.submit()">
                    <option value="latest" <?= $sort_option == 'latest' ? 'selected' : '' ?>>Terbaru</option>
                    <option value="oldest" <?= $sort_option == 'oldest' ? 'selected' : '' ?>>Terlama</option>
                    <option value="title_asc" <?= $sort_option == 'title_asc' ? 'selected' : '' ?>>Judul (A-Z)</option>
                </select>
            </form>
        </div>

        <!-- Grid untuk menampilkan catatan -->
        <div class="notes-grid">
            <?php 
            // Cek apakah ada catatan
            if (mysqli_num_rows($result) > 0) :
                // Loop untuk menampilkan setiap catatan
                while ($row = mysqli_fetch_assoc($result)) : 
            ?>
                <div class="note-card <?= getColorClass($row['id']); ?>">
                    <!-- Tombol Edit & Hapus -->
                    <div class="note-actions">
                        <a href="edit.php?id=<?php echo $row['id']; ?>" title="Edit">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="hapus.php?id=<?php echo $row['id']; ?>" class="delete-btn" title="Hapus"
                            onclick="return confirm('Anda yakin ingin menghapus catatan ini?');">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                    
                    <h3>
                        <?= htmlspecialchars($row['Judul']); ?>
                    </h3>
                    
                    <p>
                        <?= nl2br(htmlspecialchars($row['Catatan'])); ?>
                    </p>
                    
                    <small>
                        <!-- Menampilkan tanggal sesuai zona waktu yang diatur di koneksi.php -->
                        <i class="far fa-clock"></i> <?= date('d M Y, H:i', strtotime($row['Tanggal'])); ?>
                    </small>
                </div>
            <?php 
                endwhile; 
            else :
            ?>
                <div class="no-notes" style="grid-column: 1 / -1;">
                    <p>Belum ada catatan yang tersimpan. Klik "Tambah Baru" di sidebar untuk membuat catatan.</p>
                </div>
            <?php
            endif;
            // Tutup koneksi
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>

</html>
