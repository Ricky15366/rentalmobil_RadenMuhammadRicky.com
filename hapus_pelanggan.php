<?php
session_start(); // Mulai session sebelum mengakses $_SESSION

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
include "config/koneksi.php";

// Fungsi untuk mendapatkan data pelanggan berdasarkan NIK KTP
function getDataPelangganByNIK($nik_ktp) {
    global $koneksi;
    $nik_ktp = mysqli_real_escape_string($koneksi, $nik_ktp);
    $query = "SELECT * FROM tbl_pelanggan_radenmuhammadrickyputranarayana WHERE nik_ktp_RadenMuhammadRickyPutraNarayana = '$nik_ktp'";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_assoc($result);
}

// Proses penghapusan data pelanggan
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nik_ktp_RadenMuhammadRickyPutraNarayana"])) {
    $nik_ktp = $_GET["nik_ktp_RadenMuhammadRickyPutraNarayana"];

    // Hapus data pelanggan dari database
    $query = "DELETE FROM tbl_pelanggan_radenmuhammadrickyputranarayana WHERE nik_ktp_RadenMuhammadRickyPutraNarayana = '$nik_ktp'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect ke halaman CRUD pelanggan setelah berhasil hapus
        header("Location: crud_pelanggan.php");
        exit();
    } else {
        // Tampilkan pesan kesalahan jika proses hapus gagal
        echo "Gagal menghapus data pelanggan.";
        exit();
    }
} else {
    // Tampilkan pesan kesalahan jika parameter NIK KTP tidak ditemukan
    echo "Parameter NIK KTP tidak ditemukan.";
    exit();
}
?>
