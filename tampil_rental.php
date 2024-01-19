<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

include "config/koneksi.php";

function getDataRental() {
    global $koneksi;
    $query = "SELECT * FROM tbl_rental_radenmuhammadrickyputranarayana
              INNER JOIN tbl_pelanggan_radenmuhammadrickyputranarayana 
              ON tbl_rental_radenmuhammadrickyputranarayana.nik_ktp_RadenMuhammadRickyPutraNarayana=tbl_pelanggan_radenmuhammadrickyputranarayana.nik_ktp_RadenMuhammadRickyPutraNarayana
              INNER JOIN tbl_mobil_radenmuhammadrickyputranarayana 
              ON tbl_rental_radenmuhammadrickyputranarayana.no_plat_RadenMuhammadRickyPutraNarayana=tbl_mobil_radenmuhammadrickyputranarayana.no_plat_RadenMuhammadRickyPutraNarayana";
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
    <title>CV. Rental Mobil Raden Muhammad Ricky Putra Narayana</title>
    <style>
        /* Tambahkan gaya untuk button hijau dan biru */
        button {
            padding: 10px 15px;
            margin: 5px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
        }

        .btn-blue {
            background-color: #3498db;
        }

        .btn-green {
            background-color: #4caf50;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>CRUD Rental</h2>

        <table border="1">
            <tr>
                <th>No TRX</th>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Mobil</th>
                <th>Lama</th>
                <th>Harga</th>
                <th>Total Bayar</th>
                <th>Aksi</th>
            </tr>
            <?php
            $dataRental = getDataRental();           

            while ($rental = mysqli_fetch_assoc($dataRental)) {
                echo "<tr>";
                echo "<td>" . $rental['no_trx_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['tgl_rental_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['nama_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['nama_mobil_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['lama_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['harga_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['total_bayar_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>";
                echo "<a href='edit_rental.php?no_trx_RadenMuhammadRickyPutraNarayana=" . $rental['no_trx_RadenMuhammadRickyPutraNarayana'] . "'>Edit</a> | ";
                echo "<a href='hapus_rental.php?no_trx_RadenMuhammadRickyPutraNarayana=" . $rental['no_trx_RadenMuhammadRickyPutraNarayana'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
