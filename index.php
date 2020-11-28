<?php
  //koneksi ke php
  $koneksi = mysqli_connect("localhost","root","","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  //if (!$koneksi) {
    //die("koneksi database gagal :".mysqli_connect_errno(). " - ". mysqli_connect_error());
  //}

  //periksa koneksi tanpa pesan kesalahan
  if(!$koneksi){
    die("koneksi ke database gagal");
  }

  //jalankan quer (menampilkan isi database)
  $hasil_query_tblmahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
//{
  //6menampilkan isi data table mahasiswa
  //$data_tbmahasiswa = mysqli_fetch_row($hasil_query);

  //menampilkan isi table Mahasiswa dengan mysqli_fetch_row
  // for ($i=0; $i < 5; $i++) {
  // $data_mahasiswa = mysqli_fetch_row($hasil_query);
  // echo $data_mahasiswa[0]."<br>";
  // echo $data_mahasiswa[1]."<br>";
  // echo $data_mahasiswa[2]."<br>";
  // echo $data_mahasiswa[3]."<br>";
  // echo $data_mahasiswa[4]."<br>";
  // echo $data_mahasiswa[5]."<br>";
  // echo $data_mahasiswa[6]."<br>";
  // echo "======== <br>";
  // }

  //menampilkan isi table Mahasiswa dengan while
  // while ($data = mysqli_fetch_row($hasil_query)) {
  //   echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6]"."<br>";
  // }

  //menampilkan isi table Mahasiswa dengan mysqli_fetch_assoc
  // $data = mysqli_fetch_assoc($hasil_query);
  // if (!$data) {
  //   die("salah query". mysqli_connect_errno());
  // }
  //echo "<pre>";
  //echo $data['nim'] ."<br>";
  //echo "</pre>";

  //dengan while mysqli_fetch_assoc
  // while ($data = mysqli_fetch_assoc($hasil_query)) {
  //   echo "$data[nim] $data[nama] $data[tempat_lahir] <br>";
  // }

  // menampikan data denga mysqli fect array
  //$data = mysqli_fetch_array($hasil_query);
  //lihat data dengan fungsi print_r
  //echo "<pre>";
  //print_r($data);
//  echo "</pre>";
  //echo "============<br>";
  //dengan while
  // while ($data = mysqli_fetch_assoc($hasil_query)) {
  //   echo $data['nim']."<br>";
  //   echo $data['nama']."<br>";
  //   echo $data['fakultas']."<br>";
  //   echo "=======<br>";
  // }
  //}

  //Dengan mysqli_fetch_array
  //$data = mysqli_fetch_array($hasil_query);

  // echo "<pre>";
  // print_r($data);
  // echo "</pre>";
  // echo "------------------------------------------------------------------------------------------------------------------------------- <br>";
  //Dengan while
  // while ($data = mysqli_fetch_array($hasil_query)) {
  //   echo "$data[nim] / $data[1] / $data[2] / $data[3] / $data[4] <br>";
  // }

  // $jumlah_data = mysqli_num_rows($hasil_query_tblmahasiswa);
  // echo "$jumlah_data";
  // echo "<br><br><br>";

  //cek apakah id mahasaiswa 20201 ada ?
  //$query_20201 = "SELECT * FROM mahasiswa WHERE nim='20201'";
  //koneksi ke database lalu jalankan query
  //$hasil_query_20201 = mysqli_query($koneksi, $query_20201);
  //proses pencarian
  // $jumlah_data_20201 = mysqli_num_rows($hasil_query_20201);
  // if ($jumlah_data_20201 == 1) {
  //   echo "Data di temukan";
  // }else {
  //   echo "Data tidak di temukan";
  // }

  //echo "<br>";
  //echo "=================== insert data ===================== <br>";
  //isi data ke table nilai
  // $isi_data = "INSERT INTO nilai VALUES ('','50','50','50')";
  // $query_isi_data = mysqli_query($koneksi, $isi_data);
  //periksa apakah
  //if ($query_isi_data) {
    //query berhasil
    //echo "data berhasil di tambah";
    //}else {
    //query gagal
    //echo "data gagal di tambah";
  //}
  // update nilai di table nilai
  // $edit_nilai = "UPDATE nilai SET kalkulus1=99 WHERE id_nilai='11'";
  // $query_edit_nilai = mysqli_query($koneksi, $edit_nilai);
  // if ($query_edit_nilai) {
  //   if ($jumlah_update = mysqli_affected_rows($koneksi)) {
  //     echo "Query berhasil, terdapat $jumlah_update ";
  //   }else {
  //     echo "Query berhasil, tidak ada data yg di update";
  //   }
  // }else {
  //   echo "query gagal di jalankan";
  // }

  //delete data di table
  // $query_hapus_tblnilai = "DELETE FROM nilai WHERE bahasa_indonesia='50' OR bahasa_indonesia='60'";
  // $proses_query_hps = mysqli_query($koneksi, $query_hapus_tblnilai);
  // //periksa query, tampilkan pesan keslahan jika gagal
  // if ($proses_query_hps) {
  //   if ($jumlah_delete = mysqli_affected_rows($koneksi)) {
  //       echo "Query berhasil, terdapat $jumlah_delete data yang di hapus.";
  //   }else {
  //     echo "Query berhasil, tidak ada data yang di hapus.";
  //   }
  // }else {
  //   die("Query gagal di jalankan");
  // }

  $jumlah_baris = mysqli_affected_rows($koneksi);
  echo "$jumlah_baris";














 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="andriawan">
    <title>Mahasiswa</title>
    <link rel="icon" href="plus.png" type="image/png">
  </head>
  <body>
    <div class="container">
      <h3>Daftar Mahasiswa Universitas TechGo</h3>
    </div>
  </body>
</html>
