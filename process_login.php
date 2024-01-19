<?php
session_start();
include "config/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Lakukan validasi login sesuai kebutuhan
    // ...

    // Validasi dengan username admin dan password admin123
    if ($username === "admin" && $password === "admin123") {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Login gagal. Silakan coba lagi.";
    }
} else {
    echo "Metode request tidak valid.";
}
?>
