<?php
//buat koneksi ke database universitas
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "universitas";
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$_POST['nama'] = "1; DROP TABLE nilai_baru;";

$nama = $_POST['nama'];
$query = "SELECT * FROM nilai_baru WHERE id='{$nama}'";
$hasil_query = mysqli_query($koneksi,$query);
 ?>
