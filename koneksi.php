<?php

//deklasrasi variabel
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "krca";    

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$kon = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>