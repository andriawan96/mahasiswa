<?php
  //koneksi ke database
  $koneksi = mysqli_connect("localhost","root","","universitas");
  //query lihat data table mahasiswa
  $query_baca = "SELECT * FROM mahasiswa";
  //lalu lihat data di table mahasiswa
  $query_list_data = mysqli_query($koneksi, $query_baca);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List data tabel mahasiswa</title>
    <style media="screen">

      table{
        font-family: arial, sans-sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
      tr:nth-child(even){
        background-color: #dddddd;
      }

    </style>
  </head>
  <body>
    <table>
      <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Fakultas</th>
        <th>Jurusan</th>
        <th>IPK</th>
      </tr>
      <tr>
        <?php
          //menampilkan data dengan fungsi fetch array
          //ulang data dengan while
          $i = 1;
          while ($data = mysqli_fetch_array($query_list_data)) {
         ?>
        <td><?php echo $i++;?></td>
        <td><?php echo "$data[0]";?></td>
        <td><?php echo "$data[1]";?></td>
        <td><?php echo "$data[2]";?></td>
        <td><?php echo "$data[3]";?></td>
        <td><?php echo "$data[4]";?></td>
        <td><?php echo "$data[5]";?></td>
        <td><?php echo "$data[6]";?></td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>
