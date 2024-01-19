<?php
session_start(); // Mulai session sebelum mengakses $_SESSION

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
include "config/koneksi.php";

// Fungsi untuk menambah data mobil ke database
function tambahMobil($no_plat, $nama_mobil, $brand_mobil, $tipe_transmisi) {
    global $koneksi;
    $query = "INSERT INTO tbl_mobil_radenmuhammadrickyputranarayana (no_plat_RadenMuhammadRickyPutraNarayana, 
                                                                      nama_mobil_RadenMuhammadRickyPutraNarayana, 
                                                                      brand_mobil_RadenMuhammadRickyPutraNarayana, 
                                                                      tipe_transmisi_RadenMuhammadRickyPutraNarayana) 
              VALUES ('$no_plat', '$nama_mobil', '$brand_mobil', '$tipe_transmisi')";
    $result = mysqli_query($koneksi, $query);
    return $result;
}

// Proses form jika ada pengiriman data tambah
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_plat = $_POST["no_plat"];
    $nama_mobil = $_POST["nama_mobil"];
    $brand_mobil = $_POST["brand_mobil"];
    $tipe_transmisi = $_POST["tipe_transmisi"];

    // Tambah data mobil ke database
    $result_tambah = tambahMobil($no_plat, $nama_mobil, $brand_mobil, $tipe_transmisi);

    if ($result_tambah) {
        // Redirect ke halaman CRUD mobil setelah berhasil tambah
        header("Location: crud_mobil.php");
        exit();
    } else {
        echo "Gagal menambahkan data mobil.";
    }
}
?>
