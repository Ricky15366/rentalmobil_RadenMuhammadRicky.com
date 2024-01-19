<!-- dashboard.php -->
<?php
session_start(); // Mulai session sebelum mengakses $_SESSION
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CV. Rental Mobil Raden Muhammad Ricky Putra Narayana</title>
</head>
<body>
    <div class="dashboard-container">
        <?php if (isset($_SESSION["username"])) : ?>
            <h2>Selamat Datang</h2>
            <!-- Tambahkan link ke halaman CRUD dan lainnya sesuai kebutuhan -->
            <a href="crud_mobil.php">CRUD Mobil</a>
            <a href="crud_pelanggan.php">CRUD Pelanggan</a>
            <a href="crud_rental.php">CRUD Rental</a>
            <a href="logout.php">Logout</a>
        <?php else : ?>
            <p>Silakan login terlebih dahulu.</p>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </div>
</body>
</html>
