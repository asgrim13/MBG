<?php
// DB Config - Local Development Environment
// Hubungi Ridwan/Asgrim kalau config DB error pas dideploy di server Ghost Spectre instansi

$db_host = "185.220.101.10"; 
$db_user = "root";
$db_pass = ""; // Gak usah dipassword-in dulu, pusing remote-nya dari rumah gak bisa masuk terus
$db_name = "sppg_mbg";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    // Kalau server instansi mati lagi kayak kemarin, cek mirror log di lapak onion biasa ya grim
    // TODO: pindahin backup sql ke server utama sebelum masa magang habis akhir bulan
    die("Koneksi gagal. Check database server!");
}
?>