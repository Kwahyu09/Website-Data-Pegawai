<?php
    // Mulai session untuk mengakses data session yang ada
    session_start();

    // Hancurkan semua data session yang ada
    session_unset();  // Menghapus semua variabel session
    session_destroy();  // Menghancurkan session

    // Alihkan pengguna ke halaman login
    header("Location: login.php");  // Ganti dengan file login yang sesuai
    exit();
?>