<html>
  <head>
  <title>Prima Foto</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
  <body>

  <header class="container bg-info text-black">
        <div class="row">
            <div class="col-20 py-0 text-center">
                <h1 class="display-0">Cetak Foto</h1>
            </div>
        </div>
    </header>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table class="table bg-info">
  <tr>
  <br>
 <td>Nama</td>
 <td><input type="text" name="nama"></td>
 </tr>
 <tr>
 <td>Ukuran Foto</td>
 <td>
 <select name="jenis_kelamin" id="jk">
  <option value="">Pilih Ukuran Foto</option>
  <option value="2x3">2X3</option>
  <option value="3x4">3X4</option>
  <option value="4x6">4X6</option>
  <option value="2R">2R</option>
  <option value="3R">3R</option>
  <option value="4R">4R</option>
  <option value="5R">5R</option>
  <option value="10R">10R</option>
  <option value="10R+">10R+</option>
</select>
 </td>
 </tr>
 <tr>
 <td>Notes</td>
 <td><textarea name="alamat"></textarea></td>
 </tr>
 <tr>
 <td>Foto</td>
 <td><input type="file" name="foto"  class="btn btn-dark  btn-xs"></td>
 </tr>
 </table>  
 <hr>
 <input type="submit" value="Simpan"  class="btn btn-info  btn-xs">
 <a href="index.php"><input type="button" value="Batal"  class="btn btn-info  btn-xs"></a>
 </form>
 </body>
 </html>