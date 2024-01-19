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
    $query = "SELECT * FROM tbl_rental_radenmuhammadrickyputranarayana";
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
    <script>
        // Fungsi untuk menghitung total bayar
        function hitungTotalBayar() {
            var harga = document.getElementById("harga_RadenMuhammadRickyPutraNarayana").value;
            var lama = document.getElementById("lama_RadenMuhammadRickyPutraNarayana").value;
            var totalBayar = harga * lama;
            document.getElementById("total_bayar_RadenMuhammadRickyPutraNarayana").value = totalBayar;
        }
    </script>
</head>
<body>
    <div class="dashboard-container">
        <h2>CRUD Rental</h2>

        <a href="dashboard.php">Kembali ke Dashboard</a>

        <table border="1">
            <tr>
                <th>No TRX</th>
                <th>NIK KTP</th>
                <th>No Plat</th>
                <th>Tanggal Rental</th>
                <th>Jam Rental</th>
                <th>Harga</th>
                <th>Lama Rental</th>
                <th>Total Bayar</th>
                <th>Aksi</th>
            </tr>
            <?php
            $dataRental = getDataRental();           
            $notrx="TRX-".date("Ymdhis");

            while ($rental = mysqli_fetch_assoc($dataRental)) {
                echo "<tr>";
                echo "<td>" . $rental['no_trx_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['nik_ktp_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['no_plat_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['tgl_rental_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['jam_rental_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['harga_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['lama_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>" . $rental['total_bayar_RadenMuhammadRickyPutraNarayana'] . "</td>";
                echo "<td>";
                echo "<a href='edit_rental.php?no_trx_RadenMuhammadRickyPutraNarayana=" . $rental['no_trx_RadenMuhammadRickyPutraNarayana'] . "'>Edit</a> | ";
                echo "<a href='hapus_rental.php?no_trx_RadenMuhammadRickyPutraNarayana=" . $rental['no_trx_RadenMuhammadRickyPutraNarayana'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <h3>Tambah Rental Baru</h3>
        <form action="tampil_rental.php" method="post" oninput="hitungTotalBayar()">
            <label for="no_trx_RadenMuhammadRickyPutraNarayana">No TRX:</label>
            <input type="text" id="no_trx_RadenMuhammadRickyPutraNarayana" name="no_trx_RadenMuhammadRickyPutraNarayana" value="<?php echo $notrx; ?>" readonly required>

            <div class="select-container">
            <label for="nik_ktp_RadenMuhammadRickyPutraNarayana">Pelanggan:</label>
            <select id="nik_ktp_RadenMuhammadRickyPutraNarayana" name="nik_ktp_RadenMuhammadRickyPutraNarayana" required>
            <option value="" style="text-align: center;"> -- Pilih Pelanggan --</option>
            <?php
            include "config/koneksi.php";
            $tampil=mysqli_query($koneksi,"SELECT * FROM tbl_pelanggan_RadenMuhammadRickyPutraNarayana");
            while($data=mysqli_fetch_array($tampil)){
            echo "<option value='$data[nik_ktp_RadenMuhammadRickyPutraNarayana]'>$data[nik_ktp_RadenMuhammadRickyPutraNarayana] - $data[nama_RadenMuhammadRickyPutraNarayana]</option>";
            }
            ?>
            </select>

            <br></br>
            <div class="select-container">
            <label for="no_plat_RadenMuhammadRickyPutraNarayana">Mobil:</label>
            <select id="no_plat_RadenMuhammadRickyPutraNarayana" name="no_plat_RadenMuhammadRickyPutraNarayana" required>
            <option value="" style="text-align: center;"> -- Pilih Mobil --</option>
            <?php
            include "config/koneksi.php";
            $tampil=mysqli_query($koneksi,"SELECT * FROM tbl_mobil_RadenMuhammadRickyPutraNarayana");
            while($data=mysqli_fetch_array($tampil)){
            echo "<option value='$data[no_plat_RadenMuhammadRickyPutraNarayana]'>$data[no_plat_RadenMuhammadRickyPutraNarayana] - $data[nama_mobil_RadenMuhammadRickyPutraNarayana]</option>";
            }
            ?>
            </select>

            <style>
            .select-container {
            text-align: center;
             }

            .select-container label {
             display: block; /* Membuat label sebagai elemen blok */
            margin-bottom: 5px; /* Menambahkan margin bawah agar tidak rapat dengan dropdown */
            }
            </style>

            <br></br>
            <label for="tgl_rental_RadenMuhammadRickyPutraNarayana">Tanggal Ambil:</label>
            <input type="date" id="tgl_rental_RadenMuhammadRickyPutraNarayana" name="tgl_rental_RadenMuhammadRickyPutraNarayana" required>

            <label for="jam_rental_RadenMuhammadRickyPutraNarayana">Jam Ambil:</label>
            <input type="time" id="jam_rental_RadenMuhammadRickyPutraNarayana" name="jam_rental_RadenMuhammadRickyPutraNarayana" required>

            <label for="harga_RadenMuhammadRickyPutraNarayana">Harga Rental:</label>
            <input type="number" id="harga_RadenMuhammadRickyPutraNarayana" name="harga_RadenMuhammadRickyPutraNarayana" required>

            <label for="lama_RadenMuhammadRickyPutraNarayana">Lama Rental:</label>
            <input type="number" id="lama_RadenMuhammadRickyPutraNarayana" name="lama_RadenMuhammadRickyPutraNarayana" required>

            <label for="total_bayar_RadenMuhammadRickyPutraNarayana">Total Bayar:</label>
            <input type="number" id="total_bayar_RadenMuhammadRickyPutraNarayana" name="total_bayar_RadenMuhammadRickyPutraNarayana" readonly required>

            <div class="button-container">
                <a href="dashboard.php"><button type="button" class="btn-red">Kembali</button></a>
                <button type="submit" class="btn-blue">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
