<?php
session_start();

// Username & password dummy
$valid_user = "admin";
$valid_pass = "123456";

// Ambil dari form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Cek validitas
if ($username === $valid_user && $password === $valid_pass) {
    $_SESSION['username'] = $username;
    header("Location: mencari_konser_berdasarkan_kategori.php");
    exit();
} else {
    echo "<script>alert('Username atau password salah!'); window.location.href='login.php';</script>";
}
?>