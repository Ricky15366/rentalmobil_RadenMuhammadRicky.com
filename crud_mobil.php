<?php
session_start(); // Mulai session sebelum mengakses $_SESSION

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
include "config/koneksi.php";

// Fungsi untuk mendapatkan semua data mobil
function getDataMobil() {
    global $koneksi;
    $query = "SELECT * FROM tbl_mobil_radenmuhammadrickyputranarayana";
    $result = mysqli_query($koneksi, $query);
    return $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD Mobil - Aplikasi CV.Rental Mobil</title>
</head>
<body>
    <div class="dashboard-container">
        <h2>CRUD Mobil</h2>

        <!-- Tambahkan link ke halaman CRUD dan lainnya sesuai kebutuhan -->
        <a href="dashboard.php">Kembali ke Dashboard</a>

        <!-- Tampilkan data mobil -->
        <table border="1">
            <tr>
                <th>No. Plat</th>
                <th>Nama Mobil</th>
                <th>Brand Mobil</th>
                <th>Tipe Transmisi</th>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
                <th>Aksi</th>
            </tr>
            <?php
            // Ambil data mobil dari database
            $dataMobil = getDataMobil();

            // Tampilkan data dalam tabel
            while ($mobil = mysqli_fetch_assoc($dataMobil)) {
                echo "<tr>";
                echo "<td>" . $mobil['no_plat_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $mobil['nama_mobil_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $mobil['brand_mobil_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $mobil['tipe_transmisi_RadenMuhammadRickyPutraNarayana'] . "</td>";
                // Tambahkan kolom lain sesuai kebutuhan
                echo "<td>";
                echo "<a href='edit_mobil.php?no_plat=" . $mobil['no_plat_RadenMuhammadRickyPutraNarayana'] . "'>Edit</a> | ";
                echo "<a href='hapus_mobil.php?no_plat=" . $mobil['no_plat_RadenMuhammadRickyPutraNarayana'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <!-- Tambahkan form untuk menambah data mobil -->
        <h3>Tambah Mobil Baru</h3>
        <form action="proses_tambah_mobil.php" method="post">
            <label for="no_plat">No. Plat:</label>
            <input type="text" id="no_plat" name="no_plat" required>
            <label for="nama_mobil">Nama Mobil:</label>
            <input type="text" id="nama_mobil" name="nama_mobil" required>
            <label for="brand_mobil">Brand Mobil:</label>
            <input type="text" id="brand_mobil" name="brand_mobil" required>
            <label for="tipe_transmisi">Tipe Transmisi:</label>
            <input type="text" id="tipe_transmisi" name="tipe_transmisi" required>
            <!-- Tambahkan input lain sesuai kebutuhan -->
            <button type="submit">Tambah Mobil</button>
        </form>
    </div>
</body>
</html>
