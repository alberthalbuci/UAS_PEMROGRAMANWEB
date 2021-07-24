  <html>
  <head>
  <title>Prima Foto</title>
  </head>
  <body>
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="normalize.min.css">
    <link rel="stylesheet" href="tes.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <img src="BANER.png" alt=" " width="1320" height="300">
    <br>
    <br>
    <center>
    <a href="form_simpan.php" class="btn btn-info  btn-xs">Cetak Foto</a> 
    </center>
    <br>
    <table class="table bg-info">  
    <tr class="bg-info">
      <th scope="col">Foto</th>
      <th scope="col">Nama</th>
      <th scope="col">Ukuran Foto</th>
      <th scope="col">Notes</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  </tr>
<?php
// Load file koneksi.php
include "koneksi.php"; 
$query = "SELECT * FROM siswa"; // Query untuk menampilkan semua data siswa
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query 
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
echo "<tr>";
echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
echo "<td>".$data['nama']."</td>";
echo "<td>".$data['jenis_kelamin']."</td>";
echo "<td>".$data['alamat']."</td>";
echo "<td><a href='proses_hapus.php?nama=".$data['nama']."'>Hapus</a></td>";
		echo "</tr>";
echo "</tr>";
}
?>
</table>
<br>
<br>
<br>
<br>
<br>
<img src="foto.jpg" alt="" width="500" height="500">
<img src="1.jpg" alt="" width="500" height="500">
<br>
<br>
<br>
<br>
<br>
<div id="container">
    <div id="header">
        <h1>Prima Foto Studio Digital</h1>
    </div>
    <div id="content">
        <!--Bisa diisi teks lorem ipsum dibagian ini-->
    </div>
    <div id="footer">
        Copyright &copy; 2021
        Designed by Prima Foto
    </div>
</div>
</body>
</html>
