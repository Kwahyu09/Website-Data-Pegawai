<?php
// Include file koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menghindari SQL Injection
    $username = mysqli_real_escape_string($kon, $username);
    $password = mysqli_real_escape_string($kon, $password);

    // Hashing password
    $password = $password; // Gunakan password_hash() dan password_verify() untuk keamanan lebih baik

    // Query untuk memeriksa pengguna
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($kon, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Login berhasil
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirect ke halaman welcome
    } else {
        // Login gagal
        echo "Username atau password salah!";
    }
}
?>
