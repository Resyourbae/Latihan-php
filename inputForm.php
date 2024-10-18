<?php
include "koneksidb.php";
// paanggil koneksi database
if (isset($_POST['btnsimpan'])){
    // persiapan simpan data
    $simpan = mysqli_query($koneksidb, "INSERT INTO tb_member(Nama,Alamat,Telp,Email,hobi)
    VALUES
    ('$_POST[Nama]','$_POST[Alamat]','$_POST[Telp]','$_POST[Email]','$_POST[Hobi]')");

// jika simpan sukses
if($simpan){
    echo "<script>alert('berhasil simpan Registrasi')</script>";
    echo "<script>window.location.href='inputForm.php'</script>";
}else
  echo"<script>alert('gagal simpan Registrasi')</script>";
  echo"<script>window.location.href='inputForm.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Input From</title>
</head>
<body>
  <!-- Navbar start -->
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="menu.php">Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="inputForm.php">Input data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="datamember.php">Data member</a>
  </li>
</ul>
<!-- Navbar end -->
 <br>
 <br>
 <!-- input  start -->
  <div class="container">
    <h2 class="text-center">Data Input Member</h2>
    <form method="post" name="form1">
 <div class="form-floating mb-3 col-md-5 mx-auto">
  <input type="text" class="form-control" required name="Nama" placeholder="Nama">
  <label for="Nama">Nama Lengkap</label>
</div>
 <div class="form-floating mb-3 col-md-5 mx-auto">
  <input type="text" class="form-control" required name="Alamat" placeholder="Alamat">
  <label for="Alamat">Alamat</label>
</div>
 <div class="form-floating mb-3 col-md-5 mx-auto">
  <input type="number" class="form-control" required name="Telp" >
  <label for="Telp">Telp</label>
</div>
 <div class="form-floating mb-3 col-md-5 mx-auto">
  <input type="email" class="form-control" required name="Email" placeholder="Email">
  <label for="Email">Email</label>
</div>
 <div class="form-floating mb-3 col-md-5 mx-auto">
  <input type="text" class="form-control" required name="Hobi" placeholder="Hobi">
  <label for="Hobi">Hobi</label>
</div>
</div>
<div class="d-grid gap-2 col-4 mx-auto">
<button type="submit" class="btn btn-primary" name="btnsimpan">simpan</button>
<button type="reset" class="btn btn-danger">Reset</button>
</div>
</form>
 <!-- input  end -->
</body>
</html>