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

// Fungsi untuk mendapatkan data pelanggan berdasarkan Nik KTP
function getDataPelangganById($nik_ktp) {
    global $koneksi;
    $query = "SELECT * FROM tbl_pelanggan_radenmuhammadrickyputranarayana WHERE nik_ktp_RadenMuhammadRickyPutraNarayana = '$nik_ktp'";
    $result = mysqli_query($koneksi, $query);
    return $result;
}

// Ambil nilai Nik KTP dari parameter URL
$nik_ktp = $_GET['nik_ktp_RadenMuhammadRickyPutraNarayana'];

// Ambil data pelanggan berdasarkan Nik KTP
$dataPelangganById = getDataPelangganById($nik_ktp);
$pelanggan = mysqli_fetch_assoc($dataPelangganById);

// Cek apakah data pelanggan ditemukan
if (!$pelanggan) {
    echo "Data pelanggan tidak ditemukan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Pelanggan - Aplikasi CV.Rental Mobil</title>
</head>
<body>
    <div class="dashboard-container">
        <h2>Edit Pelanggan</h2>

        <!-- Tambahkan link ke halaman CRUD dan lainnya sesuai kebutuhan -->
        <a href="dashboard.php">Kembali ke Dashboard</a>

        <!-- Tampilkan form edit pelanggan -->
        <form action="proses_edit_pelanggan.php" method="post">
            <input type="hidden" name="nik_ktp_RadenMuhammadRickyPutraNarayana" value="<?php echo $pelanggan['nik_ktp_RadenMuhammadRickyPutraNarayana']; ?>">
            
            <label for="nama_RadenMuhammadRickyPutraNarayana">Nama:</label>
            <input type="text" id="nama_RadenMuhammadRickyPutraNarayana" name="nama_RadenMuhammadRickyPutraNarayana" value="<?php echo $pelanggan['nama_RadenMuhammadRickyPutraNarayana']; ?>" required>
            
            <label for="no_hp_RadenMuhammadRickyPutraNarayana">Nomor HP:</label>
            <input type="text" id="no_hp_RadenMuhammadRickyPutraNarayana" name="no_hp_RadenMuhammadRickyPutraNarayana" value="<?php echo $pelanggan['no_hp_RadenMuhammadRickyPutraNarayana']; ?>" required>
            
            <label for="alamat_RadenMuhammadRickyPutraNarayana">Alamat:</label>
            <input type="text" id="alamat_RadenMuhammadRickyPutraNarayana" name="alamat_RadenMuhammadRickyPutraNarayana" value="<?php echo $pelanggan['alamat_RadenMuhammadRickyPutraNarayana']; ?>" required>
            
            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
