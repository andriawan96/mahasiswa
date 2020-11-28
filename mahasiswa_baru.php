<?php
  //buat koneksi ke database universitas
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "universitas";
  $koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

  //cek periksa koneksi, tam[ilan pesan kesalahan jika gagal
  if (!$koneksi) {
    die("koneksi dengan database gagal :".mysqli_connect_errno(). "-".mysqli_connect_error());
  }

  //cek apakah table mahasiswa baru suda ada, jika ada hapus table
  $query = "DROP TABLE IF EXISTS mahasiswa_baru";
  $hasil_query = mysqli_query($koneksi, $query);

  if(!$hasil_query){
    die("query eror :".mysqli_errno($koneksi). "-".mysqli_error($koneksi));
  }

  //buat query untuk create table mahasiswa_baru
  $query = "CREATE TABLE mahasiswa_baru (nim char(8), nama varchar(100), tempat_lahir varchar(50), tanggal_lahir DATE, fakultas varchar(50), jurusan varchar(50), ipk decimal(3,2), primary key (nim))";

  $hasil_query = mysqli_query($koneksi, $query);

  if(!$hasil_query){
    die("query error :".mysqli_errno($koneksi). "-".mysqli_error($koneksi));
  }

  //buat query untuk insert data ke table mahasiswa_baru
  $query = "insert into mahasiswa_baru values ('20201','rena','Bandung','2000-11-23','sastra','Inggris',3.1),
            ('20202','nayla','Bogor','2000-11-24','sastra','Indonesia',3.1),
            ('20203','rere','Tangerang','2000-11-25','sastra','arab',3.1)";

  $hasil_query = mysqli_query($koneksi, $query);

  if(!$hasil_query){
    die("query error : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
  }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="author" content="andriawan">
     <meta name="keywords" content="universitas, mahasiswa, baru">
     <meta name="description" content="penambahan mahasiswa">
     <title>Tabel | mahasiswa baru</title>
     <link rel="icon" href="plus.png" type="image/png" >
   </head>
   <body>
     <h1>Tabel Mahasiswa</h1>
     <table border="1">
       <tr>
         <th>NIM</th>
         <th>Nama</th>
         <th>Tempat Lahir</th>
         <th>Tanggal Lahir</th>
         <th>Fakultas</th>
         <th>Jurusan</th>
         <th>IPK</th>
       </tr>
     </table>
   </body>
 </html>
