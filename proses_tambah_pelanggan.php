<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
include "config/koneksi.php";

// Fungsi untuk menambahkan data pelanggan ke dalam database
function tambahDataPelanggan($nik_ktp, $nama_pelanggan, $no_hp, $alamat) {
    global $koneksi;

    // Escape string untuk menghindari SQL Injection
    $nik_ktp = mysqli_real_escape_string($koneksi, $nik_ktp);
    $nama_pelanggan = mysqli_real_escape_string($koneksi, $nama_pelanggan);
    $no_hp = mysqli_real_escape_string($koneksi, $no_hp);
    $alamat = mysqli_real_escape_string($koneksi, $alamat);

    // Query untuk menambahkan data pelanggan
    $query = "INSERT INTO tbl_pelanggan_radenmuhammadrickyputranarayana 
              (nik_ktp_RadenMuhammadRickyPutraNarayana, nama_RadenMuhammadRickyPutraNarayana, no_hp_RadenMuhammadRickyPutraNarayana, alamat_RadenMuhammadRickyPutraNarayana) 
              VALUES ('$nik_ktp', '$nama_pelanggan', '$no_hp', '$alamat')";

    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        // Tambahkan penanganan kesalahan jika query gagal
        die("Gagal menambahkan data pelanggan: " . mysqli_error($koneksi));
    }

    return $result;
}

// Proses form jika ada pengiriman data tambah pelanggan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nik_ktp = $_POST["nik_ktp_RadenMuhammadRickyPutraNarayana"];
    $nama_pelanggan = $_POST["nama_RadenMuhammadRickyPutraNarayana"];
    $no_hp = $_POST["no_hp_RadenMuhammadRickyPutraNarayana"];
    $alamat = $_POST["alamat_RadenMuhammadRickyPutraNarayana"];

    // Panggil fungsi untuk menambahkan data pelanggan
    $result = tambahDataPelanggan($nik_ktp, $nama_pelanggan, $no_hp, $alamat);

    if ($result) {
        // Redirect ke halaman CRUD pelanggan setelah berhasil tambah
        header("Location: crud_pelanggan.php");
        exit();
    } else {
        // Tampilkan pesan kesalahan jika proses tambah gagal
        echo "Gagal menambahkan data pelanggan.";
    }
}
?>
