<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION["username"])) {
    // Jika tidak, alihkan ke halaman login
    header("Location: login.php");
    exit();
}

// Menampilkan pesan selamat datang
$username = $_SESSION["username"];
echo "<h1>Selamat datang, $username!</h1>";
?>

<p>Anda berhasil login. Ini adalah halaman dashboard.</p>
<a href="logout.php">Logout</a>
