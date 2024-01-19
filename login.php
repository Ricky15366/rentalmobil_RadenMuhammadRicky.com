<?php
// Pastikan session dimulai di awal file
session_start();

// Simulasikan daftar pengguna
$users = array(
    array('username' => 'admin', 'password' => 'admin123', 'nama' => 'Admin User', 'level' => 'admin'),
    array('username' => 'user', 'password' => 'user123', 'nama' => 'Regular User', 'level' => 'user')
);

// Fungsi untuk memeriksa keberadaan pengguna berdasarkan username dan password
function cekLogin($username, $password) {
    global $users;

    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            return $user;
        }
    }

    return null;
}

// Proses form login jika ada pengiriman data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cek login
    $user = cekLogin($username, $password);

    if ($user) {
        // Jika login berhasil, simpan informasi pengguna ke dalam session
        $_SESSION["username"] = $user["username"];
        $_SESSION["nama"] = $user["nama"];
        $_SESSION["level"] = $user["level"];

        // Redirect ke halaman dashboard atau sesuai kebutuhan
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika login gagal, tampilkan pesan kesalahan
        $pesan_error = "Login gagal. Periksa kembali username dan password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login - Aplikasi CV.Rental Mobil</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <?php
        // Tampilkan pesan kesalahan jika ada
        if (isset($pesan_error)) {
            echo "<p class='error'>$pesan_error</p>";
        }
        ?>

        <!-- Form Login -->
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
