<?php
include "koneksidb.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Data member</title>
</head>

<body>
    <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="menu.php" class="navbar-brand">Menu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="inputForm.php" class="nav-link active" aria-current="page">Input data</a>
                </li>
                <li class="nav-item">
                    <a href="datamember.php" class="nav-link">Data member</a>
                </li>
                </li>
            </ul>
        </div>
    </div>
  </nav>
  <!--navbar end  -->
  <br>
<!-- table start -->
  <div class="container">
    <table align="table-center" class="table table-striped table-bordered table-hover">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Telp</th>
            <th class="text-center">Email</th>
            <th class="text-center">Ubah/Hapus</th>
        </tr>
        <?php
        $no = 1;
        $tampil = mysqli_query($koneksidb, "SELECT * FROM tb_member");
        while($data = mysqli_fetch_array($tampil)) :
        ?>
        <tr>
            <td class="text-center"><?= $no++?></td>
            <td class="text-center"><?= $data['Nama']?></td>
            <td class="text-center"><?= $data['Alamat']?></td>
            <td class="text-center"><?= $data['Telp']?></td>
            <td class="text-center"><?= $data['Email']?></td>
            <td class="text-center">
                <a href="ubahdata.php?id=<?=$data['ID'];?>"><button class="btn btn-primary">Ubah</button></a>
                <a href="#" class="btnn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $no ?>"><button class="btn btn-danger">Hapus
            </button></a>
            </td>
        </tr>
        <!-- modal hapus-->
         <div class="modal fade" id="hapus<?=$no?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi</h5>
                    </div>
                    <form method="post" action="hapus.php">
                        <input type="hidden" name="Nama" value="<?=$data['Nama']?>">
                        <div class="modal-body">
                            <h5 class="text-center">Apakah Anda Yakin akan hapus data ini?<br>
                            <span class="text-danger"><?= $data['Nama']?> - <?= $data['Telp'] ?></span>
                        </h5>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="bhapus">Hapus</button>
                            <button type="button" class="btn btn-danger" data-bs-dismis="modal">batal</button>
                        </div>
                    </form>
                </div>
            </div>
         </div>
        <?php endwhile; ?>
    </table>   
  </div>
<!-- table end -->
</body>

</html>