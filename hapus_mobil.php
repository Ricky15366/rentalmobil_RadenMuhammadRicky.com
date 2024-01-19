<?php
session_start(); // Mulai session sebelum mengakses $_SESSION

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
include "config/koneksi.php";

// Fungsi untuk menghapus mobil berdasarkan nomor plat
function hapusMobil($no_plat) {
    global $koneksi;
    $query = "DELETE FROM tbl_mobil_radenmuhammadrickyputranarayana WHERE no_plat_RadenMuhammadRickyPutraNarayana = '$no_plat'";
    $result = mysqli_query($koneksi, $query);
    return $result;
}

// Cek apakah nomor plat telah diberikan di URL
if (isset($_GET['no_plat'])) {
    $no_plat = $_GET['no_plat'];
    
    // Hapus data mobil dari database
    $result_hapus = hapusMobil($no_plat);

    if ($result_hapus) {
        // Redirect ke halaman CRUD mobil setelah berhasil hapus
        header("Location: crud_mobil.php");
        exit();
    } else {
        echo "Gagal menghapus data mobil.";
    }
} else {
    // Redirect jika nomor plat tidak diberikan
    header("Location: crud_mobil.php");
    exit();
}
?>
