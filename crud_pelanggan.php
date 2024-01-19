<?php
// Pastikan session dimulai di awal file
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
include "config/koneksi.php";

// Fungsi untuk mendapatkan semua data pelanggan
function getDataPelanggan() {
    global $koneksi;
    $query = "SELECT * FROM tbl_pelanggan_radenmuhammadrickyputranarayana";
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
    <title>CRUD Pelanggan - Aplikasi CV.Rental Mobil</title>
</head>
<body>
    <div class="dashboard-container">
        <h2>CRUD Pelanggan</h2>

        <!-- Tambahkan link ke halaman CRUD dan lainnya sesuai kebutuhan -->
        <a href="dashboard.php">Kembali ke Dashboard</a>

        <!-- Tampilkan data pelanggan -->
        <table border="1">
            <tr>
                <th>Nik KTP</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php
            // Ambil data pelanggan dari database
            $dataPelanggan = getDataPelanggan();

            // Tampilkan data dalam tabel
            while ($pelanggan = mysqli_fetch_assoc($dataPelanggan)) {
                echo "<tr>";
                echo "<td>" . $pelanggan['nik_ktp_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $pelanggan['nama_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $pelanggan['no_hp_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $pelanggan['alamat_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>";
                echo "<a href='edit_pelanggan.php?nik_ktp_RadenMuhammadRickyPutraNarayana=" . $pelanggan['nik_ktp_RadenMuhammadRickyPutraNarayana'] . "'>Edit</a> | ";
                echo "<a href='hapus_pelanggan.php?nik_ktp_RadenMuhammadRickyPutraNarayana=" . $pelanggan['nik_ktp_RadenMuhammadRickyPutraNarayana'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <!-- Tambahkan form untuk menambah data pelanggan -->
        <h3>Tambah Pelanggan Baru</h3>
        <form action="proses_tambah_pelanggan.php" method="post">
            <label for="nik_ktp_RadenMuhammadRickyPutraNarayana">Nik KTP:</label>
            <input type="text" id="nik_ktp_RadenMuhammadRickyPutraNarayana" name="nik_ktp_RadenMuhammadRickyPutraNarayana" required>
            <label for="nama_RadenMuhammadRickyPutraNarayana">Nama:</label>
            <input type="text" id="nama_RadenMuhammadRickyPutraNarayana" name="nama_RadenMuhammadRickyPutraNarayana" required>
            <label for="no_hp_RadenMuhammadRickyPutraNarayana">Nomor HP:</label>
            <input type="text" id="no_hp_RadenMuhammadRickyPutraNarayana" name="no_hp_RadenMuhammadRickyPutraNarayana" required>
            <label for="alamat_RadenMuhammadRickyPutraNarayana">Alamat:</label>
            <input type="text" id="alamat_RadenMuhammadRickyPutraNarayana" name="alamat_RadenMuhammadRickyPutraNarayana" required>
            <button type="submit">Tambah Pelanggan</button>
        </form>
    </div>
</body>
</html>
