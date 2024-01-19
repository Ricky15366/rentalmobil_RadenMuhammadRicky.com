<?php
session_start(); // Mulai session sebelum mengakses $_SESSION

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
include "config/koneksi.php";

// Fungsi untuk mendapatkan data mobil berdasarkan nomor plat
function getMobilByNoPlat($no_plat) {
    global $koneksi;
    $query = "SELECT * FROM tbl_mobil_radenmuhammadrickyputranarayana WHERE no_plat_RadenMuhammadRickyPutraNarayana = '$no_plat'";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_assoc($result);
}

// Cek apakah nomor plat telah diberikan di URL
if (isset($_GET['no_plat'])) {
    $no_plat = $_GET['no_plat'];
    $mobil = getMobilByNoPlat($no_plat);
} else {
    // Redirect jika nomor plat tidak diberikan
    header("Location: crud_mobil.php");
    exit();
}

// Proses form jika ada pengiriman data edit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mobil = $_POST["nama_mobil"];
    $brand_mobil = $_POST["brand_mobil"];
    $tipe_transmisi = $_POST["tipe_transmisi"];

    // Update data mobil ke database
    $query_update = "UPDATE tbl_mobil_radenmuhammadrickyputranarayana 
                     SET nama_mobil_RadenMuhammadRickyPutraNarayana = '$nama_mobil',
                         brand_mobil_RadenMuhammadRickyPutraNarayana = '$brand_mobil',
                         tipe_transmisi_RadenMuhammadRickyPutraNarayana = '$tipe_transmisi'
                     WHERE no_plat_RadenMuhammadRickyPutraNarayana = '$no_plat'";
    
    $result_update = mysqli_query($koneksi, $query_update);

    if ($result_update) {
        // Redirect ke halaman CRUD mobil setelah berhasil update
        header("Location: crud_mobil.php");
        exit();
    } else {
        echo "Gagal mengupdate data mobil. Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Mobil - Aplikasi CV.Rental Mobil</title>
</head>
<body>
    <div class="dashboard-container">
        <h2>Edit Mobil</h2>

        <!-- Tambahkan link ke halaman CRUD dan lainnya sesuai kebutuhan -->
        <a href="crud_mobil.php">Kembali ke CRUD Mobil</a>

        <!-- Form edit data mobil -->
        <form action="" method="post">
            <label for="no_plat_RadenMuhammadRickyPutraNarayana">No. Plat:</label>
            <input type="text" id="no_plat_RadenMuhammadRickyPutraNarayana" name="no_plat_RadenMuhammadRickyPutraNarayana" value="<?php echo $mobil['no_plat_RadenMuhammadRickyPutraNarayana']; ?>" readonly>
            
            <label for="nama_mobil">Nama Mobil:</label>
            <input type="text" id="nama_mobil" name="nama_mobil" value="<?php echo $mobil['nama_mobil_RadenMuhammadRickyPutraNarayana']; ?>" required>

            <label for="brand_mobil">Brand Mobil:</label>
            <input type="text" id="brand_mobil" name="brand_mobil" value="<?php echo $mobil['brand_mobil_RadenMuhammadRickyPutraNarayana']; ?>" required>

            <label for="tipe_transmisi">Tipe Transmisi:</label>
            <input type="text" id="tipe_transmisi" name="tipe_transmisi" value="<?php echo $mobil['tipe_transmisi_RadenMuhammadRickyPutraNarayana']; ?>" required>

            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
