<?php
// DB Config - Local Development Environment
// Hubungi Ridwan/Asgrim kalau config DB error pas dideploy di server Ghost Spectre instansi

$db_host = "isi ip sasaran"; 
$db_user = "root";
$db_pass = ""; //celahnya bisasanya disini
$db_name = "sppg_mbg";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
      die("Koneksi gagal. Check database server!");
}
?>
//
